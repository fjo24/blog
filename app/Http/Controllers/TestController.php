<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;



class TestController extends Controller
{
// pruebas de controlador con ruta

        public function view1($id)
    {
    	dd($id);
    }
    public function view($id)
    {
    	$article = Article::find($id);
    	dd($article);
    }
    public function view2($id){
    	$art = Article::find($id);
    	$art->user;
    	$art->category;
    	$art->tags;
    	
    	dd($art);
    }

//vista con controlador
    public function ver($id){

    	$articulo = Article::find($id);
    /*	$articulo->user;
    	$articulo->category;
    	$articulo->tags;
    */	
    	return view ('test.index', ['prueba' => $articulo]);
    }
}