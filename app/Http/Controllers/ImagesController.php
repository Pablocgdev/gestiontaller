<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Image;

class ImagesController extends Controller
{
    
    public function index()
    {
    	$images = Image::all();
    	return view('admin.images.index')
    	->with('images', $images);
    }
}
