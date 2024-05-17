<?php
// Inicia la sesión
session_start();
if (!isset($_SESSION['user'])) {
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="icon" href="img/icono3png.png" type="image/x-icon" sizes="16x16 32x32 48x48">
    <script src="js/boton.js"></script>
    <script src="js/llamados.js"></script>
    <link rel="stylesheet" href="css/estilo_todo.css">
    <link rel="stylesheet" href="css/estilos_login.css">
    <title>noticias principal</title>
    <style>
    body {
        /*background: url('img/mundo.jpg') no-repeat center center fixed; /* Puedes reemplazar 'ruta_de_la_imagen.jpg' con la ruta de tu imagen */
        background-size: cover;
        /* Otros estilos para el cuerpo si es necesario */
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }
    a {
        font-size: 12px;
    }
    @media (max-width: 1200px) {
        p {
            font-size: 10px;
        }
    }
    @media (max-width: 800px) {
        p {
            font-size: 8px;
        }
    }
    @media (max-width: 700px) {
        p {
            font-size: 8px;
        }
        img {
            display: none;
        }
    }
    </style>
</head>
<body>
 <header class="p-2 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="https://getbootstrap.com/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16" style="margin-top: 40%;">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
              </svg>         
            </li>
            <li>
                <div style="margin-top: 50%; margin-left: 30%;">
                <p><?php echo isset($_SESSION['user']) ? $_SESSION['user'] : 'USER'; ?></p>
                </div>
            </li>
        </ul>
        
        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2" onclick="aCasa()">Home</button>
          <?php if (!isset($_SESSION['user'])): ?>
              <button type="button" class="btn btn-outline-light me-2" onclick="Allogin()">Login</button>
          <?php endif; ?>
          <?php if (isset($_SESSION['user'])): ?>
              <button type="button" class="btn btn-outline-light me-2" onclick="cerrar()">Cerrar</button>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div >
      <br>
    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
    <div>
      <center>
      <table>
        <tr>
          <td><a href="noticias_mundiales.php" class="boton-enlace seguido enlace-btn" src="login.php">Noticias Mundiales</a></td>
          <td><a href="noticias_mexico.php" class="boton-enlace seguido">Noticias México</a></td>
          <td><a href="noticias_Espana.php" class="boton-enlace seguido">Noticias España</a></td>
          <td><a href="noticias_eeuu.php" class="boton-enlace seguido">Noticias EE.UU</a></td>
        </tr>
      </table>
      </center>
    </div>
    </ul>
  </header>
  <br>
  <br>
  <br>

  <center>
  <div class="conteiner" style="width: 80%" >
  <div class="row mb-3">
    <div class="col-6" style="width: 65%; background:black; color:white;">
      <center>
        <br>
        <img src="img//icono2png.png" style="background: white;"></img>
        <br>
        <p class="justificar" >
        ¡Bienvenidos a noticias donde la actualidad cobra vida a través de nuestra pasión por informar! En este rincón digital, nos dedicamos a ofrecerte noticias precisas, imparciales y oportunas. Desde eventos globales hasta detalles locales, exploramos cada faceta del panorama informativo. Nuestra misión es convertirnos en tu destino confiable para mantenerte informado. Atrévete a sumergirte en nuestras secciones especializadas, participa en la conversación y únete a una comunidad comprometida con la verdad. En [Nombre del Sitio], la información va más allá de las noticias: es un viaje interactivo hacia el conocimiento. ¡Bienvenidos a la experiencia informativa definitiva!
        </p>
        <hr>
        <div class="conteiner" style="width: 100%; margin:5%;">
       <div class="row mb-4" >
          <div class="col-4 btn btn-outline-light me-2 adiv" style="width: 30%;" >     
          <a href="noticias_mundiales.php"><img src="img/art1.1.jpg"  width="100%" height="50%" alt="Descripción de la imagen" ></a></img>
          <p>Por qué un museo va a reclasificar como mujer trans al emperador romano Heliogábolo</p>
          </div>

          <div class="col-4 btn btn-outline-light me-2 adiv" style="width: 30%;" >     
          <a href="noticias_mundiales.php"><img src="img/art1.2.jpg"  width="100%" height="50%" alt="Descripción de la imagen" ></a></img>
          <p>Cuántos presos palestinos hay en las cárceles israelíes y qué se sabe de los que serán liberados a cambio de los rehenes en manos de Hamás</p>
          </div>

          <div class="col-4 btn btn-outline-light me-2 adiv" style="width: 30%;" >     
          <a href="noticias_mundiales.php"><img src="img/art1.3.jpg"  width="100%" height="50%" alt="Descripción de la imagen" ></a></img>
          <p>Qué buscaba EE.UU. con los barrios Kennedy que el icónico presidente impulsó en América Latina en los años 60</p>
          </div>
        </div>
      </div>
      <div class="row mb-3" >
          <div class="col-4 btn btn-outline-light me-2 adiv" style="width: 30%;" >     
          <a href="noticias_mundiales.php"><img src="img/art1.4.jpg"  width="100%" height="50%" alt="Descripción de la imagen" ></a></img>
          <p>Por qué un museo va a reclasificar como mujer trans al emperador romano Heliogábolo</p>
          </div>

          <div class="col-4 btn btn-outline-light me-2 adiv" style="width: 30%;" >     
          <a href="noticias_mundiales.php"><img src="img/art1.5.jpg"  width="100%" height="50%" alt="Descripción de la imagen" ></a></img>
          <p>Cuántos presos palestinos hay en las cárceles israelíes y qué se sabe de los que serán liberados a cambio de los rehenes en manos de Hamás</p>
          </div>

          <div class="col-4 btn btn-outline-light me-2 adiv" style="width: 30%;" >     
          <a href="noticias_mundiales.php"><img src="img/art1.6.jpg"  width="100%" height="50%" alt="Descripción de la imagen" ></a></img>
          <p>Qué buscaba EE.UU. con los barrios Kennedy que el icónico presidente impulsó en América Latina en los años 60</p>
          </div>
        </div>
    </div>

    <div class="col-6" style="width: 35%;  background:black; color:white;">
    <br>
    <div class="conteiner" style="width: 80%;  margin:5%;">
    <div class="row mb-3">
          <div class="col-4 btn btn-outline-light me-2 adiv" style="width: 100%;" >     
          <a href="noticias_mundiales.php"><img src="img/art1.2.jpg"  width="100%" height="50%" alt="Descripción de la imagen" ></a></img>
          <p>Por qué un museo va a reclasificar como mujer trans al emperador romano Heliogábolo</p>
          </div>

          <div class="col-4 btn btn-outline-light me-2 adiv" style="width: 100%;" >     
          <a href="noticias_mundiales.php"><img src="img/art1.5.jpg"  width="100%" height="50%" alt="Descripción de la imagen" ></a></img>
          <p>Cuántos presos palestinos hay en las cárceles israelíes y qué se sabe de los que serán liberados a cambio de los rehenes en manos de Hamás</p>
          </div>

          <div class="col-4 btn btn-outline-light me-2 adiv" style="width: 100%;" >     
          <a href="noticias_mundiales.php"><img src="img/art1.6.jpg"  width="100%" height="50%" alt="Descripción de la imagen" ></a></img>
          <p>Qué buscaba EE.UU. con los barrios Kennedy que el icónico presidente impulsó en América Latina en los años 60</p>
          </div>
        </div>
    </div>
    </div>
  </div>
</div>
  </center>

</body>
</html>
