<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function store(Request $request)
    {

        $this->validate($request , [
            'Comentario'          =>'required',
                   
            ],[
            'Comentario.required' => 'El campo Comentario esta vacio',
            
            ]);

        \App\Comment::create([

            'comment'=> $request->Comentario,
            'idUser' => $request->idUsuario,
            'idNota' => $request->idNotas

            ]);
        
        return redirect()->action('NotaController@show', [$request->idNota]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
