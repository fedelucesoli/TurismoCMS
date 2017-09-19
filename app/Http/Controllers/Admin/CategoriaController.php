<?php

namespace App\Http\Controllers\Admin;

use App\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\Auth;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index($parent){
       
       $data['categorias'] = Categoria::where('parent', $parent);

       return view('admin.partials.categorias', $data);
     }

    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
      $item = new Categoria;
      $item->nombre = $request->nombre;
      $item->parent = $request->parent;
      $item->slug = Str::slug($request->nombre);
      $item->id_usuario = $request->user()->id;
      if ($item->save()) {
        return response()->json([
          'nombre' => $item->nombre,
          'slug' => Str::slug($item->nombre),
          'parent' => $item->parent,
          'id' => $item->id,
        ], 200);
      }else{
        return response()->json([
          'nombre' => $request->nombre,
          'parent' => $request->parent,
        ], 500);
      }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
    }

    public function destroy(Categoria $categoria){

        $item = Categoria::find($categoria)->first();
        if($item->delete()){
          return response()->json([
            'mensaje' => 'Categoria Eliminada!',
            'id' => $categoria->id
          ], 200);
        }else {
          return response()->json([
            'mensaje' => 'No se pudo eliminar la Categoria :('
          ], 500);
        }
    }
}
