<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use App\Models\Comentario;
use Illuminate\Http\Request;
use PDF;

class PeliculaController extends Controller
{
    
    public function index()
    {
        $peliculas = Pelicula::all();

        return view('peliculas.index', compact('peliculas'));
    }

    public function create()
    {
        $pelicula = new Pelicula();
        return view('peliculas.create', compact('pelicula'));;
    }

    public function store(Request $request)
    {
        $pelicula = Pelicula::create($request->all());
        return redirect()->route('peliculas.index')
            ->with('success', 'Pelicula creada correctamente');
    }

    public function show($id)
    {
        $pelicula = Pelicula::find($id);

        return view('peliculas.show', compact('pelicula'));
    }

    public function pdf(){
        $peliculas = Pelicula::all();
        $pdf = PDF::loadView('pruebapdf', compact('peliculas'));
        return $pdf->stream('ReportePeliculas');
    }

    public function edit($id)
    {
        $pelicula = Pelicula::find($id);
        return view('peliculas.edit', compact('pelicula'));
    }

    public function update(Request $request, Pelicula $pelicula)
    {
        $pelicula = Pelicula::find($pelicula->id);
        // dd($request->imagen);

        $pelicula->imagen = $request->imagen;
        $pelicula->update($request->all());

        // $file = $request->file('imagen');
        // $pelicula->update(['imagen' => $file]);

        return redirect()->route('peliculas.index')
            ->with('success', 'Pelicula actualizada correctamente');
    }

    public function destroy($id)
    {
        $pelicula = Pelicula::find($id)->delete();

        return redirect()->route('peliculas.index')
            ->with('success', 'Pelicula borrada correctamente');
    }
}