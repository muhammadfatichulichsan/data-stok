<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable = ['product_name','slug','deskripsi','harga','stock','category_id','product_kode'];
}
