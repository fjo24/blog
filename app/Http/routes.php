<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('articles', function () {
    echo "esta es la pagina de articulos";
});


Route::get('articles/{nombre}', function ($nomb) { 
    echo "El nombre que has colocado es " . $nomb;
});

Route::get('info/{dato?}', function ($dato = "no coloco dato") { 
    echo "El dato que has colocado es " . $dato;
});
*/

/*Route::group(['prefix' => 'articles'], function(){

Route::get('view/{info?}', function ($inf = "no hay info"){

echo "LA INFORMACION ES ". $inf;

}); 	
} );*/
/*
// PROBANDO RUTA CON CONTROLADOR

// Prueba 1 con TestController (en esta funcion (view1) del TestController el parametro lo imprime tal cual)
Route::group(['prefix' => 'articles'], function(){
	Route::get('view1/{id}', [
			'uses' => 'TestController@view1',
			'as' => 'articlesView1'
		]);
});
// Prueba 2 con TestController (esta funcion (view) del TestController usa el parametro para asignarselo a el id del articulo que se quiere)

Route::group(['prefix' => 'articles'], function(){
	Route::get('view/{id}', [
			'uses' => 'TestController@view',
			'as' => 'articlesView'
		]);
});
// Prueba 3 con TestController (esta funcion (view2) del TestController usa el parametro para asignarselo a el id del articulo que se quiere, igual que el view, pero nos dara las relaciones)

Route::group(['prefix' => 'articles'], function(){
	Route::get('view2/{id}', [
			'uses' => 'TestController@view2',
			'as' => 'articlesView2'
		]);
});


// probando acceso a vistas a traves de las rutas

Route::get('/testview', function () {
    return view('test.index');
});

// una mas compreja usando el ejemplo de los controladores

	Route::get('ver/{id}', [
			'uses' => 'TestController@ver',
			'as' => 'verarticulos'
		]);*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){ //se agrego el middleware para que deba autenticarse para acceder a las rutas siguientes

	//ruta usuarios
	Route::resource('users','UsersController');// primer parametro nombre de la ruta y segundo el controlador que se usara
	Route::get('users/{id}/destroy', [
		'uses' => 'UsersController@destroy',
		'as'	=> 'admin.users.destroy'
		]);

	Route::resource('categories', 'CategoriesController');
	Route::get('categories/{id}/destroy', [
		'uses' => 'CategoriesController@destroy',
		'as'	=> 'admin.categories.destroy'
		]);
	Route::resource('tags', 'TagsController');
	Route::get('tags/{id}/destroy', [
		'uses' => 'TagsController@destroy',
		'as'	=> 'admin.tags.destroy'
		]);

		 Route::resource('articles', 'ArticlesController');//Este es el codigo para la ruta de los articulos
		 	Route::get('articles/{id}/destroy', [
		'uses' => 'ArticlesController@destroy',
		'as'	=> 'admin.articlesp.destroy'
		]);

});

	Route::get('images', [

		'uses' 	=> 	'ImagesController@index',
		'as'	=>	'admin.images.index'

		]);

// rutas para autenticación

Route::get('admin/auth/login', [
	'uses'  => 'Auth\AuthController@getLogin',
	'as'	=> 'admin.auth.login'
	]);
Route::post('admin/auth/login', [
	'uses'  => 'Auth\AuthController@postLogin',
	'as'	=> 'admin.auth.login'
	]);
Route::get('admin/auth/logout', [
	'uses'  => 'Auth\AuthController@getLogout',
	'as'	=> 'admin.auth.logout'
	]);