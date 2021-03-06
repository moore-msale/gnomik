<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

class GalleryController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    public function store(Request $request)
    {
        return parent::store($request); // TODO: Change the autogenerated stub
    }

    public function massCreate()
    {
        return view('gallery.mass_create');
    }

    public function massStore(Request $request)
    {
        if ($request->images) {
            foreach ($request->images as $image) {
                $gallery = new Gallery();

                $fileName = 'galleries/'.uniqid('gallery_').'.jpg';

                $image = ImageManagerStatic::make($image)->stream('jpg', 40);

                Storage::disk('local')->put('public/'.$fileName, $image);

                $gallery->image = $fileName;
                $gallery->type = $request->type;
                $gallery->save();
            }
        }

        return redirect()->back();
    }
}
