<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
    	'category_category_id',
    	'user_id',
    	'product_name',
    	'price',
    	'image_path',
    	'description'
    ];
}
