@extends("layouts/opipelis/general")

@section("contenido")

<script>
    $(document).ready(function() {
            $('#tabla_peliculas').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
        } );
    } );
    </script>

    @if(count($peliculas)>0)

        @foreach($peliculas as $pelicula)
            <div class="card" data-id='{{$pelicula->id}}'>
                <a href="{{ route('peliculas.show',$pelicula->id) }}"><img class="card-img-usuario" src="/imapeli/{{$pelicula->imagen}}" alt="Card image cap"></a>
                <div class="card-body">
                    <a href="{{ route('peliculas.show',$pelicula->id) }}"><h5 class="card-title">{{$pelicula->titulo}}</h5></a>
                    <form action="{{ route('peliculas.destroy',$pelicula->id) }}" method="POST">
                        <a class="btn-align btn-sm btn-warning" href="{{ route('peliculas.edit',$pelicula->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-align btn-danger btn-sm">Borrar</button>
                    </form>
                </div>
            </div>
        @endforeach
    @else
        <h1>No hay Peliculas.</h1>
    @endif
@endsection