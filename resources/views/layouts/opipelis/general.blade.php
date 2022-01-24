<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="micss.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title>@yield("titulo", "Opipelis")</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

       
    </head>

    <body class="hold-transition sidebar-mini">
        <div id="contenedor1">
            <div id="barrasuperior">@include("layouts/opipelis/header")</div>
            <div id="contenedor2">

                
                <div id="contenido">
                    @yield("contenido")
                </div>
            </div>
            <div id="barrainferior">@include("layouts/opipelis/footer")</div>
        </div>

    </body>
</html>