<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    //
    public function index(){

        $contatos = [
            (object)["nome"=>"Maria", "telefone"=>"64517782"],
            (object)["nome"=>"Jose", "telefone"=>"44741259"],
        ];
        return view('contato.index', compact('contatos'));
    }
    
}
