<?php 
   session_start();
   if(!isset($_SESSION['user'])){
    echo '<script>window.location.href = "http://localhost/proyecto/login.php";</script>';
   }
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script src="./Headers · Bootstrap v5.3_files/color-modes.js.download"></script>

    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.118.2">
      <title>Noticias_login</title>
       
      <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
      <link rel="stylesheet" href="./Headers · Bootstrap v5.3_files/css@3">
      <link href="./Headers · Bootstrap v5.3_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link rel="icon" href="img/icono2png.png" type="image/x-icon" sizes="16x16 32x32 48x48">
      <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
      <link rel="manifest" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/manifest.json">
      <link rel="mask-icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
      <script src="js/boton.js"></script>
      <meta name="theme-color" content="#712cf9">
      <link rel="stylesheet" href="css/estilo_todo.css">

      <style>
        body {
          background: url('img/mundo.jpg') no-repeat center center fixed; /* Puedes reemplazar 'ruta_de_la_imagen.jpg' con la ruta de tu imagen */
          background-size: cover;
          margin: 0;
          padding: 0;
          font-family: Arial, sans-serif;
        }
      </style>
    <link href="./Headers · Bootstrap v5.3_files/headers.css" rel="stylesheet">
  </head>
    <body>
    <main class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="tamañoi flex-md-row p-4 gap-4 py-md-5 align-items-center mx-auto">
      <div class="contenedor fondo_login text-bg dropdown-menu position-static d-flex flex-column align-items-stretch justify-content-start p-3 rounded-3 shadow-lg" style="background-color: #D8D8D8;">
        <br>
        <center>
          <h1 style="color: black;">Salio todo Bien</h1>
          <hr>
        <br>
        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="160" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16" style="color: black;">
            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
            <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
        </svg>
        </center>
        <br>
        <a class="btn btn-lg btn-secondary boton" href="index.php">continuar</a>
      </div>
    </div>
    </main>
     <script src="./Headers · Bootstrap v5.3_files/bootstrap.bundle.min.js.download" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>