<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
		$this->middleware('Pengguna');
      }

    public function index()
    {
        return view('/pengguna/index');
    }

  
}
