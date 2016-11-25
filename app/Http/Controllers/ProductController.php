<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('product.main')->with(['productos'=> $producto ]);
        //return $producto;
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

        $productos = \App\Product::find($id);
        //return $productos;
        //$productos1 = response()->json($productos);
        //$productos1 = $productos->name;
        //return $productos->photo1;

        $comentarios1 = \App\Comment::where('idProduct', $id)->get();

        //return $usu->name;

        //$comentarios1 = DB::query('select * from comments where idProduct= ?', [ 1 => $id]);
        
        //$comentarios1 = response()->json($comentarios1);

        //return $comentarios1;

        return view('product.ver')->with([ 'edit' => true ,'productos1' => $productos, 'comentarios' => $comentarios1 ]);
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
