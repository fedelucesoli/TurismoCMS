<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }
<<<<<<< HEAD
=======
    public function Eventos()
    {
        return view('admin.eventos');
    }

>>>>>>> bc77b8d3b2845adca201d0b05c1b616051f2d03e
}
