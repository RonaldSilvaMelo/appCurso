<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Categoria;

class AulaController extends Controller
{
    public function mostrarFormAula(){
        return view('cad_aula');
    }

    public function index(){
        return view('index');
    }

    public function cadastroAula(Request $request){
        $registrosAula = $request->validate([
            'idcurso' => 'Integer|required',
            'tituloaula' => 'string|required',
            'urlaula' => 'string|required'
        ]);

        Categoria::create($registrosAula);

        return Redirect::route('index');
    }
}
