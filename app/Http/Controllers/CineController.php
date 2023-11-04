<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CineController extends Controller
{
    public function index()  {
        return view('index');
    }
    public function nuestroscines()
    {
        $cines = DB::select('CALL sp_getCines');
        return view('cines', ['cines' => $cines]);
    }
    public function cine($id) {
        $cine = DB::select('CALL sp_getCine(?)', [$id]);   
        $tarifas = DB::select('CALL sp_getCineTarifas(?)', [$id]);
        $peliculas = DB::select('CALL sp_getCinePeliculas(?)', [$id]);
        return view('cine', [
            'cine' => $cine[0], 
            'tarifas' => $tarifas,
            'peliculas' => $peliculas,
        ]);
    }
}