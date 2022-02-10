<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Models\Client;
use App\Models\Orders;
use App\Cart;
use App\Mail\TestMail;
use Session;

class ClientController extends Controller
{
    public function home(){
        $sliders = Slider::All()->where('status', 1);
        $products = product::All()->where('status', 1);
        return view('client.home')->with('sliders', $sliders)->with('products', $products);
    }

    public function shop(){
        $categories = Category::All();
        $products = product::All()->where('status', 1);
        return view('client.shop')->with('categories', $categories)->with('products', $products);
    }

    public function cart(){

        if (!Session::has('cart')) {
            return view('client.cart');
        }
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        return view('client.cart', ['products' => $cart->items]);
    }

    public function login_account(){
        return view('client.login_account');
    }

    public function checkout(){
        if (!Session::has('client')) {
            return view('client.login_account');
        }

        if (!Session::has('cart')) {
            return view('client.cart');
        }
        return view('client.checkout');
    }

    public function signup(){
        return view('client.signup');
    }

    public function addtocart($id){
        $product = Product::find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        Session::put('cart', $cart);

        //dd(Session::get('cart'));
        return back();
    }

    public function update_quantity(Request $request, $id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->updateQty($id, $request->quantity);
        Session::put('cart', $cart);

        //dd(Session::get('cart'));
        return back();
    }

    public function remove_cart($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
       
        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        }
        else{
            Session::forget('cart');
        }

        //dd(Session::get('cart'));
        return back();
    }

    public function create_account(Request $request){
        $this->validate($request, ['email' => 'email|required|unique:clients', 'password' => 'required|min:8']);

        $client = new Client();
        $client->email = $request->input('email');
        $client->password = bcrypt($request->input('password'));
        $client->save();
        return back()->with('status', 'Your account has been Created successfully');
    }

    public function access_account(Request $request){
        $this->validate($request, ['email' => 'email|required', 'password' => 'required']);

        $client = Client::where('email', $request->input('email'))->first();

        if ($client) {
            if (Hash::check($request->input('password'), $client->password)) {
                Session::put('client', $client);
                return redirect('/cart');
            }else{
                return back()->with('status', 'Wrong email or password');
            }
        }else{
            return back()->with('status', 'You do not have an account this email');
        }

    }

    public function logout(Request $request){
        Session::forget('client');
        return redirect('/shop');
    }

    public function postcheckout(Request $request){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $order = new Orders();
        $order->name = $request->input('name');
        $order->address = $request->input('address');
        $order->cart = serialize($cart);

        $order->save();

        Session::forget('cart');
        return redirect('/cart')->with('status', 'Your purchase has been successfully completed !!');
    }

    public function orders(){
        $orders = Orders::All();

        $orders->transform(function($order, $key){
            $order->cart = unserialize($order->cart);

            return $order;
        });
        return view('admin.orders')->with('orders', $orders);
    }

    public function delete_order($id){
        $order = Orders::find($id);

        $order->delete();

        return back()->with('status', 'The order has been deleted successfully.');
    }


    public function about(){
        return view('client.about');
    }
}
