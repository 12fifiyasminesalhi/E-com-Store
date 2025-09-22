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
        ['id'=>'1','name'=>'Soins du Visage','description'=>'Produits pour le soin du visage','imagepath'=>'assets/img/b1.jpg'],
        ['id'=>'2','name'=>'Soins du Corps','description'=>'Produits pour le soin du corps','imagepath'=>'assets/img/b2.jpg'],
        ['id'=>'3','name'=>'Soins des Cheveux','description'=>'Produits pour le soin des cheveux','imagepath'=>'assets/img/b3.jpg'],
       ];
       DB::table('parapharme')->insertOrIgnore($categories);
    
     Product::insert([
        ['name'=>'Crème Hydratante','description'=>'Crème pour hydrater la peau','price'=>'19','category_id'=>'1','imagepath'=>'assets/img/b1.jpg'],
    ['name'=>'Sérum Anti-Âge','description'=>'Sérum pour réduire les rides','price'=>'29','category_id'=>'1','imagepath'=>'assets/img/b2.jpg'],
    ['name'=>'Gel Douche Revitalisant','description'=>'Gel douche pour revitaliser la peau','price'=>'9','category_id'=>'2','imagepath'=>'assets/img/b1.jpg'],
    ['name'=>'Lait Corporel Nourrissant','description'=>'Lait corporel pour nourrir la peau','price'=>'14','category_id'=>'2','imagepath'=>'assets/img/b2.jpg'],
    ['name'=>'Shampooing Fortifiant','description'=>'Shampooing pour renforcer les cheveux','price'=>'12','category_id'=>'3','imagepath'=>'assets/img/b3.jpg'],
    ['name'=>'Masque Capillaire Réparateur','description'=>'Masque pour réparer les cheveux abîmés','price'=>'15','category_id'=>'3','imagepath'=>'assets/img/logo.jpg'],
 
    ]);
    


}

    

}
