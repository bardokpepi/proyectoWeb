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
    <title>todo el mundo</title>
    <style>
    body {
      background: url('img/fondo_mundo.jpg') no-repeat center center fixed; /* Puedes reemplazar 'ruta_de_la_imagen.jpg' con la ruta de tu imagen */
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
          <h1>Por qué un museo va a reclasificar como mujer trans al emperador romano Heliogábolo</h1>
          <img src="img/art1.1.jpg" width="90%" alt="Descripción de la imagen">
          <br>
          <small style="color: grey">Yasmín RufoRole,Reportera de cultura, BBC News  22 de noviembre del 2023</small>
          <hr>
          <p class="justificar">Cuenta el historiador romano Dion Casio, del siglo III d.C., que cuando un atractivo hombre se refirió al 
            emperador Heliogábolo como “mi señor emperador”, el líder le respondió: “No me llames señor, pues soy una dama”. Durante siglos, 
            las historias sobre la identidad sexual de la persona que estuvo frente a uno de los imperios más poderosos de la antigüedad, 
            ha sido objeto de curiosidad y de estudio. Pero ahora, el Museo de North Hertfordshire, en Reino Unido, anunció que su exposición 
            sobre Heliogábolo le reconocerá como una mujer trans y que utilizará los pronombres de ella y ellas para referirse al líder.Un 
            portavoz del museo dijo que “ser sensible a la hora de identificar pronombres de personas del pasado" era un acto de “cortesía y respeto” hacia ellas .
          </p>
          <p class="justificar">
          Marco Aurelio Antonino, más conocido como Heliogábalo, gobernó el Imperio romano durante sólo cuatro años, desde el año 218 d.C. 
          hasta su asesinato, a los 18 años, en el año 222 d.C. Su reputación de promiscuo lo convirtió en una figura inmensamente controversial.
          Dion Casio, quien aparte de historiador fue senador y contemporáneo de Heliogábalo, escribe en sus crónicas históricas que el emperador 
          estuvo casado cinco veces: cuatro veces con mujeres y una vez con Hiercoles, un exesclavo y auriga. Dion escribe que el emperador "fue otorgado 
          en matrimonio y fue llamado esposa, amante y reina".
          </p>
        </div>
        <br>
        <br>
        <div class="" style="background:white; color:black;">
           <br>
          <h1>Cuántos presos palestinos hay en las cárceles israelíes y qué se sabe de los que serán liberados a cambio de los rehenes en manos de Hamás</h1>
          <img src="img/art1.2.jpg" width="90%" alt="Descripción de la imagen">
          <br>
          <small style="color: grey">Paula Rosas Role,BBC News Mundo 22 de noviembre del 2023</small>
          <hr>
          <p class="justificar">Tras semanas de intentos fallidos, el gobierno israelí y Hamás llegaron a un acuerdo para intercambiar a parte de los
            rehenes en manos del grupo militante por presos palestinos encarcelados en Israel. Según el acuerdo, que se empezará a implementar este jueves,
            Hamás liberará en una primera fase a un total de 50 rehenes, mujeres y niños, a razón de 12 por día. Israel, por su parte, liberará a 150 prisioneros.
            En una segunda fase, la tregua se extenderá día a día por cada 10 rehenes que libere Hamás.Hamás, que es considerado un grupo terrorista por potencias 
            como EE.UU. o la Unión Europea, secuestró a alrededor de 240 personas, en su gran mayoría civiles, el pasado 7 de octubre, cuando atacó Israel por sorpresa,
            matando a unas 1.200 personas.Entre los rehenes hay bebés, niños y ancianos. Desde entonces, cuatro secuestrados han sido liberados, un fue rescatada y otras 
            dos personas fueron encontradas muertas.
          </p>
          <p class="justificar">
           En seis semanas, los bombardeos israelíes en Gaza han matado a más de 14.000 palestinos. Distintas organizaciones de derechos humanos cifran en unas 
           7.000 personas la población palestina presa en cárceles israelíes, algunas sin haber pasado por juicio, y casi todas sometidos a tribunales militares.
           A lo largo de los años, la ONU ha sido muy crítica con Israel por su tratamiento de los prisioneros palestinos, y ha asegurado que generaciones enteras 
           han soportado “privaciones de libertad arbitrarias, generalizadas y sistemáticas bajo la ocupación israelí”.
          </p>
          <br>
          <br>
        </div>
        <div class="" style="background:black; color:white;">
          <br>
          <h1>Qué buscaba EE.UU. con los barrios Kennedy que el icónico presidente impulsó en América Latina en los años 60</h1>
          <img src="img/art1.3.jpg" width="90%" alt="Descripción de la imagen">
          <br>
          <small style="color: grey">Gerardo Lissardy Role,BBC News Mundo 20 de noviembre del 2023</small>
          <hr>
          <p class="justificar">En una calle estrecha del sur de Bogotá hay una pequeña casita azul de una sola planta.Sería una casa como cualquier otra si no fuera por 
            una placa que se levanta a un costado de su fachada que la identifica como “la primera casa de las veintidosmil que se construirán por el gobierno de Colombia
            dentro del programa de la Alianza para el Progreso con la asistencia del presidente de los Estados Unidos de América John F. Kennedy”, de cuyo asesinato se cumplen 
            este miércoles 60 años.Fue el mismo Kennedy en una visita de 1961 quien puso la primera piedra de esa urbanización. 62 años después, la localidad de Kennedy aloja 
            según los datos más recientes a 1.230.000 personas, un poco más que la población entera de un país pequeño como Guyana. A poco más de 7.000 kilómetros de allí, en 
            el punto en el que desemboca el río de la Plata, había otro barrio llamado Kennedy, en Punta del Este, Uruguay, uno de los balnearios más exclusivos de toda América Latina..
          </p>
          <p class="justificar">
          Se trataba hasta hace poco de un asentamiento pobre e informal ubicado al lado del lujoso club de Golf Cantegril.Además del nombre, estos dos barrios en los extremos de 
          Suramérica tienen en común que nacieron a inicios de los años 60 con el impulso de la Alianza para el Progreso, un ambicioso programa de influencia de Estados Unidos que 
          echó a andar el entonces presidente Kennedy en América Latina en el contexto de la Guerra Fría.En estos lugares, la figura de Kennedy sigue tan viva que algunos habitantes
          del barrio Kennedy de Punta del Este alegan que esas tierras habían sido un regalo del propio Kennedy.Y en las salas de las algunas casas bogotanas, hay fotos del expresidente 
          estadounidense.No son los únicos casos por el estilo. En Río de Janeiro, Villa Kennedy es un barrio en el oeste de la ciudad en el que residen unas 140.000 personas. También fue 
          un ambicioso proyecto de infraestructura construido con el impulso de Estados Unidos e inaugurado menos de dos meses después del asesinato de John F. Kennedy. En su origen contó 
          con 5.000 viviendas. “En Brasil, renovación urbana era erradicar las favelas, un proceso que implica la construcción de complejos habitacionales de gran escala”, explica Leandro 
          Benmergui, profesor de historia latinoamericana de Purchase College.La Alianza para el Progreso también impulsó la construcción de la Unidad Kennedy, en la colonia Jardín Balbuena 
          de Ciudad de México, la urbanización Ciudad Alianza en la ciudad venezolana de Guacara, el barrio Kennedy en Caracas, la Población Kennedy en Puerto Montt, al sur de Chile, entre otros proyectos. 
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
        <h1>Shakira acuerda pagar una multa de 7,3 millones de euros en el caso de fraude fiscal al Estado español</h1>
        <img src="img/art1.4.jpg" alt="Descripción de la imagen" width="90%" alt="noviembre 19, 2023 | 11:14 am hrs">
        <small style="color: grey">Redacción Role,BBC News Mundo 20 noviembre 2023</small>
        <hr>
        <p class="justificar">La estrella del pop colombiana Shakira llegó a un acuerdo con los fiscales españoles para resolver un caso de fraude fiscal, justo cuando su juicio estaba a punto de comenzar.
            La cantante aceptó pagar una multa de 7,3 millones de euros (US$8 millones), evitando que -de ser declarada culpable- la encarcelaran durante ocho años y la multaran con 23,8 millones de euros 
            (US$26 millones), según pedían los fiscales. Shakira estaba acusada de haber defraudado al Estado español 14,5 millones de euros (US$15,8 millones) entre 2012 y 2014. La cantante aceptó una pena 
            de tres años de cárcel que no cumplirá.Para evitar ir a prisión, pagó otros 432.000 euros adicionales (US$472.000).La cantante ya devolvió la cantidad por la que se la acusaba de fraude.
        </p>
        <br>
        <br>
        </div>

        <div style="background:black; color:white; width: 100%;margin: 0; padding: 0; ">
        <h1>Los disturbios en el Maracaná que llevaron a Messi a sacar a los jugadores de la selección argentina del campo de juego</h1>
        <img src="img/art1.5.jpg" alt="Descripción de la imagen" width="90%" alt="noviembre 19, 2023 | 11:14 am hrs">
        <small style="color: grey">Redacción Role,BBC News Mundo 22 noviembre 2023</small>
        <hr>
        <p class="justificar">Cuando faltaban pocos minutos para el inicio del partido entre Argentina y Brasil que se debía jugar este martes en el estadio de Maracaná de Río de Janeiro, incidentes violentos 
            en la tribuna llevaron a que los jugadores argentinos abandonaran el campo de juego.La prensa local informó que, tras cantarse los himnos de ambos países, hubo un enfrentamiento entre hinchas de 
            ambas selecciones en las gradas.Inmediatamente, la Policía Militar brasileña intervino reprimiendo a los aficionados argentinos.Decenas de videos en redes sociales muestran a uniformados golpeando 
            con porras a los fanáticos de Argentina y a los asistentes lanzando sillas a los policías
        </p>    
        <br>
        <br>
        </div>

        <div style="background:white; color:black;">
        <br>
        <h1>“De pequeña mi padre me disfrazó de niño durante 10 años para protegerme y poder vivir libremente”</h1>
        <img src="img/art1.6.jpg" alt="Descripción de la imagen" width="90%" alt="noviembre 19, 2023 | 11:14 am hrs">
        <small style="color: grey">Redacción Role,BBC News Mundo 16 noviembre 2023</small>
        <hr>
        <p class="justificar">La cara de la pequeña Nilofar Ayoubi, de apenas 4 años, todavía estaba roja de la bofetada que acababa de recibir de un extraño mientras jugaba en las calles de Kunduz, en el norte
         de Afganistán. El golpe había sido tan brutal que la había lanzado al piso. “Llegué llorando a mi casa, mi padre estaba rojo de la ira”, le cuenta Nilofar a la BBC, veintitrés años después del incidente que
         dice tener grabado en su memoria. “Recuerdo que iba y venía furioso murmurando y diciendo ‘¿cómo se le ocurre tocarte?’.” Poco antes de golpearla, el desconocido le había palpado el pecho, buscando signos de 
         “feminidad”. Luego la amenazó y le dijo que si no usaba el velo, la próxima vez, atacaría a su padre. Después de unos momentos de enfado, el padre de Nilofar tomó una decisión radical: “Le pidió las tijeras 
         a mi madre, me cortó el cabello y le dijo a ella: ‘Vístela como un niño’.” Nilofar creció en Afganistán durante la primera era del gobierno del Talibán -de 1996 a 2001- y durante casi 10 años, vivió la vida 
         de un niño, salvándose del represivo control que ejerce la sharía, la ley islámica, sobre las mujeres.
        </p>    
        </div>

    </article>
    </center>
    </div>
  </div>
 </div>
  </center>
  <script src="js/boton.js"></script>
</body>
</html>