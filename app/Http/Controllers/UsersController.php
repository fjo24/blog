<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
Use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest; //lo agregamos para poder usarlo
//use App\Http\Requests\UserEditRequest; 

class UsersController extends Controller
{

    public function index(Request $request)
    {
      $users= User::search($request)->orderBy('id', 'ASC')->paginate(8);
      return view('admin.users.index')->with('users', $users);
    }

    public function create()
    {
        return view('admin.users.create');
            }


    public function store(UserRequest $request) //cambiamos el request por el UserRequest
    {
           // dd($request->all());
            $user = new User($request->all());
            $user->password = bcrypt($request->password);

          // dd($user);
          $user->save();   
    Flash::success("Se ha registrado el usuario ".$user->name." de manera exitosa!")->important();
return redirect()->route('admin.users.index'); 

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //dd($id);
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();

        flash('El usuario '. $user->name. ' ha sido editado con exito!!', 'success')->important();
        return redirect()->route('admin.users.index');
    }


    public function destroy($id)
    {
    $user = User::find($id);
    $user -> delete();

    flash('El usuario '. $user->name. ' ha sido borrado de manera exitosa!','danger')->important();
    return redirect()->route('admin.users.index');

    }

}