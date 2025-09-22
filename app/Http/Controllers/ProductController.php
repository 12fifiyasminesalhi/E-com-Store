<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index($catid=null)
    { 
      
    if($catid === null){
            $result = Product::all();
            
        
            
          }
      
      else{
        
           $result = product::where('category_id', $catid)->get();
          }
          return view('Product', ['products'=>$result] );

    }


}
