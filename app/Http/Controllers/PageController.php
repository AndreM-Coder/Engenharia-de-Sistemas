<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use App\User;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Terms()
    {
        // $produto = Produto::find(1);

        // dd($produto->titulo);
        return view('pages.terms');
    }
}
