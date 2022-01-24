@extends('layouts.app')

<style>
.card-pic-peli{
width: 200px;
height: 230px;
display: block;
margin-top: 5px;
border-radius: 40%;
}
</style>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    $(document).ready(function(){

        $(".comentarios").html("hola");

        $.ajax({
            url:'/comentarios/movie/{{ $pelicula->id }}',
            dataType: 'json',
            type:'GET',         
            success: function(data) {
                console.log(data);
                var res="";
        
                $.each(data, function() {
                    $.each(this, function(key, value) {
                        res+="<p>"+value+"</p>";
                    });
                });
                $(".comentarios").html(res);
            }
        });
    })    
</script>


@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card-ok">
                <div class="card-header">
               
                    <div class="float-left">
                        <img class="card-pic-peli" src="/imapeli/{{$pelicula->imagen}}" alt="Card image cap">
                    </div>
                    <div class="float-right">
                        <div class="form-group">
                            <strong>Titulo:</strong> {{ $pelicula->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Año:</strong> {{ $pelicula->año }}
                        </div>
                        <div class="form-group">
                            <strong>Director:</strong> {{ $pelicula->director }}
                        </div>
                        <div class="form-group">
                            <strong>Sinopsis:</strong> {{ $pelicula->sinopsis }}
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="form-group">
                            <a class="btn btn-primary" href="{{ route('peliculas.index') }}">Listado de peliculas</a>
                        </div>
                    </div>

                </div>
                
                <h1><strong>Comentarios:</strong></h1>
                
                <div class="card-header">
                    <div class="float-left comentarios"></div>
                </div>
                
            </div>
        </div>
    </div>

    

@endsection
