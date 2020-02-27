<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Faker\Factory;
use App\Loja;

class LojaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$lojas = Auth::user()->lojas->paginate(5);   
        $lojas = Loja::where('user_id', auth()->user()->id)->paginate(10);

        return view('user.loja.index', compact('lojas'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
               
        return view('user.loja.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Loja::create([
            'user_id' => Auth::user()->id,
            'nome' => $request->post('nome'),
            'descricao' => $request->post('descricao'),
            'estado' => $request->post('estado'),
        ]);

        // return redirect('/user/loja');
        return redirect()->route('loja.index')
            ->with('success', 'Loja criada com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Loja $loja)
    {
        return view('user.loja.show', compact('loja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Loja $loja)
    {       
        return view('user.loja.edit', compact('loja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loja $loja)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
            'estado' => 'required',
        ]);

        $loja->update($request->all());

        return redirect()->route('loja.index')
            ->with('success', 'Loja atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loja $loja)
    {
        $loja->delete();

        return redirect()->route('loja.index')
            ->with('success', 'Loja apagada com sucesso');
    }
}
