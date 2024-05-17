<?php
// Inicia la sesión
session_start();
if(!isset($_SESSION['user'])){
    session_destroy();
    echo '<script>window.location.href = "http://localhost/proyecto/login.php";</script>';

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link  rel="icon" href="img/icono3png.png" type="image/x-icon" sizes="16x16 32x32 48x48">
    <script src="js/boton.js"></script>
    <script src="js/llamados.js"></script>
    <link rel="stylesheet" href="css/estilo_todo.css">
    <link rel="stylesheet" href="css/estilos_login.css">
    <title>EE.UU</title>
    <style>
    body {
      background: url('img/fondo_ee.uu.jpg') no-repeat center center fixed; /* Puedes reemplazar 'ruta_de_la_imagen.jpg' con la ruta de tu imagen */
      background-size: cover;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
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
          
          <button type="button" class="btn btn-outline-light me-2" onclick="cerrar()">cerrar</button>
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
       
        <div class="" style="background:black; color:white;">
           <br>
          <h1>Choque deja dos muertos en puente fronterizo entre EEUU y Canadá. No hay indicios de terrorismo</h1>
          <img src="img/art4.1.PNG" width="90%" alt="Descripción de la imagen">
          <br>
          <small style="color: grey">CAROLYN THOMPSON, JOHN WAWROW Y JENNIFER PELTZ, 22 de noviembre del 2023</small>
          <hr>
          <p class="justificar">
          NIAGARA FALLS, Nueva York, EE.UU. —  Estados Unidos cerró un cruce fronterizo con Canadá tras la explosión de un vehículo en un puesto de control en un puente cerca de Niagara Falls, 
          informaron autoridades el miércoles. La oficina del FBI en Buffalo indicó en un comunicado que está investigando la explosión en el Puente Rainbow Bridge, que vincula a los dos países 
          sobre el río Niagara. Fotos y videos de medios noticiosos colocados en redes sociales muestran a un puesto de seguridad incendiado.
          </p>
          <p class="justificar">
          La gobernadora del estado de Nueva York, Kathy Hochul, dijo que ha sido notificada del suceso que está “monitoreando la situación de cerca”.
          En un primer momento no se tenía más información. El Puente Rainbow es uno de cuatro cruces fronterizos entre el oeste del estado de Nueva York con la provincia canadiense de Ontario.
          Los otros son Lewiston, Whirlpool y Peace Bridge. La Comisión de Puentes de Niagara reportó que todos los cruces están cerr
          </p>
        </div>
        <br>
        <br>
        <div class="" style="background:white; color:black;">
           <br>
          <h1>Muere un residente del condado de San Diego a causa de la fiebre maculosa de las Montañas Rocosas</h1>
          <img src="img/art4.2.PNG" width="90%" alt="Descripción de la imagen">
          <br>
          <small style="color: grey">POR CITY NEWS SERVICE SAN DIEGO UNION-TRIBUNE 22 de noviembre del 2023</small>
          <hr>
          <p class="justificar">
          SAN DIEGO —  El martes 21 de noviembre, las autoridades sanitarias del condado de San Diego animaron a los residentes a conocer los signos y síntomas de la fiebre maculosa de las Montañas Rocosas 
          tras la muerte de un residente de San Diego que viajó a la región de Baja California antes de caer enfermo. La fiebre maculosa de las Montañas Rocosas es una enfermedad transmitida por garrapatas a 
          personas y perros. Las garrapatas pueden picar a personas y animales en rutas de senderismo y zonas cubiertas de hierba o arboladas, normalmente durante los meses más húmedos del invierno y la primavera. 
          Sin embargo, viajar a lugares donde son frecuentes los perros callejeros, como Baja California, es un riesgo durante todo el año, porque los perros callejeros suelen llevar garrapatas infectadas. Según el 
          condado, las personas pueden protegerse utilizando repelente de insectos y ropa adecuada, y aplicando a sus mascotas productos para el control de insectos que maten pulgas y garrapatas.
          </p>
          <p class="justificar">
          La enfermedad se trata mejor con antibióticos cuando se diagnostica en la primera semana de enfermedad. La enfermedad debe su nombre a una erupción de manchas rojas que puede aparecer. Los primeros síntomas
          pueden incluir solo fiebre, dolores de cabeza y malestar estomacal, por lo que es importante informar al médico de cualquier picadura de insecto y de viajes o actividades al aire libre recientes, según un comunicado
          del condado. “Mientras que la fiebre maculosa de las Montañas Rocosas es un riesgo durante todo el año en la región de Baja California, el condado de San Diego suele tener de uno a tres casos cada año”, dice el comunicado. 
          “Los tres casos en residentes del condado reportados hasta ahora este año habían viajado a zonas donde la fiebre maculosa de las Montañas Rocosas es más común. La última muerte local por esta enfermedad fue un residente del
           condado Imperial que murió en un hospital de San Diego en 2014.”
          </p>
          <br>
          <br>
        </div>
        <div class="" style="background:black; color:white;">
          <br>
          <h1>Los Biden pasan el puente de Acción de Gracias en una lujosa isla de Massachusetts</h1>
          <img src="img/art4.3.PNG" width="90%" alt="Descripción de la imagen">
          <br>
          <small style="color: grey">EFE 22 de noviembre del 2023</small>
          <hr>
          <p class="justificar">
          El presidente y la primera dama de Estados Unidos, Joe y Jill Biden, se fueron unos días de vacaciones a Nantucket, una isla de Massachusetts, para celebrar el puente de Acción de Gracias en la casa de un amigo multimillonario.
          La pareja presidencial, que salió anoche de la Casa Blanca, amaneció ya este miércoles en Nantucket, donde los Biden pasarán unos días de descanso hasta el próximo domingo, cuando regresarán a la capital estadounidense.Por este 
          motivo, el presidente Biden fue hoy en el gran ausente en la cumbre virtual de líderes del G20 convocada por la anfitriona India y en la que sí participó el mandatario ruso, Vladímir Putin.
          </p>
          <p class="justificar">
          El presidente y su esposa pasan cada año desde 1975 esta festividad en la casa en Nantucket de su amigo multimillonario David Rubenstein, cofundador de la firma de inversión privada Carlyle Group. Cumpliendo con la tradición anual, 
          Biden indultó el lunes en la Casa Blanca a dos pavos que gracias al perdón presidencial no serán sacrificados para la cena de Acción de Gracias. El indulto de los pavos coincidió además con el cumpleaños 81 de Joe Biden, quien durante 
          su discurso en el evento del lunes bromeó varias veces sobre su avanzada edad. Durante estas fechas en Estados Unidos se consumen millones de pavos, que son el plato estrella de la cena de Acción de Gracias, que cada cuarto jueves de 
          noviembre conmemora una cena de 1621 entre colonos británicos e indíge
          </p>
    
          <br>
          <br>
        </div>
      </center>
    
    </div>




    <div class="col-6" style="width:35%; background-color: white; ">
    <center>
    <article>
        <div style="background:white; color:black;">
        <br>
        <h1>Autoridades de Nueva York descartan móvil terrorista en explosión de vehículo</h1>
        <img src="img/art4.4.PNG" alt="Descripción de la imagen" width="90%" alt="noviembre 19, 2023 | 11:14 am hrs">
        <small style="color: grey">ASSOCIATED PRESS 20 noviembre 2023</small>
        <hr>
        <p class="justificar">
        La gobernadora del estado de Nueva York, Kathy Hochul, y la responsable de contraterrorismo de la Policía de Nueva York, Rebecca Weiner, descartaron que el choque y posterior explosión de un vehículo hace unas horas en un puente cercano a las cataratas del Niágara
        tenga un móvil terrorista. “Basándonos en lo que sabemos en este momento, y repito que todo puede cambiar, no hay señales de actividad terrorista con respecto a este choque”, dijo Hochul, que quiso transmitir un mensaje de “calma”. Por su parte, Weiner, en una rueda 
        de prensa sobre la seguridad en el desfile de Acción de Gracias en la Gran Manzana, preguntada por el asunto, afirmó que varias agencias están en comunicación sobre el asunto y zanjó: “En este momento no vemos indicios de terrorismo”.
        </p>
        <br>
        <br>
        </div>

        <div style="background:black; color:white; width: 100%;margin: 0; padding: 0; ">
        <h1>Tatum se sobrepone a malestares y guía a Celtics a triunfo sobre Bucks</h1>
        <img src="img/art4.5.PNG" alt="Descripción de la imagen" width="90%" alt="noviembre 19, 2023 | 11:14 am hrs">
        <small style="color: grey">Clara Blanchar 22 noviembre 2023</small>
        <hr>
        <p class="justificar">
        BOSTON —  Jayson Tatum se sobrepuso a un malestar para aportar 23 puntos y 11 rebotes a la causa de los Celtics de Boston, que se impusieron el miércoles 119-116 sobre los Bucks de Milwaukee en un duelo temprano entre dos favoritos para grandes logros en la Conferencia Este.
        Jaylen Brown sumó 26 puntos y ocho asistencias por Boston, que colocó en 12-3 su foja, la mejor de la NBA. Kristaps Porzingis añadió 21 unidades y Derrick White anotó 13. Los Celtics tomaron una ventaja de 21 puntos en la primera mitad y nunca estuvieron en desventaja. Preservaron 
        esa delantera de dos dígitos hasta que los Bucks consiguieron una estupenda reacción en los últimos dos minutos. Milwaukee se aproximó a 114-111 antes de que Tatum atinara tres tiros libres en los últimos 21,2 segundos. Brook López encabezó a Milwaukee (10-5) con 28 puntos. Damian Lillard 
        logró 27 unidades, cinco rebotes y cinco asistencias, pero Giannis Antetokounmpo se vio limitado a 21 tantos tras lograr al menos 40 en sus últimos dos partidos.
        </p>    
        <br>
        <br>
        </div>

        <div style="background:white; color:black;">
        <br>
        <h1>San Diego quiere solucionar su escasez de baños públicos</h1>
        <img src="img/art4.6.PNG" alt="Descripción de la imagen" width="90%" alt="noviembre 19, 2023 | 11:14 am hrs">
        <small style="color: grey">Susana montiel 20 noviembre 2023</small>
        <hr>
        <p class="justificar">
        SAN DIEGO —  San Diego está poniendo en marcha una serie de iniciativas para solucionar la escasez de baños públicos en el centro de la ciudad, entre las que se incluye la creación de unas normas municipales mínimas sobre el número de instalaciones de este tipo que deben tener los vecindarios 
        urbanos. De forma similar a las normas vigentes sobre el número de bibliotecas, parques de bomberos y hectáreas de zonas verdes que debe tener cada parte de la ciudad, San Diego tiene previsto fijar un listón para los sanitarios públicos a medida que aumente la densidad de población.
        Otros esfuerzos incluyen la creación de nuevos incentivos para los promotores de viviendas en el centro de la ciudad, a los que se permitirá construir proyectos más grandes de lo que permite la zonificación si se comprometen a incluir al menos dos baños públicos. Para resolver el problema de la gente 
        que no puede encontrar los cerca de 40 baños públicos que ya hay en el centro, la ciudad ha creado también un mapa en internet y ha añadido señales de dirección para ayudar a la gente a encontrarlos. Además, la ciudad aprobó la pasada primavera 50 nuevos quioscos informativos para el centro de la ciudad 
        que ayudarán a los ciudadanos a encontrar los baños públicos, especialmente los 15 que están abiertos las 24 horas del día.
        </p>    
        </div>

    </article>
    </center>
    </div>
  </div>
 </div>