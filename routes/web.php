<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ecommerceController;
use App\Http\Controllers\adminController;

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
Route::get('/index',[ecommerceController::class,'index']);
Route::get('/products',[ecommerceController::class,'products']);
// Route::get('/addtocart',[ecommerceController::class,'addtocart']);
Route::get('/home',[ecommerceController::class,'home']);
Route::get('/customerhome',[ecommerceController::class,'customerhome']);
Route::get('/feedback',[ecommerceController::class,'feedback']);
Route::post('/feedbackaction',[ecommerceController::class,'feedbackaction']);
Route::get('/selectproduct/{id}',[ecommerceController::class,'selectproduct']);

Route::get('/about',[ecommerceController::class,'about']);
Route::get('/contact',[ecommerceController::class,'contact']);
Route::post('/contactinsert',[ecommerceController::class,'contactinsert']);

Route::get('/vendorindex',[ecommerceController::class,'vendorindex']);
Route::get('/vendorregister',[ecommerceController::class,'vendorregister']);
Route::post('/vendorinsert',[ecommerceController::class,'vendorinsert']);
Route::get('/customerregister',[ecommerceController::class,'customerregister']);
Route::get('/editprofile',[ecommerceController::class,'editprofile']);
Route::post('/editprofileaction/{id}',[ecommerceController::class,'editprofileaction']);
Route::post('/customerinsert',[ecommerceController::class,'customerinsert']);
Route::get('/adminlogin',[ecommerceController::class,'adminlogin']);
Route::post('/adminloginaction',[ecommerceController::class,'adminloginaction']);
Route::get('/vendorlogin',[ecommerceController::class,'vendorlogin']);
Route::post('/vendorloginaction',[ecommerceController::class,'vendorloginaction']);
Route::get('/customerlogin',[ecommerceController::class,'customerlogin']);
Route::post('/customerloginaction',[ecommerceController::class,'customerloginaction']);
Route::get('/adminindex',[adminController::class,'adminindex']);
Route::get('/addabout',[adminController::class,'addabout']);
Route::post('/addaboutinsert',[adminController::class,'addaboutinsert']);
Route::get('/viewabout',[adminController::class,'viewabout']);
Route::get('/editviewabout/{id}',[adminController::class,'editviewabout']);
  Route::post('/viewabouteditaction/{id}',[adminController::class,'viewabouteditaction']);
  Route::get('/deleteviewabout/{id}',[adminController::class,'deleteviewabout']);
  Route::get('/viewvendors',[adminController::class,'viewvendors']);
  Route::get('/vendorapprove/{id}',[adminController::class,'vendorapprove']);
  Route::get('/vendordecline/{id}',[adminController::class,'vendordecline']);
  Route::get('/addcategory',[adminController::class,'addcategory']);
  Route::post('/addcategoryaction',[adminController::class,'addcategoryaction']);
  
  Route::get('/viewcategory',[adminController::class,'viewcategory']);
  Route::get('/editcategory/{id}',[adminController::class,'editcategory']);
  Route::post('/categoryeditaction/{id}',[adminController::class,'categoryeditaction']);
  Route::get('/deletecategory{id}',[adminController::class,'deletecategory']);

  Route::get('/viewusers',[adminController::class,'viewusers']);
  // Route::get('/userapprove/{id}',[adminController::class,'userapprove']);
  // Route::get('/userdecline/{id}',[adminController::class,'userdecline']);
  Route::get('/viewcontact',[adminController::class,'viewcontact']);

  
  Route::get('/updateprofile',[ecommerceController::class,'updateprofile']);
  Route::post('/vendoreditaction/{id}',[ecommerceController::class,'vendoreditaction']);
  Route::get('/addproduct',[ecommerceController::class,'addproduct']);
  Route::post('/addproductaction',[ecommerceController::class,'addproductaction']);
  Route::get('/viewproduct',[adminController::class,'viewproduct']);
  Route::get('/productapprove/{id}',[adminController::class,'productapprove']);
 Route::get('/productdecline/{id}',[adminController::class,'productdecline']);
 Route::get('/viewfeedback',[adminController::class,'viewfeedback']);
 Route::get('/viewvendorproduct',[ecommerceController::class,'viewvendorproduct']);
 Route::get('/editproduct/{id}',[ecommerceController::class,'editproduct']);
  Route::post('/editproductaction/{id}',[ecommerceController::class,'editproductaction']);
  Route::get('/deleteproduct/{id}',[adminController::class,'deleteproduct']);
   
    Route::get('/productdetails/{id}',[ecommerceController::class,'productdetails']);
    Route::post('/cartinsert',[ecommerceController::class,'cartinsert']);
     Route::get('/viewcart',[ecommerceController::class,'viewcart']);
   Route::get('/totalprize/{id}',[ecommerceController::class,'totalprize']);
   Route::get('/deletecart/{id}',[ecommerceController::class,'deletecart']);
   Route::get('/displayaddress',[ecommerceController::class,'displayaddress']);
   Route::post('/proceedtopay',[ecommerceController::class,'proceedtopay']);
    Route::get('/payment',[ecommerceController::class,'payment']);
    Route::post('/paymentaction/{id}',[ecommerceController::class,'paymentaction']);
     Route::get('/vieworders',[ecommerceController::class,'vieworders']);
     Route::get('/logout',[ecommerceController::class,'logout']);
     Route::get('/adminupdateprofile',[adminController::class,'adminupdateprofile']);
  Route::post('/admineditaction/{id}',[adminController::class,'admineditaction']);
  Route::get('/adminlogout',[adminController::class,'adminlogout']);
  Route::get('/vendorlogout',[ecommerceController::class,'vendorlogout']);
    
    



  


