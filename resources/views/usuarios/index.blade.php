@extends("general")

@section("contenido")

<script>
    $(document).ready(function() {
            $('#tabla_users').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
        } );
    } );
    </script>

    @if(count($usuarios)>0)

        @foreach($usuarios as $usuario)
            <div class="card" data-id='{{$usuario->id}}'>
                <a href="{{ route('usuarios.show',$usuario->id) }}"><img class="card-img-usuario" src='{{$usuario->imagen}}' alt="Card image cap"></a>
                <div class="card-body">
                    <a href="{{ route('usuarios.show',$usuario->id) }}"><h5 class="card-title">{{$usuario->user_name}}</h5></a>
                    <form action="{{ route('usuarios.destroy',$usuario->id) }}" method="POST">
                        <a class="btn-align btn-sm btn-warning" href="{{ route('usuarios.edit',$usuario->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-align btn-danger btn-sm">Borrar</button>
                    </form>
                </div>
            </div>
        @endforeach
    @else
        <h1>No hay usuarios</h1>
    @endif
@endsection