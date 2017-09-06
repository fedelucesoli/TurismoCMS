<?php

namespace App\Http\Controllers\Admin;

use App\Comer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

class ComerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['comer'] = Comer::all();
      return view('admin.gastronomia.show', $data);
    }

    public function create()
    {
        $data['local'] = new Comer;
        return view('admin.gastronomia.form', $data);
    }


    public function store(Request $request){
      $rules = array(
        'nombre'            => 'required|max:140',
        'direccion'         => 'required',
        'localidad'         => 'required',
        'categoria'         => 'required',
      );
      $validator = $this->validate($request, $rules);

      $item = new Comer;
      $item->nombre = $request->nombre;
      $item->direccion = $request->direccion;
      $item->localidad = $request->localidad;
      $item->telefono = $request->telefono;
      $item->web = $request->web;
      $item->email = $request->email;
      $item->lng = $request->lng;
      $item->lat = $request->lat;
      $item->categoria = $request->categoria;
      $item->estrellas = $request->estrellas;
      $item->activo = 0;
      $item->id_usuario = Auth::user()->id;
      $item->save();

      if ($item->save()) {
        $request->session()->flash('status', 'Task was successful!');
      }else{
        $request->session()->flash('status', 'Task was successful!');
      }
        return redirect()->route('admin.comer.index');

    }


    public function show(Comer $comer)
    {
        //
    }


    public function edit(Comer $comer)
    {
        //
    }


    public function update(Request $request, Comer $comer)
    {
        //
    }


    public function destroy(Comer $comer)
    {
        //
    }
}
