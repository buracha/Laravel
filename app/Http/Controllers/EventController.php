<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome= "Matheus";
        $idade= 29;
    
        $arr = [1,2,3,4,5];
        $nomes = ["maria", "João", "Matheus", "Saulo"];
    
        return view('welcome', [
            'nome' => $nome, 
            'idade' => $idade,
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create(){
        return view('events.create');
    }

    public function contact(){
        $busca = request('search');

        return view('contact', ['busca' => $busca]);
    }

    public function produtos(){
        $busca = request('search');

        return view('products', ['busca' => $busca]);
    }

    public function produtosTeste($id = null){
        return view('product', ['id' => $id]);
    }
}
