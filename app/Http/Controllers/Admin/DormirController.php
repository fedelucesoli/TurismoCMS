<?php

namespace App\Http\Controllers\Admin;

use App\Dormir;
use App\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GeneaLabs\Phpgmaps\Facades\PhpgmapsFacade as Gmaps;
use Illuminate\Support\Facades\Auth;
use App\Logic\MapasRepository;


class DormirController extends Controller
{
    public function __construct(MapasRepository $MapaRepository){
      $this->middleware('auth');
      $this->mapa = $MapaRepository;
    }

    public function index()
    {
      $data['alojamientos'] = Dormir::all();
      $data['categorias'] = Categoria::where('parent', 'alojamiento')->get();
      return view('admin.alojamiento.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $data['item'] = new Dormir;
      $data['map'] = $this->mapa->addMarkerMap();

      return view('admin.alojamiento.form', $data);
    }

    public function store(Request $request)
    {
      $rules = array(
        'nombre'            => 'required|max:140',
        'direccion'         => 'required',
        'localidad'         => 'required',
        'categoria'         => 'required',
      );
      $validator = $this->validate($request, $rules);

      $item = new Dormir;
      $item->nombre = $request->nombre;
      $item->categoria = $request->categoria;

      $item->direccion = $request->direccion;
      $item->localidad = $request->localidad;

      $item->telefono = $request->telefono;
      $item->web = $request->web;
      $item->email = $request->email;

      $item->lng = $request->lng;
      $item->lat = $request->lat;

      // $item->estrellas = $request->estrellas;

      $item->activo = 0;
      $item->id_usuario = $request->user()->id;
      $item->save();

      if ($item->save()) {
        $request->session()->flash('status', 'Guardado');
      }else{
        $request->session()->flash('status', 'No se pudo guardar');
      }
        return redirect()->route('admin.dormir.index');
    }

    public function show(Dormir $dormir)
    {
      $data['item'] = $dormir;
      if(is_null($data['item'])){
        $request->session()->flash('status', ':( No se encuentra ese registro!');

        return redirect()->route('admin.comer.index');
      }
      $data['map'] = $this->mapa->showMarkerMap($data['item']);

      return view('admin.alojamiento.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dormir  $dormir
     * @return \Illuminate\Http\Response
     */
    public function edit(Dormir $dormir)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dormir  $dormir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dormir $dormir)
    {
      $item = $dormir;

      $rules = array(
        'nombre'            => 'required|max:140',
        'direccion'         => 'required',
        'localidad'         => 'required',
        'categoria'         => 'required',
      );
      $validator = $this->validate($request, $rules);

      $item->nombre = $request->nombre;
      $item->categoria = $request->categoria;

      $item->direccion = $request->direccion;
      $item->localidad = $request->localidad;

      $item->telefono = $request->telefono;
      $item->web = $request->web;
      $item->email = $request->email;

      $item->lng = $request->lng;
      $item->lat = $request->lat;

      // $item->estrellas = $request->estrellas;
      // TODO activar o no
      $item->activo = 0;
      $item->id_usuario = $request->user()->id;
      $item->save();

      if ($item->save()) {
        $request->session()->flash('status', 'Guardado');
      }else{
        $request->session()->flash('status', 'No se pudo editar');
      }
        return redirect()->route('admin.dormir.index');
    }

    public function estado(Request $request, Dormir $dormir)
        {
          $item = $dormir;
          if ($item) {
            if ($item->activo) {
              $estado = 0;
            }else{
              $estado = 1;
            }
            $item->activo = $estado;
            $item->save();
          }
          $data['estado'] = $estado;
          return json_encode($data);
        }

    public function destroy(Dormir $dormir)
    {
        //
    }
}
