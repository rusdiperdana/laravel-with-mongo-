<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Product extends Eloquent
{
    protected $connection="mongodb";
    protected $collection="product";  
    protected $filable = ['slug','title,','id_category','description','price','is_available','image'];
    protected $guarded = [];
}
