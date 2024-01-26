<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastrarUsuarioModel; /* Importando a classe que está sendo utilizada */

class cadastrarUsuario extends Controller
{
    public function index()
    {
        $dados = cadastrarUsuarioModel::all(); 


        return view('paginas.cadastrar')->With('dados', $dados);

    }//Fim do Método Index

    public function store(Request $request)
    {
        $nomeUsuario     = $request->input('nome'); //Coletando dados do formulário
        $telefoneUsuario = $request->input('telefone');

        $model = new cadastrarUsuarioModel();
        $model -> nome       = $nomeUsuario;
        $model -> telefone   = $telefoneUsuario;
        $model -> save(); //Armazenar os dados no BD

        return redirect('/cadastrar');
        
    }//Fim do Método store
}//Fim da Classe
