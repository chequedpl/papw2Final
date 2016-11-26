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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->Avatar->move('Blob', $request->Nombre.$request->Avatar->getClientOriginalName());
        $request->PathAvatar = 'Blob/'.$request->Nombre.$request->Avatar->getClientOriginalName();
        $request->Avatar =  file_get_contents('Blob/'.$request->Nombre.$request->Avatar->getClientOriginalName());

        

        \App\User::create([ 
        'name' => $request->Nombre,
        'email' => $request->Correo,
        'password' => $request->Contrasenia,
        'date' => $request->Calendario,
        'gender' => $request->Genero,
        'avatar' => $request->Avatar,
        'pathavatar' => $request->PathAvatar,
        ]);

        return redirect()->action('ProductController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = \App\User::find($id);
        
        $producto = \App\Product::where('idUser', $id)->get();

        return view('user.profile')->with(['user'=> $usuario, 'productos' => $producto ]);
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

    public function check(Request $userdata){

        $usuario = \App\User::where('email', $userdata->Correo)->where('password', $userdata->Contrasenia)->get()->first();
        
        if(count($usuario) > 0)
        {
         
        return view('user.profile')->with(['user' => $usuario]);

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
