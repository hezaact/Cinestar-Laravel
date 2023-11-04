<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Peliculacontroller extends Controller
{
        public function peliculas($id)
    {
        $peliculas = DB::select('CALL sp_getPeliculas(?)', [$id]);
    
        return view('peliculas', ['peliculas' => $peliculas]);
    }
    public function pelicula($id)
    {
        $pelicula = DB::select('CALL sp_getPelicula(?)', [$id]);
        return view('pelicula', ['pelicula' => $pelicula[0]]);
    }
}
