<?php

use App\Http\Controllers\Parapharmcontroller;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProductController;

use App\Models\Parapharme;

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
Route::get('/Products/{catid}',
[ProductController::class, 'index']);






