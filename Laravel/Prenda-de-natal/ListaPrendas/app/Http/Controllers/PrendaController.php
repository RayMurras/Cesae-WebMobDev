<?php

namespace App\Http\Controllers;

use App\Models\Prenda;
use App\Models\User;
use Illuminate\Http\Request;

class PrendaController extends Controller
{
    public function index()
    {
        $prendas = Prenda::with('user')->get();
        return view('prendas.index', compact('prendas'));
    }

    public function create()
    {
        $users = User::all();
        return view('prendas.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'namePrenda' => 'required',
            'valor_prev' => 'required|numeric',
            'userId' => 'required|exists:users,id',
        ]);

        Prenda::create($request->all());
        return redirect()->route('prendas.index');
    }

    public function show(Prenda $prenda)
    {
        return view('prendas.show', compact('prenda'));
    }

    public function edit(Prenda $prenda)
    {
        $users = User::all();
        return view('prendas.edit', compact('prenda', 'users'));
    }

    public function update(Request $request, Prenda $prenda)
    {
        $request->validate([
            'namePrenda' => 'required',
            'valor_prev' => 'required|numeric',
            'userId' => 'required|exists:users,id',
        ]);

        $prenda->update($request->all());
        return redirect()->route('prendas.index');
    }

    public function destroy(Prenda $prenda)
    {
        $prenda->delete();
        return redirect()->route('prendas.index');
    }
}
