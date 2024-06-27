<?php

namespace App\Http\Controllers\Backend\HomePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePage\bannerTwo_Model;

class BannerTwoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=bannerTwo_Model::all();
        return view('backend.banner_two',compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $r)
    {
        $data=$r->all();
        $fileName = time().'_'.$r->photo->getClientOriginalName();
        $r->photo->move(public_path('uploads/'),$fileName);
        $data['photo']=$fileName;
        bannerTwo_Model::create($data);
        return redirect()->route('bannerTwo')->with('msg','Successfully inserted');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $data=bannerTwo_Model::find($id);
        return view('backend.edit_bannerTwo',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $r, $id)
    {
        $data=$r->all();

        $fileName = time().'_'.$r->photo->getClientOriginalName();
        $r->photo->move(public_path('uploads/'),$fileName);
         $data['photo']=$fileName;
        bannerTwo_Model::find($id)->update($data);
        return redirect()->route('bannerTwo')->with('msg','Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        bannerTwo_Model::find($id)->delete();
        return redirect('/bannerTwo');
    }
}
