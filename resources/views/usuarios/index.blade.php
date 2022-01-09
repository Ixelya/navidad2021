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
                <a href="/perfilusuario"><img class="card-img-usuario" src='{{$usuario->imagen}}' alt="Card image cap"></a>
                <div class="card-body">
                    <a href="/perfilusuario"><h5 class="card-title">{{$usuario->user_name}}</h5></a>
                    <a href="{{url('/usuarios')}}/{{$usuario->id}}/edit" class="btn btn-warning">Editar</a><a href="#" class='btn btn-danger borrar'>Borrar</a>
                </div>
            </div>
        @endforeach
    @else
        <h1>No hay usuarios</h1>
    @endif
@endsection