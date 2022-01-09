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

    <form action="{{url('/peliculas')}}/{{$peliculas->id}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="titulo" value="{{$peliculas->titulo}}">
        </div>
        <div class="form-group">
            <label for="director">Director</label>
            <input type="text" class="form-control" id="director" name="director" placeholder="director" value="{{$peliculas->director}}">
        </div>
        <div class="form-group">
            <label for="año">Año</label>
            <input type="text" class="form-control" id="año" name="año" placeholder="año" value="{{$peliculas->año}}">
        </div>
        <div class="form-group">
            <label for="sinopsis">Sinopsis</label>
            <input type="text" class="form-control" id="sinopsis" name="sinopsis" placeholder="sinopsis" value="{{$peliculas->sinopsis}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/peliculas')}}" class="btn btn-secondary">Cancelar</a>
    </form>

@endsection