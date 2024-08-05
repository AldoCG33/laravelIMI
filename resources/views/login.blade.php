<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet"/>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <img src="{{ asset('img/registrar1.png') }}" class="img-fluid" alt="registrar1" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 offset-xl-1">
                    <form class="form-container">
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Iniciar sesión Administrador</p>
                        </div>
                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0"></p>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Dirección de correo electrónico" />
                            <label class="form-label" for="form3Example3">Dirección de correo electrónico</label>
                        </div>
                        <div class="form-outline mb-3">
                            <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Contraseña" />
                            <label class="form-label" for="form3Example4">Contraseña</label>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                        </div>
                        <div class="d-flex justify-content-center align-items-center text-lg-start mt-4 pt-2">
                            <button type="button" class="btn btn-primary btn-lg">Iniciar sesión</button>
                        </div>
                        <p class="small fw-bold mt-2 pt-1 mb-0">¿No tienes una cuenta? <a href="{{ route('register') }}" class="link-danger">Registro</a></p>
                    </form>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <!-- utilizacion del helper -->
            <div class="text-white mb-3 mb-md-0">
                Todos los derechos reservados a IMI {{now()->year}}. 
            </div>
            
        </div>
    </section>
</body>
