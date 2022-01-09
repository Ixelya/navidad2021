<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        Usuario::create($request->all());
        return redirect()->route('usuarios.index');
    }

    public function show(Usuario $usuario)
    {
    }

    public function edit(Usuario $usuario)
    {
        $usuarios = Usuario::find($usuario->id);
        return view('usuarios.edit', compact('usuarios'));
    }

    public function update(Request $request, Usuario $usuario)
    {
        $usuario = Usuario::find($usuario->id);
        $usuario->update($request->all());
        return redirect('/usuarios');
    }

    public function destroy(Usuario $usuario)
    {
        Usuario::find($usuario->id)->delete();
        return redirect()->route('usuarios.index');
    }
}