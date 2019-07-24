<?php

namespace App\Http\Controllers;

use App\Mail\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function mail(Request $request)
    {
        \Illuminate\Support\Facades\Mail::to('sadikgnomik@gmail.com')->send(new Mail($request->all()));

        if ($request->ajax()){
            return response()->json("success");
        }

        return back();
    }

}
