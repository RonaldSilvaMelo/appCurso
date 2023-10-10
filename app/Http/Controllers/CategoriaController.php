<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //abre o formulario de cadastro da categoria
    public function mostrarFormCat(){
        return view('cad_categoria');
    }

    //abre a home
    public function index(){
        return view('index');
    }
}
