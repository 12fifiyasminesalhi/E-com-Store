<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\products;

class parapharme extends Model
{
    use HasFactory;
    protected $table = 'parapharme'; 

public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }




}
