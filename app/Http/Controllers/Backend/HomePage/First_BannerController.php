<?php

namespace App\Http\Controllers\Backend\HomePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeModel;



class First_BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=HomeModel::all();
        return view('backend.homepage.banner.banner',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        HomeModel::create($data);
        return redirect()->route('banner')->with('msg','Successfully inserted');
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
        $data=HomeModel::find($id);
        $fileName=$data['photo'];
        return view('backend.homepage.banner.edit_banner',compact('data','fileName'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=HomeModel::find($id)->update($r->all());        
        $data=$r->all();
        $fileName = time().'_'.$r->photo->getClientOriginalName();
        $r->photo->move(public_path('uploads/'),$fileName);

        $data['photo']=$fileName;
        HomeModel::find($id)->update($data);
        return redirect()->route('banner')->with('msg','Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        HomeModel::find($id)->delete();
        return redirect('/banner');
    }
}
