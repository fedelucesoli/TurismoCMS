<?php

namespace App\Http\Controllers\Admin;

use App\Comer;
use App\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GeneaLabs\Phpgmaps\Facades\PhpgmapsFacade as Gmaps;
use Illuminate\Support\Facades\Auth;
use App\Logic\MapasRepository;



class ComerController extends Controller
{
  public function __construct(MapasRepository $MapaRepository){
    $this->middleware('auth');
    $this->mapa = $MapaRepository;
  }
    public function index()
    {
      $data['comer'] = Comer::all();
      $data['categorias'] = Categoria::where('parent', 'gastronomia')->get();
      return view('admin.gastronomia.index', $data);
    }

    public function create()
    {
        $data['local'] = new Comer;
        $data['map'] = $this->mapa->addMarkerMap();
        $data['categorias'] = Categoria::where('parent', 'gastronomia')->get();
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
      // TODO slug
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

      $data['item'] = $comer;

      if(is_null($data['item'])){
        $request->session()->flash('status', ':( No se encuentra ese registro!');
        return redirect()->route('admin.comer.index');
      }
      $data['map'] = $this->mapa->showMarkerMap($data['item']);
      return view('admin.gastronomia.show', $data);
    }


    public function edit(Comer $comer)
    {
        //
    }


    public function update(Request $request, Comer $comer)
    {
        $item = $comer;
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

    public function estado(Request $request, Comer $comer)
        {
          $item = $comer;
          if ($item) {
            if ($item->activo) {
              $estado = 0;
            }else{
              $estado = 1;
            }
            $item->activo = $estado;
            $item->save();
          }
          $data['estado'] = 'No paso el primer if';
          return json_encode($data);
        }

    public function destroy(Comer $comer)
    {
        $item = Comer::find($comer->id);
        $item->delete();

    }
}
