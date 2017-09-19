<?php

namespace App\Http\Controllers\Admin;

use App\Evento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Lugar;
use App\Categoria;


class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['eventos'] = Evento::all();
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
      $data['categorias'] = Categoria::where('parent', 'eventos')->get();
      return view('admin.eventos.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //
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
