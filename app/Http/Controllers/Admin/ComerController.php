<?php

namespace App\Http\Controllers\Admin;

use App\Comer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $data['gastronomia'] = Comer::all();
      $data['gastronomia'] = 'Comer::all()';
      return view('admin/gastronomia/show', $data);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
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
