<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vrsta;

class VrstaController extends Controller
{
    function listaVrsta(){

        return Vrsta::all();

    }

   
    function listaVrstaID(){
        return $id?Vrsta::find($id):Vrsta::all(); //id je opcioni
    }
}
