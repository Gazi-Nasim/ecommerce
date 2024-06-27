<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopDepartmentsController extends Controller
{
    public function fruitsNut()
    {
        return view('frontend.fruitsNut');
    }
}
