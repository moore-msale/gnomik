<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function mail(Request $request)
    {
        \Mail::to('askar@sa.kg')->send(new Send($request->all()));

        if ($request->ajax()){
            return response()->json("success");
        }

        return back();
    }

}
