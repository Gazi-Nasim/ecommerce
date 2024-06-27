<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeModel;
use App\Models\Backend\HomePage\Product;
use App\Models\Backend\HomePage\category;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index()
    {
        $data=HomeModel::all();
        $product= DB::table('products')->select('products.name','products.photo','products.price')->get();
        
        // return view("frontend.home")->with(compact('data','product'));
         return view('frontend.home',compact('data','product'));
        
    }
}
