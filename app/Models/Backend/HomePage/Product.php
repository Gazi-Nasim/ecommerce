<?php

namespace App\Models\Backend\HomePage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=['category_id','name','short_description','full_description','price','photo'];

}
