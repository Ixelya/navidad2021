@extends('layouts.app')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

 
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Crear usuario</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('usuarios.store') }}"  role="form" enctype="multipart/form-data">
                        @csrf



                        <div class="box box-info padding-1">
                            <div class="box-body">
                                
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{$usuario->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="apellidos">Apellidos</label>
                                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="apellidos" value="{{$usuario->apellidos}}">
                                </div>
                                <div class="form-group">
                                    <label for="user_name">Username</label>
                                    <input type="text" class="form-control" id="user_name" name="user_name" placeholder="user_name" value="{{$usuario->user_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$usuario->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="text" class="form-control" id="password" name="password" placeholder="password" value="{{$usuario->password}}">
                                </div>
                                <div class="form-group">
                                    <label for="imagen">Imagen</label>
                                    <select name="imagen" id="imagen" class="form-control">
                                        <option value="default.jpg">Select an icon</option>
                                        <option value="azul.jpg">Azul</option>
                                        <option value="rojo.jpg">Rojo</option>
                                    </select>
                                </div>
                                
                            </div>
                            <div class="box-footer mt20">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>


                        
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection