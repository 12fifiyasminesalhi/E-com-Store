<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
    }
}
