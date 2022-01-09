@extends("general")

@section("contenido")

<script>
    $(document).ready(function() {
            $('#tabla_usuarios').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
        } );
    } );
    </script>

    @if(count($usuarios)>0)

        @foreach($usuarios as $usuario)
            <div class="card" data-id='{{$usuario->id}}'>
                <img class="card-img-usuario" src='https://assets.puzzlefactory.pl/puzzle/213/347/original.jpg' alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$usuario->user_name}}</h5>
                    <a href="{{url('/usuarios')}}/{{$usuario->id}}/edit" class="btn btn-warning">Editar</a><a href="#" class='btn btn-danger borrar'>Borrar</a>
                </div>
            </div>
        @endforeach
    @else
        <h1>No hay usuarios</h1>
    @endif
@endsection