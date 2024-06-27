<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function store(Request $r)
    {
        
        $d=$r->all();
        ContactMessage::create($d);
        return redirect()->route('contact');
    
        
    }
}
