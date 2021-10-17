<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $primaryKey = 'id';

    //function category
    public function category(){
        return $this->belongsTo(Category::class, "category_id");
    }
}
