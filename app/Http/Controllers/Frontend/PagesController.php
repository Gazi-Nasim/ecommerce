<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function shop_details()
    {
        return view('frontend.shop-details');
    }
    public function shoping_cart()
    {
        return view('frontend.shoping-cart');
    }
    public function check_out()
    {
        return view('frontend.checkout');
    }
    public function blog_details()
    {
        return view('frontend.blog-details');
    }
}
