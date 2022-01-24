@extends('layouts/opipelis/general')

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="card-ok">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">Show Usuario</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> Back</a>
                    </div>
                </div>

                <div class="card-body">
                    
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $usuario->name }}
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
