<!doctype html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="4UMkuaomqryXowOShHybtMmbTJjLr4r3382XjFSu">

        <title>Registro de usuario</title>

        <!-- Styles -->
        <style>
            .card-header {
            color: black;
            text-align: center;
            }
            p.c {
                display: inline-block;
                background: #AAE2E3;
                border-radius: 5px;
            }
            button.btn.btn-primary {
                background-color: #fa4e15;
                border: 0;
            }
        </style>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>

    <body style="background-image: url('https://www.solofondos.com/wp-content/uploads/2015/11/21omxpw.jpg');">
        
        <main class="py-4">
            <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-8">
            <div class="card">
            <div class="card-header">Nuevo usuario</div>

            <div class="card-body">
                <form method="POST">
                    <input type="hidden" name="_token" value="4UMkuaomqryXowOShHybtMmbTJjLr4r3382XjFSu">
                
                    <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Usuario</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control " name="usuario" value="" required autocomplete="usuario" autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email">
                        </div>
                    </div>

                    <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control " name="password" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar contraseña</label>
                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">Registrarme</button>
                            <p class="c"><a class="btn btn-link">Iniciar sesión</a></p>
                        </div>
                    </div>

                </form>
            </div>

            </div>
            </div>
            </div>
            </div>
        </main>

    </body>
</html>