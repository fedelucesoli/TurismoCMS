<?php

namespace App\Http\Controllers\Admin;

use App\Comer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GeneaLabs\Phpgmaps\Facades\PhpgmapsFacade as Gmaps;
use Illuminate\Support\Facades\Auth;



class ComerController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
    public function index()
    {
      $data['comer'] = Comer::all();
      return view('admin.gastronomia.index', $data);
    }

    public function create()
    {
        $data['local'] = new Comer;
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
      $item->horarios = $request->horarios;

      $item->activo = 0;
      $item->id_usuario = $request->user()->id;
      $item->save();

      if ($item->save()) {
        $request->session()->flash('status', 'Task was successful!');
      }else{
        $request->session()->flash('status', 'Task was successful!');
      }
        return redirect()->route('admin.comer.index');

    }


    public function show(Comer $comer){
      
      $data['item'] = Comer::find($comer)->first();

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
      return view('admin.gastronomia.show', $data);
    }


    public function edit(Comer $comer)
    {
        //
    }


    public function update(Request $request, Comer $comer)
    {
        $item = Comer::find($comer)->first();
        $rules = array(
          'nombre'            => 'required|max:140',
          'direccion'         => 'required',
          'localidad'         => 'required',
          'categoria'         => 'required',
        );
        $validator = $this->validate($request, $rules);


        $item->nombre = $request->nombre;
        $item->direccion = $request->direccion;
        $item->localidad = $request->localidad;
        $item->telefono = $request->telefono;
        $item->web = $request->web;
        $item->email = $request->email;
        $item->lng = $request->lng;
        $item->lat = $request->lat;
        $item->categoria = $request->categoria;
        $item->horarios = $request->horarios;
        // TODO activar o no

        $item->activo = 0;
        $item->id_usuario = $request->user()->id;
        $item->save();

        if ($item->save()) {
          $request->session()->flash('status', 'Editado!');
        }else{
          $request->session()->flash('status', 'Task was successful!');
        }
          return redirect()->route('admin.comer.show', $item->id);
    }


    public function destroy(Comer $comer)
    {
        //
    }
}
