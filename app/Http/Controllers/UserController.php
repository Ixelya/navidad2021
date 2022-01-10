<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        $usuario = new User();
        return view('usuarios.create', compact('usuario'));
    }

    public function store(Request $request)
    {
        $usuario = User::create($request->all());
        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario creado correctamente');
    }

    public function show($id)
    {
        $usuario = User::find($id);
        return view('usuarios.show', compact('usuario'));
    }

    public function edit($id)
    {
        $usuario = User::find($id);
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, Users $user)
    {
        $usuario = User::find($user->id);
        $usuario->update($request->all());
        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario actualizado correctamente');
    }

    public function destroy($id)
    {
        $usuario = User::find($id)->delete();

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario borrado correctamente');
    }
}