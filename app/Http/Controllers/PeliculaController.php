<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('peliculas.index', compact('peliculas'));
    }

    public function create()
    {
        return view('peliculas.create');
    }

    public function store(Request $request)
    {
        Pelicula::create($request->all());
        return redirect()->route('peliculas.index');
    }

    public function show(Pelicula $pelicula)
    {
    }

    public function edit(Pelicula $pelicula)
    {
        $peliculas = Pelicula::find($pelicula->id);
        return view('peliculas.edit', compact('peliculas'));
    }

    public function update(Request $request, Pelicula $pelicula)
    {
        $pelicula = Peliculas::find($pelicula->id);
        $pelicula->update($request->all());
        return redirect('/peliculas');
    }

    public function destroy(Pelicula $pelicula)
    {
        Pelicula::find($pelicula->id)->delete();
        return redirect()->route('peliculas.index');
    }
}