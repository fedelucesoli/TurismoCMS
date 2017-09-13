<?php

namespace App\Http\Controllers\Admin;

use App\Lugar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GeneaLabs\Phpgmaps\Facades\PhpgmapsFacade as Gmaps;


class LugarController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index()
    {
      $data['lugares'] = Lugar::all();
      return view('admin.lugar.index', $data);
    }

    public function create()
    {
      $data['lugar'] = new Lugar;
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
      return view('admin.lugar.form', $data);
    }

    public function store(Request $request)
    {
      $rules = array(
        'nombre'            => 'required|max:140',
        'direccion'         => 'required',
        'localidad'         => 'required',
      );
      $validator = $this->validate($request, $rules);

      $item = new Lugar;
      $item->fill($request->all());
      //
      // $item->nombre = $request->nombre;
      // $item->direccion = $request->direccion;
      // $item->localidad = $request->localidad;
      // $item->telefono = $request->telefono;
      // $item->web = $request->web;
      // $item->email = $request->email;
      // $item->lng = $request->lng;
      // $item->lat = $request->lat;

      $item->activo = 1;
      $item->id_usuario = $request->user()->id;
      $item->save();

      if ($item->save()) {
        $request->session()->flash('status', 'Guardado!');
      }else{
        $request->session()->flash('status', 'No se pudo guardar. :(');
      }
        return redirect()->route('admin.lugar.index');
    }

    public function show(Lugar $lugar)
    {
      $data['item'] = Lugar::find($lugar->id);

      if(is_null($data['item'])){
        $request->session()->flash('status', ':( No lo encuentre!');
        return redirect()->route('admin.lugar.index');
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
      return view('admin.lugar.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function edit(Lugar $lugar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lugar $lugar)
    {
      $item = Lugar::find($lugar->id);
      $rules = array(
        'nombre'            => 'required|max:140',
        'direccion'         => 'required',
        'localidad'         => 'required',
      );
      $validator = $this->validate($request, $rules);

      $item->update($request->all());

      $item->activo = 1;
      $item->id_usuario = $request->user()->id;

      if ($item->save()) {
        $request->session()->flash('status', 'Guardado!');
      }else{
        $request->session()->flash('status', 'No se pudo guardar. :(');
      }
        return redirect()->route('admin.lugar.index');
    }

    public function estado(Request $request, Lugar $lugar)
        {
          $item = Lugar::find($request->input('id'));
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

    public function destroy(Lugar $lugar)
    {
        //
    }
}
