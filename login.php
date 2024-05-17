<!DOCTYPE html>
<html lang="en" data-bs-theme="white">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="./Headers · Bootstrap v5.3_files/color-modes.js.download"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Noticias_login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link href="./Headers · Bootstrap v5.3_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="img/icono2png.png" type="image/x-icon" sizes="16x16 32x32 48x48">
    <script src="js/boton.js"></script>
    <meta name="theme-color" content="#712cf9">
    <link rel="stylesheet" href="css/estilos_login.css">

    <style>
        body {
            background: url('img/mundo.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .contenedor {
            max-width: 400px;
            width: 100%;
        }

        .fondo_login {
            background-color: #D8D8D8;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
    <link href="./Headers · Bootstrap v5.3_files/headers.css" rel="stylesheet">
</head>
<body>
<main>
    <div class="b-example-divider" style="height:1%;">
        <h1 class="visually-hidden"></h1>
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <img src="img/icono2png.png">
                    <span class="fs-4">Noticias</span>
                </a>
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">inicio</a></li>
                </ul>
            </header>
        </div>
    </div>

    <div id="inicio" class="d-flex flex-column align-items-center justify-content-center h-100 w-100">
        <div class="contenedor fondo_login text-bg p-4 rounded-3 shadow-lg">
            <br>
            <h2>Inicio de sesión</h2>
            <hr>
            <form class="col-12 needs-validation" id="miFormulario1" action="inicio_sesion.php" method="get" novalidate>
                <label for="username" class="form-label">Nombre de usuario</label>
                <div class="input-group has-validation">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                        </svg>
                    </span>
                    <input type="text" class="form-control" id="inicio1" name="inicio1" placeholder="Username" required>
                    <div class="invalid-feedback">
                        El nombre de usuario es obligatorio.
                    </div>
                </div>
                <br>

                <label for="contraseña" class="form-label">Contraseña</label>
                <div class="input-group has-validation">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                        </svg>
                    </span>
                    <input type="password" class="form-control" id="inicio2" name="inicio2" placeholder="Contraseña" required>
                    <div class="invalid-feedback">
                        La contraseña es obligatoria.
                    </div>
                </div>
                <br>
                <button class="btn btn-lg btn-secondary boton" type="submit">continuar</button>
                <button type="button" class="btn btn-lg btn-primary boton" onclick="registro()">registrarse</button>
            </form>
        </div>
    </div>

    <div id="final" class="d-flex flex-column align-items-center justify-content-center h-100 w-100">
        <div class="contenedor fondo_login text-bg p-4 rounded-3 shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square t1" viewBox="0 0 16 16" onclick="registro2()">
                <path onclick="registro2" d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path onclick="registro2" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
            <h2>Registrarte</h2>
            <hr>
            <form class="col-12 needs-validation" id="miFormulario" action="procesar.php" method="get" onsubmit="return validarFormulario()" novalidate>
                <label for="username" class="form-label">Nombre de usuario</label>
                <div class="input-group has-validation">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                        </svg>
                    </span>
                    <input type="text" class="form-control" id="registro1" name="registro1" placeholder="user" required>
                    <div class="invalid-feedback">
                        El nombre de usuario es obligatorio.
                    </div>
                </div>
                <br>
                <label for="correo" class="form-label">Correo electrónico</label>
                <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" id="registro2" name="registro2" placeholder="ejemplo@gmail.com" required>
                    <div class="invalid-feedback">
                        El correo electrónico es obligatorio.
                    </div>
                </div>
                <br>
                <label for="contraseña" class="form-label">Contraseña</label>
                <div class="input-group has-validation">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                        </svg>
                    </span>
                    <input type="password" class="form-control" id="registro3" name="registro3" placeholder="contraseña" required>
                    <div class="invalid-feedback">
                        La contraseña es obligatoria.
                    </div>
                </div>
                <br>
                <div class="conteiner">
                    <button class="w-100 btn btn-danger btn-lg" type="submit">registrarse</button>
                </div>
            </form>
        </div>
    </div>

    <script src="js/checkout.js.download"></script>
</main>
<script src="./Headers · Bootstrap v5.3_files/bootstrap.bundle.min.js.download" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>