<?php

namespace App\Http\Controllers;

use App\Models\categorias;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;


class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['categorias']=categorias::paginate(9);
        return view('categorias.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //          
        return view('categorias.create');
    }

    
    public function store(Request $request)
    {

        $datoscategorias=request()->except('_token');
        if($request->hasfile('foto')){
            $datoscategorias['foto']=$request->file('foto')->store('uploads','public');
        }


        categorias::insert($datoscategorias);

       //return response()->json($datoscategorias);
         return redirect ('categorias')->with('mensaje','categoria agregado con exito');

    }

    
    public function show(categorias $categorias)
    {
        ///**
   
    }

    
    public function edit($id)
    {
        //
        $categorias=categorias::findOrFail($id);

        return view('categorias.edit',compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datoscategorias=request()->except(['_token','_method']);

        if($request->hasfile('foto')){
            $categorias=categorias::findOrFail($id);
            Storage::delete('public/'.$categorias->foto);
            $datoscategorias['foto']=$request->file('foto')->store('uploads','public');
        }

        categorias::where('id','=',$id)->update($datoscategorias);

        $categorias=categorias::findOrFail($id);
        //return view('categorias.edit',compact('categorias'));

        return redirect('categorias')->with('mensaje','categoria editado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorias=categorias::findOrFail($id);

        if(Storage::delete('public/'.$categorias->foto)){
            
            
                    categorias::destroy($id);
        }

        return redirect('categorias')->with('mensaje','categoria borrado');
    }
}
