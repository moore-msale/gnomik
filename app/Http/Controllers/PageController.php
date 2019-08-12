<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function gallery($id)
    {
        return view('gallery',['id' => $id, 'galleries' => Gallery::all()]);
    }

    public function photo()
    {
        return view('photo');
    }

    public function photoCreate(Request $request)
    {
        dd($request);
    }
}
