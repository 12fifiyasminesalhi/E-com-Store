<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    
    public function show()
    {
        $user_id = auth::user()->id;
         $carts= Cart::where('user_id', $user_id)->get();

    return view('Cart', ['carts' => $carts]);}
    
}
