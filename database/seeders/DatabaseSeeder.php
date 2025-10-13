<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $categories=[
        ['id'=>'1','name'=>'Soins du Visage','description'=>'Produits pour le soin du visage','imagepath'=>'assets/img/a1.jpg'],
        ['id'=>'2','name'=>'Soins du Corps','description'=>'Produits pour le soin du corps','imagepath'=>'assets/img/a2.jpg'],
        ['id'=>'3','name'=>'Soins des Cheveux','description'=>'Produits pour le soin des cheveux','imagepath'=>'assets/img/a3.jpg'],
       ];
       DB::table('parapharme')->insertOrIgnore($categories);
       foreach ($categories as $category) {
   // DB::table('parapharme')->updateOrInsert(
      //  ['id' => $category['id']],
       // $category
   // );
      } 
    
     $products=([
        ['name'=>'Crème Hydratante','description'=>'Crème pour hydrater la peau','price'=>'19','category_id'=>'1','imagepath'=>'products/b1.jpg'],
    ['name'=>'Sérum Anti-Âge','description'=>'Sérum pour réduire les rides','price'=>'29','category_id'=>'1','imagepath'=>'products/b2.jpg'],
    ['name'=>'Gel Douche Revitalisant','description'=>'Gel douche pour revitaliser la peau','price'=>'9','category_id'=>'2','imagepath'=>'products/b1.jpg'],
    ['name'=>'Lait Corporel Nourrissant','description'=>'Lait corporel pour nourrir la peau','price'=>'14','category_id'=>'2','imagepath'=>'products/b2.jpg'],
    ['name'=>'Shampooing Fortifiant','description'=>'Shampooing pour renforcer les cheveux','price'=>'12','category_id'=>'3','imagepath'=>'products/b3.jpg'],
    ['name'=>'Après-Shampooing Réparateur','description'=>'Après-shampooing pour réparer les cheveux','price'=>'15','category_id'=>'3','imagepath'=>'products/b1.jpg'],
    
   

    ]);
    foreach ($products as $product) {
    \App\Models\Product::updateOrInsert(
        ['name' => $product['name']], // critère pour éviter les doublons
        $product
    );
   // Product::where('imagepath', 'like', 'assets/img/%')->get()->each(function ($product) {
      //  $filename = basename($product->imagepath); // récupère "b1.jpg"
      //  $product->imagepath = 'products/' . $filename;
      //  $product->save();
  //  });

  }
}

}  


