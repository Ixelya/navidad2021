@extends("layouts.app")

<style>
body {
font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
font-size: 12px;
border-radius: 20px;
padding: 50px;
margin: 50px;
}
</style>

@section("content")
    @if(count($comentarios)>0)
    <table id="tabla_comentarios" class="table table-striped table-bordered">
            <tbody>
                @foreach($comentarios as $comentario)
                    <tr data-id='{{$comentario->id}}'>
                        <td>{{$comentario->id_user}}</td>
                        <td>{{$comentario->id_pelicula}}</td>
                        <td>{{$comentario->comentario}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    @else
        <h1>No hay comentarios</h1>
    @endif
@endsection