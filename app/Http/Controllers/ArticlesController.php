<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;//debemos llamar a los modelos que vamos a utilizar
use App\Tag; //debemos llamar a los modelos que vamos a utilizar
use App\Article; //se debe agregar la clase article
use App\Image; //se debe agregar la clase images
use Laracasts\Flash\Flash;
use App\Http\Requests\ArticleRequest;


class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.articles.index');
    }
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->lists('name', 'id') ; //aqui guardamos los objetos que necesitaremos en este caso la lista de la categoria, ordenada por nombre
        $tags = Tag::orderBy('name', 'ASC')->lists('name', 'id');// igual que en el anterior pasamos todos los tags al modelo articles
       // dd($categories);
    return view('admin.articles.create')
    ->with('categories', $categories)->with('tags', $tags);//retorno vista correspondiente y recibo los datos de las categorias y los tags    
    }

    public function store(ArticleRequest $request)
    {

        //dd($request->tags); //prueba imprimiendo la lista de tags


        //manipulacion de imagenes
        
        if ($request->file('image')) //agregamos aqui una validacíon
        {
        $file = $request->file('image'); //recibe la imagen en la variable $file
        $name = 'blogdefran_' . time() . '.' . $file->getClientOriginalExtension(); //asignamos nombre, agregamos el time() para que de un numero unico (tiempo)-> ya que cada segundo cambia
        $path = public_path() .'/images/articles/';//public_path es la direccion, se la asignamos a la variable $path, y si queremos en una carpeta diferente, terminamos de agregar el directorio (hay que crear carpetas)
        $file->move($path, $name);//aqui tomamos la imagen que esta ya en la variable $file y la guardamos en el direcctorio creado y asignado a la variable $path, con el nombre ya creado y unico. (primer parametro es la direccion(path) y segundo parametro es el nombre que se le dara)
        }
        //dd($file);
        $article = new Article($request->all());
        $article->user_id = \Auth::user()->id;
        //dd(\Auth::user()->id); //probando que esta mandando el id del usuario autenticado o logueado
        //dd(\Auth::user()); //probando que esta mandando los datos del usuario autenticado o logueado
        $article->save();

        $article->tags()->sync($request->tags);// este codigo hara que se llenen los datos en la tabla tag (tabla pivote)

        $image = new Image();
        $image->name = $name;
        $image->article()->associate($article);//aqui estamos llamando al metodo que esta en el modelo image llamado article, y le aplicamos la funcion llamada associate... que lo que hace es tomar lo que lo asocia (en este caso el article_id)
        $image->save();

        Flash::success("Se ha registrado el articulo de manera exitosa!")->important();
return redirect()->route('admin.articles.index'); 
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
