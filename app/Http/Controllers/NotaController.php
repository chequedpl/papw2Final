<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $notas = DB::select('select n.id, n.photo, n.description, u.name from notas as n, users as u where n.idUser = u.id and u.activo = 1');
        //$nota = response()->json($nota);
        //$notas = $nota->paginate(3);
        return view('nota.main')->with(['notas'=> $notas ]);

    }

    public function store(Request $request)
    {
        $this->validate($request , [
            'Foto'          =>'required',
            'Descripcion'   =>'required',
            'idCategoria'   =>'required'
            
            ],[
            'Foto.required' => 'El campo Foto esta vacio',
            'Descripcion.required' =>  'El campo Descripción esta vacio',
            'idCategoria.required'=> 'El campo Categoría esta vacio'
            ]);

        $request->Foto->move('Img', $request->idUsuario.$request->Foto->getClientOriginalName());

        $request->Foto = 'Img/'.$request->idUsuario.$request->Foto->getClientOriginalName();
        
        \App\Nota::create([

            'photo' => $request->Foto,
            'description' => $request->Descripcion,
            'idCategorias' => 1,
            'idUser' => $request->idUsuario,
            ]);
    }

    public function show($id)
    {
        $notas = \App\Nota::find($id);
       

        $usuario = DB::select('select * from users as u, comments as c where u.id = c.idUser and c.idNota = :id', 
            ['id' => $id ]);

        return view('nota.ver')->with(['edit' => true, 'notas' => $notas, 'usuario' => $usuario ]);
    }

    public function search(Request $request)
    {
        $notas =  DB::select("select * from notas as n, users as u where n.idUser = u.id and n.description LIKE '%".$request->searchinfo."%' ");

        $usuario = \App\User::where('name', 'LIKE', '%'.$request->searchinfo.'%')->get();

        return view('nota.find')->with(['notas' => $notas, 'usuario' => $usuario]);
    }

    public function nuevo()
    {
        return view('nota.create');
    }
}
