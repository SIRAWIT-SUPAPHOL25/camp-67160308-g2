<?php

namespace App\Http\Controllers;

use App\Models\Pokedex;
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    public function index()
    {
        $pokedexs = Pokedex::all();
        return view('pokedex.index', compact('pokedexs'));
    }

    public function store(Request $request)
    {
        Pokedex::create($request->all());
        return redirect('/pokedex');
    }

    public function edit($id)
    {
        $pokedex = Pokedex::find($id);
        return view('pokedex.edit', compact('pokedex'));
    }

    public function update(Request $request, $id)
    {
        $pokedex = Pokedex::find($id);
        $pokedex->update($request->all());
        return redirect('/pokedex');
    }

    public function destroy($id)
    {
        Pokedex::destroy($id);
        return redirect('/pokedex');
    }
}
