@extends("general")

@section("contenido")

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
                                    {{ Form::label('name') }}
                                    {{ Form::text('name', $usuario->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
                                    {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
                                </div>
                                
                            </div>
                            <div class="box-footer mt20">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>


                        
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection