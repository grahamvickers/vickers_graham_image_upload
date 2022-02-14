<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Image;

class UploadController extends Controller
{
    /**
     * Return all instances of the listing model
     *
     * @return Illuminate\Http\JsonResponse
     *
     */

    public function index(Request $request){
        $uploads = ImageGallery::all()->map->only(['name', 'imgUri']);

         return response()->json($uploads, 200);
    }
}