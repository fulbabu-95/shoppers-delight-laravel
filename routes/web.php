<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddcategoryController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ContactController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/*CLIENT ROUTE*/ 
Route::get('', [ClientController::class, 'home']);
Route::get('/shop', [ClientController::class, 'shop']);
Route::get('/cart', [ClientController::class, 'cart']);
Route::get('/login_account', [ClientController::class, 'login_account']);
Route::get('/checkout', [ClientController::class, 'checkout']);
Route::get('/signup', [ClientController::class, 'signup']);
Route::get('/addtocart/{id}', [ClientController::class, 'addtocart']);
Route::post('/update_quantity/{id}', [ClientController::class, 'update_quantity']);
Route::get('/remove_cart/{id}', [ClientController::class, 'remove_cart']);
Route::post('/create_account', [ClientController::class, 'create_account']);
Route::post('/access_account', [ClientController::class, 'access_account']);
Route::get('/logout', [ClientController::class, 'logout']);
Route::post('/postcheckout', [ClientController::class, 'postcheckout']);
Route::get('/orders', [ClientController::class, 'orders']);
Route::get('/delete_order/{id}', [ClientController::class, 'delete_order']);


Route::get('/about', [ClientController::class, 'about']);





/*ADMIN PANEL*/

Route::get('/admin', [AdminController::class, 'admin']);


//////CATEGORY ROUTE//////
Route::get('/addcategory', [AddcategoryController::class, 'addcategory']);
Route::get('/categories', [AddcategoryController::class, 'categories']);
Route::post('/savecategory', [AddcategoryController::class, 'savecategory']);
Route::get('/edit_category/{id}', [AddcategoryController::class, 'edit_category']);
Route::post('/updatecategory', [AddcategoryController::class, 'updatecategory']);
Route::get('/delete_category/{id}', [AddcategoryController::class, 'delete_category']);

/////SLIDER ROUTE////
Route::get('/addsliders', [SlidersController::class, 'addsliders']);
Route::get('/sliders', [SlidersController::class, 'sliders']);
Route::post('/saveslider', [SlidersController::class, 'saveslider']);
Route::get('/edit_slider/{id}', [SlidersController::class, 'edit_slider']);
Route::post('/updateslider', [SlidersController::class, 'updateslider']);
Route::get('/activate_slider/{id}', [SlidersController::class, 'activate_slider']);
Route::get('/unactivate_slider/{id}', [SlidersController::class, 'unactivate_slider']);
Route::get('/delete_slider/{id}', [SlidersController::class, 'delete_slider']);


/////PRODUCT ROUTE///////
Route::get('/addproducts', [ProductsController::class, 'addproducts']);
Route::get('/products', [ProductsController::class, 'products']);
Route::post('/saveproducts', [ProductsController::class, 'saveproducts']);
Route::post('/updateproduct}', [ProductsController::class, 'updateproduct']);
Route::get('/edit_product/{id}', [ProductsController::class, 'edit_products']);
Route::get('/delete_product/{id}', [ProductsController::class, 'delete_product']);
Route::get('/activate_product/{id}', [ProductsController::class, 'activate_product']);
Route::get('/unactivate_product/{id}', [ProductsController::class, 'unactivate_product']);
Route::get('/view_product_by_category/{category_name}', [ProductsController::class, 'view_product_by_category']);





/////ORDER ROUTE//////
//Route::get('/orders', [OrdersController::class, 'orders']);

Route::get('/viewpdforder/{id}', [PdfController::class, 'view_pdf']);



/////Others//////

Route::get('/contact_us', [ContactController::class, 'contact']);
Route::post('/sent-message', [ContactController::class, 'sentEmail'])->name('contact.sent');


