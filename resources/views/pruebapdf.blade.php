<html>
<head>
  <style>
    body{
      font-family: sans-serif;
    }
    @page {
      margin: 160px 50px;
    }
    header { position: fixed;
      left: 0px;
      top: -160px;
      right: 0px;
      height: 100px;
      background-color: #ddd;
      text-align: center;
    }
    header h1{
      margin: 10px 0;
    }
    header h2{
      margin: 0 0 10px 0;
    }
    footer {
      position: fixed;
      left: 0px;
      bottom: -50px;
      right: 0px;
      height: 40px;
      border-bottom: 2px solid #ddd;
    }
    footer .page:after {
      content: counter(page);
    }
    footer table {
      width: 100%;
    }
    footer p {
      text-align: right;
    }
    footer .izq {
      text-align: left;
    }
  </style>
<body>
  <header>
    <h1>Lista de Peliculas</h1>
  </header>
  <footer>
    <table>
      <tr>
        <td>
            <p class="izq">
              Proyecto Laravel
            </p>
        </td>
        <td>
          <p class="page">
            Página
          </p>
        </td>
      </tr>
    </table>
  </footer>
  <div id="content">
    @foreach($peliculas as $pelicula)   
        
            <p>
            <h5>{{$pelicula->titulo}}</h5>
            </p><p>
            <b>Titulo:</b> {{ $pelicula->titulo }}<br>
            <b>Año:</b> {{ $pelicula->año }}<br>
            <b>Director:</b> {{ $pelicula->director }}<br>
            <b>Sinopsis:</b> {{ $pelicula->sinopsis }}
            </p>
           <hr>
    @endforeach
</div>

   
</body>
</html>

