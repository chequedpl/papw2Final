<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.login');
    }


    public function store(Request $request)
    {
        $request->Avatar->move('Blob', $request->Nombre.$request->Avatar->getClientOriginalName());
        $request->PathAvatar = 'Blob/'.$request->Nombre.$request->Avatar->getClientOriginalName();
        $request->Avatar =  file_get_contents('Blob/'.$request->Nombre.$request->Avatar->getClientOriginalName());

        $request->Cover->move('Cover', $request->Nombre.$request->Cover->getClientOriginalName());
        $request->PathCover = 'Cover/'.$request->Nombre.$request->Cover->getClientOriginalName();
        $request->Cover =  file_get_contents('Cover/'.$request->Nombre.$request->Cover->getClientOriginalName());        

        \App\User::create([ 
        'name' => $request->Nombre,
        'email' => $request->Correo,
        'password' => $request->Contrasenia,
        'date' => $request->Calendario,
        'gender' => $request->Genero,
        'avatar' => $request->Avatar,
        'pathavatar' => $request->PathAvatar,
        'cover' => $request->Cover,
        'pathcover' => $request->PathCover,
        ]);

        return redirect()->action('NotaController@index');
    }


    public function show($id)
    {
        $usuario = \App\User::find($id);
        
        $nota = \App\Nota::where('idUser', $id)->get();

        return view('user.profile')->with(['user'=> $usuario, 'notas' => $nota ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function check(Request $userdata){

        $usuario = \App\User::where('email', $userdata->Correo)->where('password', $userdata->Contrasenia)->get()->first();

        $nota = \App\Nota::where('idUser', $usuario->id)->get();
        
        if(count($usuario) > 0)
        {
        

        return view('user.profile')->with(['user' => $usuario, 'notas' => $nota ]);

        }else
        {

            return 'mal';
        }
        
        
    }

    public function logout(){

    }

    public function registro(){

        return view('user.create');

    }

}
