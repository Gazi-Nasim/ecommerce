<?php

namespace App\Http\Controllers\Backend\Blogs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::all();
         return view('backend.homepage.blogs.blogs',compact('blog'));
        
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
    
            //     $photoName = time().'_'.$request->photo->getClientOriginalName();
            //     $request->photo->move(public_path('uploads/'),$photoName);
            //     $photo = $photoName;
            //    }
            //    $product->name = $request->name;
            //    $product->short_description = $request->short_description;
            //    $product->full_description = $request->full_description;
            //    $product->price = $request->price;
            //    $product->photo = $photo;
            //    $product->save();
        $data = $request->all();
        $photoName = time().'_'.$request->photo->getClientOriginalName();
        $request->photo->move(public_path('uploads/',$photoName));
        $data['photo'] = $photoName;
        // $blog = new Blog;
        // $blog->headline = $request->headline;
        // $blog->brief = $request->brief;
        // $blog->photo = $request->photo;
        // $blog->save();
        $blog = Blog::create($data);
        return redirect()->route('blog.index')->with('msg','Successfully updated');
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
        $data = Blog::find($id);
        
        return view('backend.homepage.blogs.edit_blog',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $data = Blog::find($id);
        $photo = $data->photo;
        if($request->photo){
            $photoName = time().'_'.$request->photo->getClientOriginalName();
            $request->photo->move(public_path('uploads/',$photoName));
            $photo = $photoName;
        }
        $data->headline = $request->headline;
        $data->brief = $request->brief;
        $data->photo = $photo;
        $data->save();
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::find($id)->delete();
        return redirect()->route('blog.index');
    }
}
