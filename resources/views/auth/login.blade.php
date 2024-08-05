<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <style>
        .vh-100 {
            height: 100vh;
        }
        .bg-primary {
            background-color: #007bff !important;
        }
        .bg-footer {
            height: 60px; /* Altura del pie de página */
        }
    </style>
</head>
<body>
    <section class="vh-100 d-flex flex-column">
        <div class="container-fluid h-custom d-flex flex-grow-1 align-items-center">
            <div class="row d-flex justify-content-center align-items-center flex-grow-1">
                <div class="col-md-6 col-lg-6 col-xl-5">
                    <img src="img/registrar1.png" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 offset-xl-1">
                    <div class="card form-container">
                        <div class="card-header">Inicio de Sesión</div>
                        <div class="card-body">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Correo electrónico:</label>
                                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña:</label>
                                    <input type="password" id="password" name="password" class="form-control" required>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Checkbox -->
                                    <div class="form-check mb-0">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                        <label class="form-check-label" for="form2Example3">
                                            Recordarme
                                        </label>
                                    </div>
                                    <a href="#!" class="text-body">¿Olvidaste tu contraseña?</a>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg mt-4">Iniciar Sesión</button>
                                <p class="small fw-bold mt-2 pt-1 mb-0">¿No tienes una cuenta? <a href="#!"
                                        class="link-danger">Regístrate</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-primary bg-footer d-flex align-items-center justify-content-center">
            <div class="text-white">
                Copyright © 2020. Todos los derechos reservados.
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
