<?php

namespace App\Http\Controllers\Admin;

use App\Evento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Lugar;
use App\Categoria;


class EventoController extends Controller
{

    public function index()
    {
      $data['eventos'] = Evento::all();
      $data['categorias'] = Categoria::where('parent', 'evento')->get();

      return view('admin.eventos.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $data['lugares'] = Lugar::all();
      $data['evento'] = new Evento;
      $data['categorias'] = Categoria::where('parent', 'evento')->get();
      return view('admin.eventos.form', $data);
    }


    public function store(Request $request)
    {
      $input = $request->all();
      $evento = new Evento;
      $evento->titulo = $request->titulo;
      $evento->descripcion = $request->descripcion;
      $evento->fecha = $request->fecha;
      $evento->hora = $request->hora;
      $evento->lugar = $request->lugar;
      $evento->categoria = $request->categoria;
      $evento->activo = $request->activo;
      try {
        $evento->save();
        return view('admin.eventos.show')->with($evento->id);

      } catch (Exception $e) {
        return view('admin.eventos.index')->with('error', $e);

      }





    }

    public function show(Evento $evento)
    {
      $data['item'] = $evento;
      if(is_null($data['item'])){
        $request->session()->flash('status', ':( No se encuentra ese registro!');

        return redirect()->route('admin.eventos.index');
      }

      return view('admin.eventos.show', $data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        //
    }

    public function estado(Request $request, Evento $evento)
        {
          $item = Evento::find($request->input('id'));
          if ($item) {
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
      }

    public function destroy(Evento $evento)
    {
        //
    }
}
