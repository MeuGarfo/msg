<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mensagens extends Controller
{
    function create(){
        $data=[
            'title'=>'Mensagens'
        ];
        return view('mensagem.create',$data);
    }
    function store(Request $request){
        $validatedData = $request->validate([
            'mensagem' => 'required|min:1|max:144'
        ]);
    }
}
