<?php

namespace App\Http\Controllers\Backend\HomePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\HomePage\Product;
use App\Models\Backend\HomePage\category;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class ProductController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data=Product::all();
          $categories=category::all();
        $data = DB::table('products')
        ->join('categories','categories.id','=','products.category_id')
        ->select('products.*','categories.title')
        ->get();
         return view('backend.homepage.products.product',compact('data','categories'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    
    {   
        // dd($request);
        // request()->validate([
        //     'name'=>'required',
        //     'category_id'=>'required',
        //     'short_description'=>'required',
        //     'full_description'=>'required',
        //     'price'=>'required',
        //     'photo'=>'required',
        // ]);
        $photoName = time().'_'.$request->photo->getClientOriginalName();
        $request->photo->move(public_path('uploads/'),$photoName);

        $product = new Product;
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->short_description = $request->short_description;
        $product->full_description = $request->full_description;
        $product->price = $request->price;
        $product->photo = $photoName;
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=Product::find($id);
        return view('backend.homepage.products.edit_product',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

       $product = Product::find($id);
       
       $photo = $product->photo;

       if($request->photo){
        $photoName = time().'_'.$request->photo->getClientOriginalName();
        $request->photo->move(public_path('uploads/'),$photoName);
        $photo = $photoName;
       }
       $product->name = $request->name;
       $product->short_description = $request->short_description;
       $product->full_description = $request->full_description;
       $product->price = $request->price;
       $product->photo = $photo;
       $product->save();

       return redirect()->route('product.index')->with('msg','Successfully Updated');
















        // $product = Product::find($id);
        // // dd($product);
        // $photo = $product->photo;

        // if($r->photo){
        //     $fileName = time().'_'.$r->photo->getClientOriginalName();
        //     $r->photo->move(public_path('uploads/'), $fileName);
        //     $photo = $fileName; 
        // }
        // $product->name = $r->name;
        // $product->short_description = $r->short_description;
        // $product->full_description = $r->full_description;
        // $product->price = $r->price;
        // $product->photo = $photo;
        // $product->save();
        // return redirect()->route('product.index')->with('msg','Successfully updated');







    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return view('edit_blog');
    }
}
