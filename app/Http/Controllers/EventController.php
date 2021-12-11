<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        
            $nome = "Marlon";
        
            $arr = [1, 2, 3, 4, 5];
        
            return view('welcome',
                ['nome' => $nome,
                'idade' => 24,
                'profissao' => 'programador',
                'arr' => $arr
            ]);
       
    }
    public function create(){
        
            
        
        return view('events.create');
       
    }
}
