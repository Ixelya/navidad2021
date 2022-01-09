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
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->route('usuarios.index');
    }

    public function show(User $user)
    {
    }

    public function edit(User $user)
    {
        $users = User::find($user->id);
        return view('usuarios.edit', compact('usuarios'));
    }

    public function update(Request $request, Users $user)
    {
        $user = User::find($user->id);
        $user->update($request->all());
        return redirect('/usuarios');
    }

    public function destroy(User $user)
    {
        User::find($user->id)->delete();
        return redirect()->route('usuarios.index');
    }
}