<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function getDefaultPictures()
    {
        return Image::join('default_profile_images', 'images.id', '=', 'default_profile_images.image_id')->get();
    }

    public function show($filename)
    {
        if (!Storage::exists("uploads/{$filename}")) {
            abort(404);
        }

        $file = Storage::get("uploads/{$filename}");
        $type = Storage::mimeType("uploads/{$filename}");

        return Response::make($file, 200, ['Content-Type' => $type]);
    }
}
