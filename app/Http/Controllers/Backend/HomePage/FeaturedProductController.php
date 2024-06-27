<?php

namespace App\Http\Controllers\Backend\HomePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\HomePage\FeaturedProductModel;
use App\Models\Backend\HomePage\Product;
use App\Models\Backend\HomePage\category;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class FeaturedProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=FeaturedProductModel::all();
        return view('backend.homepage.featuredProduct.featured_product',compact('data'));
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
    public function store(Request $r)
    {
        $data=$r->all();

        $fileName = time().'_'.$r->photo->getClientOriginalName();
        $r->photo->move(public_path('uploads/'),$fileName);

        $data['photo']=$fileName;
        FeaturedProductModel::create($data);
        return redirect()->route('fp.index')->with('msg','Successfully inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=FeaturedProductModel::find($id);
        return view('backend.homepage.featuredProduct.edit_featured_product',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $r, string $id)
    {
        $data=FeaturedProductModel::find($id)->update($r->all());
         
         $data=$r->all();

         $fileName = time().'_'.$r->photo->getClientOriginalName();
         $r->photo->move(public_path('uploads/'),$fileName);

         $data['photo']=$fileName;
         FeaturedProductModel::find($id)->update($data);
         return redirect()->route('fp.index')->with('msg','Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        FeaturedProductModel::find($id)->delete();
        return redirect()->route('fp.index');
    }
}
