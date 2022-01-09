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

<div>
    <form action="{{url('/usuarios')}}/{{$usuarios->id}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="{{$usuarios->nombre}}">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="apellidos" value="{{$usuarios->apellidos}}">
        </div>
        <div class="form-group">
            <label for="user_name">User-name</label>
            <input type="text" class="form-control" id="user_name" name="user_name" placeholder="user_name" value="{{$usuarios->user_name}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$usuarios->email}}">
        </div>
        <div class="form-group">
            <label for="contraseña">Contraseña</label>
            <input type="text" class="form-control" id="contraseña" name="contraseña" placeholder="contraseña" value="{{$usuarios->contraseña}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/usuarios')}}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

@endsection