<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obra;
use App\User;

class IndexController extends Controller
{
    public function index(){
        $obras = Obra::all();

        foreach($obras as $obra){
            $autor = User::where('id', $obra->id_autor)->first();
            //dd($autor);
            $obra->autor = $autor;
        }
        //dd($obras);

        return view('index', compact('obras'));
    }
}
