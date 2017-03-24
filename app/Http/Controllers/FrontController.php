<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function __construct()
    {
        Carbon::setlocale('es');
    }

    public function index(Request $request)
    {
        $articles = Article::orderBy('id', 'DESC')->
            paginate(4);
        $articles->each(function ($articles) {
            $articles->category;
            $articles->images;
        });

        return view('front.index')
            ->with('articles', $articles);
    }

    public function viewArticle($slug)
    {
        $article = Article::findBySlugOrFail($slug);
        $article->category;
        $article->user;
        $article->tags;
        $article->images;
       // dd($article);	
        return view('front.article')->with('article', $article);
    }

}
