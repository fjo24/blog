<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Image; //se debe agregar la clase images

class ImagesController extends Controller
{
    
    public function index()
    {

        $images = Image::all();
        $images->each(function($images){
        	$images->article;	
        });
		return view('admin.images.index')
		->with('images', $images);
	}
}