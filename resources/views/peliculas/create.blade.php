@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Crear pelicula</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('peliculas.store') }}"  role="form" enctype="multipart/form-data">
                        @csrf



                        <div class="box box-info padding-1">
                            <div class="box-body">
                                
                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    
                                <div class="form-group">
                                    <label for="titulo">Titulo</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="titulo" value="{{$pelicula->titulo}}">
                                </div>
                                <div class="form-group">
                                    <label for="director">Director</label>
                                    <input type="text" class="form-control" id="director" name="director" placeholder="director" value="{{$pelicula->director}}">
                                </div>
                                <div class="form-group">
                                    <label for="año">Año</label>
                                    <input type="text" class="form-control" id="año" name="año" placeholder="año" value="{{$pelicula->año}}">
                                </div>
                                <div class="form-group">
                                    <label for="sinopsis">Sinopsis</label>
                                    <input type="text" class="form-control" id="sinopsis" name="sinopsis" placeholder="sinopsis" value="{{$pelicula->sinopsis}}">
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