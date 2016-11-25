<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('product.create');
        $producto = \App\Product::All();
        //return $producto;
        return view('product.main')->with(['productos'=> $producto ]);
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        $request->Foto1->move('Img', $request->Nombre.$request->Foto1->getClientOriginalName());

        $request->Foto1 = 'Img/'.$request->Nombre.$request->Foto1->getClientOriginalName();
        
        \App\Product::create([

            'name' => $request->Nombre,
            'description' => $request->Descripcion,
            'price' => $request->Precio,
            'photo1' => $request->Foto1,
            'idUser' => $request->idUsuario,
            ]);
    }

    public function show($id)
    {
        //$productos = DB::query('select * from products where id= ?', [ 1 => $id]);

        $productos1 = \App\Product::find($id)->first();
        //return $productos;
        //return response()->json($productos);
        return view('product.ver')->with([ 'edit' => true ,'productos1' => $productos1 ]);
    }


    public function edit($id)
    {
       
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
