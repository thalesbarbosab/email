<?php

namespace App\Http\Controllers;

use App\Events\Illuminate\Auth\Events\MeuEvento;
use Illuminate\Http\Request;

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
        event(new MeuEvento('Ola Mundo'));
        
        return view('home');
    }
}
