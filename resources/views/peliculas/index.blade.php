@extends("general")

@section("contenido")

<script>
    $(document).ready(function() {
        $('#tabla_peliculas').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
        });

        $(".borrar").click(function(){
            const tr=$(this).closest("tr"); //guardamos el tr completo
            const id=tr.data("id");
            Swal.fire({
                title: '¿seguro que quieres borrarlo?',
                showCancelButton: true,
                confirmButtonText: 'Borrar',
                cancelButtonText: `Cancelar`,
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        method: "POST",
                        url   : "{{url('/peliculas')}}/"+id,
                        data  : {
                            _token: "{{csrf_token()}}",
                            _method: "delete",
                        },
                        success: function(){
                            tr.fadeOut();
                        }
                    });
                } 
            })
        });

    } );
</script>

    @if(count($peliculas)>0)
        @foreach($peliculas as $pelicula)
            <div class="card" data-id='{{$pelicula->id}}'>
            <a href="/perfilpelicula"><img class="card-img-pelicula" src='{{$pelicula->imagen}}' alt="Card image cap"></a>
                <div class="card-body">
                    <a href="/perfilpelicula"><h5 class="card-title">{{$pelicula->titulo}}</h5></a>
                    
                    <a href="{{url('/peliculas')}}/{{$pelicula->id}}/edit" class="btn btn-warning">Editar</a><a href="#" class='btn btn-danger borrar'>Borrar</a>
                </div>
            </div>
        @endforeach

    @else
        <h1>No hay peliculas</h1>
    @endif


@endsection