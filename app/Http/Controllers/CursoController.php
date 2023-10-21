<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function mostrarFormCurso(){
        return view('cad_curso');
    }

    public function index(){
        return view('index');
    }

    public function cadastroCurso(Request $request){
        
        $registrosCurso = $request->validate([
            'nomecurso' => 'string|required',
            'cargahoraria' => 'string|required',
            'idcategoria' => 'Integer|required',
            'valor' => 'decimal:5|required'
        ]);

        Curso::create($registrosCurso);

        return Redirect::route('index');
    }
}
