<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){

        $nome= "Matheus";
        $idade=29;
    
        $arr= [1,2,3,4,5];
        $nomes=["Matheus","Ally","Zoey","Melissa"];
    
        return view('welcome',
        ['nome' => $nome,
         'idade'=> $idade,
         'arr'=> $arr,
        'nomes'=> $nomes ]);
    }
    public function create(){
        return view('events.create');
    }
}
