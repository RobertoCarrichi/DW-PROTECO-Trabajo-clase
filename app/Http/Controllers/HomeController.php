<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarea;
// use App\Entrega;
// use App\User;
// use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = auth()->user()->id;
        $tareas = Tarea::all();
        // $entregas = Entrega::where('user_id', $id)->get();
        return view('home',['tareas'=>$tareas]);
        // return view('home',['tareas'=>$tareas,'entregas'=>$entregas]);
    }

    // public function cal(){
    //     $id = auth()->user()->id;
    //     $entregas = Entrega::where('user_id', $id)->get();
    //     return view('cal',['entregas'=>$entregas]);
    // }
}
