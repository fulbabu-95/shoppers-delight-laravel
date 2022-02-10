<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use Session;

class PdfController extends Controller
{
    //

    public function view_pdf($id){

        Session::put('id', $id);
        try{
            $pdf = \App::make('dompdf.wrapper')->setPaper('a4', 'landscape');
            $pdf->loadHTML($this->convert_orders_data_to_html());

            return $pdf->stream();
        }
        catch( \Exception $e){
            return redirect('/orders')->with('error', $e->getMessage());
        }
    }

    public function convert_orders_data_to_html(){

        $orders = Orders::where('id',Session::get('id'))->get();

        foreach($orders as $order){
            $names = $order->name;
            $address = $order->address;
            $date = $order->created_at;
        }

        $orders->transform(function($order, $key){
            $order->cart = unserialize($order->cart);

            return $order;
        });


        $output = "<link rel='stylesheet' href='frontend/css/style.css'>
                        <table class='table'>
                            <thead class='thead'>
                                <h1 style='color: #616161; font-size: 40px; font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-weight: 500'>Shopper's Delight</h1>
                                <h3 style='color: #616161; font-size: 15px; font-family: calibri;'>351 Bir Uttam Mir Shawkat Sarak, Tejgaon, Dhaka 1208, Bangladesh</h3>
                                <h3 style='color: #616161; font-size: 15px; font-family: calibri;'>Email : fahimislambce@gmail.com, fulbabucse@gmail.com</h3></br>
                                <h3 style='color: #616161; font-size: 15px; font-family: calibri;'>Phone : +880 1736 5342 95, +880 1736 5342 95</h3>
                                <h3 style='color: #616161; font-size: 15px; font-family: calibri;'>www.bazar.com</h3><br>
                                <tr class='text-left'>
                                    <th>
                                        Customer Name : <b> $names </b> <br> Customer Address :<b>  $address  </b><br> Date :  <b>$date</b>
                                    </th>
                                    
                                </tr>
                                
                            </thead>
                        </table>
                        <table class='table'>
                            <thead class='thead-primary'>
                                <tr class='text-center'>
                                    <th>Image</th>
                                    <th>Product name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>";
        
        foreach($orders as $order){
            foreach($order->cart->items as $item){

                $output .= '<tr class="text-center">
                                <td class="image-prod"><img src="storage/product_images/'.$item['product_image'].'" alt="" style = "height: 80px; width: 80px;"></td>
                                <td class="product-name">
                                    <h3>'.$item['product_name'].'</h3>
                                </td>
                                <td class="price">$ '.$item['product_price'].'</td>
                                <td class="qty">'.$item['qty'].'</td>
                                <td class="total">$ '.$item['product_price']*$item['qty'].'</td>
                            </tr><!-- END TR-->
                            </tbody>';

            }

            $totalPrice = $order->cart->totalPrice; 

        }

        $output .='</table>';

        $output .='<table class="table">
                        <thead class="thead">
                            <tr class="text-center">
                                    <th>Total</th>
                                    <th>$ '. $totalPrice .'</th>
                            </tr>
                        </thead>
                    </table>';


        return $output;
                
    

    }
}
