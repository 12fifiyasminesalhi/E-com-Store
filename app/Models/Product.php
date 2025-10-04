<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function category()
{
    return $this-> belongsTo(parapharme::class,'category_id');
}
protected $fillable = [
        'name',
        'description',
        'price',
    
        'stock',
        'imagepath', // ajoute tous les champs nécessaires
    ];
}
