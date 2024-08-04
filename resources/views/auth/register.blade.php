<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Registro de usuarios</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group mb-3">
                                <label for="name">Nombre:</label>
                                <input type="text" class="form-control" id="name" placeholder="Introduce tu nombre">
                            </div>
                            <div class="form-group mb-3">
                                <label for="username">Usuario:</label>
                                <input type="text" class="form-control" id="username" placeholder="Introduce tu usuario">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Correo electrónico:</label>
                                <input type="email" class="form-control" id="email" placeholder="Introduce tu correo electrónico">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Contraseña:</label>
                                <input type="password" class="form-control" id="password" placeholder="Introduce tu contraseña">
                            </div>
                            <div class="form-group mb-3">
                                <label for="confirm-password">Confirmar contraseña:</label>
                                <input type="password" class="form-control" id="confirm-password" placeholder="Confirma tu contraseña">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
