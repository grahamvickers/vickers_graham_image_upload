<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use App\Transformers\ImgTransformer;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @param ImgTransformer $imgTransformer
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // ImgTransformer $imgTransformer
    public function index()
    {   
        // $upload = $imgTransformer-> transform(upload()); 

        // , compact('upload')
        return view('home');
    }
}
