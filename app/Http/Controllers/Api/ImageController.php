<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Transformers\ImgTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Image;


class ImageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @param  ImageRepository  $image
     * @return void
     */
    public function __construct(ImageRepository $image)
    {
        $this->image = $image;
    }

    /**
     * Store a new image from the upload form
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'img' => 'required|image|max:50000000'
        ]);

        $image = Storage::putFile('public', $request->img);

        Upload::create([
            'name' => $request->name,
            'img' => $imgName
        ]);

        return view('/images)
    }
}
