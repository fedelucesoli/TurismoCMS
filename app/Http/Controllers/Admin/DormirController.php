<?php

namespace App\Http\Controllers\Admin;

use App\Dormir;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GeneaLabs\Phpgmaps\Facades\PhpgmapsFacade as Gmaps;
use Illuminate\Support\Facades\Auth;

class DormirController extends Controller
{
      public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      $data['alojamientos'] = Dormir::all();
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
      $config = array();
      $config['center'] = '-35.1870349, -59.0949762';
      $config['map_width'] = '100%';
      $config['map_height'] = 500;
      $config['zoom'] = 15;
      $config['onclick'] = '
      createMarker_map({ map: map, position:event.latLng });
      document.getElementById("lat").value = event.latLng.lat();
      document.getElementById("lng").value = event.latLng.lng();
      ';

      Gmaps::initialize($config);
      $data['map'] = Gmaps::create_map();
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
      $data['item'] = Dormir::find($dormir->id)->usuario();
      if(is_null($data['item'])){
        $request->session()->flash('status', ':( No se encuentra ese registro!');

        return redirect()->route('admin.comer.index');
      }
      $latlng= $data['item']->lat . ', '. $data['item']->lng;
      $config = array();
      $config['center'] = $latlng;
      $config['map_width'] = '100%';
      $config['map_height'] = 400;
      $config['zoom'] = 18;
      $config['disableMapTypeControl'] = true;
      $config['disableDefaultUI'] = true;
      $marker = array();
      $marker['position'] = $latlng;
      $marker['icon'] = '/img/marker.png';
      $marker['draggable'] = true;
        $marker['ondragend'] = '
        document.getElementById("lat").value = event.latLng.lat();
        document.getElementById("lng").value = event.latLng.lng();
        ';
      Gmaps::add_marker($marker);
      Gmaps::initialize($config);

      $data['map'] = Gmaps::create_map();
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
      $item = Dormir::find($dormir->id);

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
          $item = Dormir::find($request->input('id'));
          if ($item) {
            if ($item->activo) {
              $estado = 0;
            }else{
              $estado = 1;
            }
            $item->activo = $estado;
            $item->save();
            $data['status'] = "mal";
            $data['estado'] = $estado;

          }
          $data['status'] = "bien";
          return json_encode($data);
          // return redirect('dashboard')->with('mensaje', 'Obra publicada!');
        }

    public function destroy(Dormir $dormir)
    {
        //
    }
}
