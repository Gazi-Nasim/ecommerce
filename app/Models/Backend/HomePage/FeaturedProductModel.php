<?php

namespace App\Models\Backend\HomePage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedProductModel extends Model
{
    use HasFactory;

    protected $fillable=['name','price','photo'];
}
