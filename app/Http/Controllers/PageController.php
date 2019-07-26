<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function gallery($id)
    {
        return view('gallery',['id' => $id]);
    }
}
