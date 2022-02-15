<?php

namespace App\Http\Controllers\Api;

use App\Transformers\ImgTransformer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
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

    // public function index(Request $request){
    //     $images = ImageGallery::all()->map->only(['name', 'imgUri']);

    //     return response()->json($images, 200);
    // }




    /**
     * Upload image
     * 
     * @param Request $request
     * @param ImgTransformer $imgTransformer
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(
        Request $request,
        ImgTransformer $imgTransformer,
        $id
    ) {

        if ($request->has('upload_image')) {
        $imageName = Storage::putFile('public/images', $request->image);

        $image->images = $imageName;
        $image->save();
        }

        $image->fresh();

        return response()->json($imgTransformer->transform($image));
    }
}