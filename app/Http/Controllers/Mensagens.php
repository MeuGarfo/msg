<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Mensagens extends Controller
{
    function create(){
        $data=[
            'title'=>'Mensagens'
        ];
        $messages = DB::table('mensagens')->orderBy('id','DESC')->get();
        $data=[
            'title'=>'Mensagens',
            'mensagens'=>$messages
        ];
        return view('mensagem.create',$data);
    }
    function store(Request $request){
        $data = $request->validate([
            'mensagem' => 'required|min:1|max:144'
        ]);
        DB::table('mensagens')->insert($data);
        return redirect('/');
    }
}
