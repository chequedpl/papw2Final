<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        $this->validate($request , [
            'Nombre'        =>'required',
            'Correo'        =>'required',
            'Contrasenia'   =>'required',
            'Calendario'    =>'required',
            'Genero'        =>'required',
            'Avatar'        =>'required',
            'Cover'         =>'required'
            ],[
            'Nombre.required' => 'El campo Nombre esta vacio',
            'Correo.required' =>  'El campo Correo esta vacio',
            'Contrasenia.required'=> 'El campo Contraseña esta vacio',           
            'Calendario.required' =>'El campo Calendario esta vacio',
            'Genero.required' =>   'El campo Genero esta vacio',
            'Avatar.required' =>   'El campo Avatar esta vacio',
            'Cover.required' =>    'El campo Cover esta vacio'
            ]);


        $request->Avatar->move('Blob', $request->Nombre.$request->Avatar->getClientOriginalName());
        $request->PathAvatar = 'Blob/'.$request->Nombre.$request->Avatar->getClientOriginalName();
        $request->Avatar =  file_get_contents('Blob/'.$request->Nombre.$request->Avatar->getClientOriginalName());

        $request->Cover->move('Cover', $request->Nombre.$request->Cover->getClientOriginalName());
        $request->PathCover = 'Cover/'.$request->Nombre.$request->Cover->getClientOriginalName();
        $request->Cover =  file_get_contents('Cover/'.$request->Nombre.$request->Cover->getClientOriginalName());        

        \App\User::create([ 
        'name' => $request->Nombre,
        'email' => $request->Correo,
        'password' => Hash::make($request->Contrasenia),
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
        
        $nota = DB::select('select * from notas as n, users as u where n.idUser = u.id and n.idUser ='. $id);

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

         $this->validate($userdata , [
            'Correo'        =>'required',
            'Contrasenia'   =>'required'
            ],[
            'Correo.required' =>  'El campo Correo esta vacio',
            'Contrasenia.required'=> 'El campo Contraseña esta vacio'
            ]);

        
        $usuario = \App\User::where('email', $userdata->Correo)->/*where('password', $userdata->Contrasenia)->*/get()->first();
        $bCorrectPass = Hash::check($userdata->Contrasenia, $usuario->password);
        $converted_res = ($bCorrectPass) ? 'true' : 'false';

        if ($bCorrectPass) {
            $nota = DB::select('select * from notas as n, users as u where n.idUser = u.id and n.idUser ='. $usuario->id);
            return view('user.profile')->with(['user' => $usuario, 'notas' => $nota]);
        } else {
            return 'INCORRECTO';
        }

       // $nota = DB::select('select * from notas as n, users as u where n.idUser = u.id and n.idUser ='. $usuario->id);        
    }

    public function getSession(Request $userdata){
        if($request->session()->has('session_name()')){

        } else {

        }
    }

    public function logout(){

    }

    public function registro(){

        return view('user.create');

    }

}
