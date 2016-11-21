<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected  $table = 'products';

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'url_image',
        'url_product',
        'price',
        'situation'

    ];

    public function categories(){
        return $this->hasMany(Category::class);
    }
}
