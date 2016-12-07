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
        //return view('nota.create');
        $notas = \App\Nota::All();
        return view('nota.main')->with(['notas'=> $notas ]);

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->Foto->move('Img', $request->idUsuario.$request->Foto->getClientOriginalName());

        $request->Foto = 'Img/'.$request->idUsuario.$request->Foto->getClientOriginalName();
        
        \App\Nota::create([

            'photo' => $request->Foto,
            'description' => $request->Descripcion,
            'idCategorias' => $request->idCategoria,
            'idUser' => $request->idUsuario,
            ]);
    }

    public function show($id)
    {
        $notas = \App\Nota::find($id);
        $comentarios = \App\Comment::where('idNota', $id)->get();

        return view('nota.ver')->with(['edit' => true, 'notas' => $notas, 'comentarios' => $comentarios ]);
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

    public function search(Request $request)
    {
        $notas = \App\Nota::where('description', 'LIKE', '%'.$request->searchinfo.'%')->get();

        $usuario = \App\User::where('name', 'LIKE', '%'.$request->searchinfo.'%')->get();

        //return response()->json($usuario);

        return view('nota.find')->with(['notas' => $notas, 'usuario' => $usuario]);
    }
}
