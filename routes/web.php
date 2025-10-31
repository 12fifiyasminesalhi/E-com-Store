<?php

use App\Http\Controllers\Parapharmcontroller;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;

use App\Models\Cart;
use App\Models\Parapharme;
use GuzzleHttp\Middleware;

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

Route::get('/', function () {
    $result= Parapharme::all();
   // dd($result);
           
    // $result= DB::table('parapharme')->get();
   // dd($result);
    return view('welcome',  ['parapharme'=>$result] );
    
});


Route::get('/About', function () {
    return view('About');
});
Route::get('/Products/{catid?}',
[ProductController::class, 'index']);







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Cart', [App\Http\Controllers\CartController::class, 'show'])->middleware('auth');
Route::post('/addtocart/{product_id}', function ($product_id) {
    $newcart= new Cart();
    $newcart->product_id= $product_id;
    $newcart->user_id=auth()-> user()-> id;
    $newcart->quantity=1;
    $newcart->save();
    return redirect('/Cart');
    
})->middleware('auth');