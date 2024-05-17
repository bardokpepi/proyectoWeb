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
    <title>españa</title>
    <style>
    body {
      background: url('img/fondo_españa.jpg') no-repeat center center fixed; /* Puedes reemplazar 'ruta_de_la_imagen.jpg' con la ruta de tu imagen */
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
          <h1>Gavi abandona entre lágrimas partido con España por lesión en rodilla derecha</h1>
          <img src="img/art3.1.PNG" width="90%" alt="Descripción de la imagen">
          <br>
          <small style="color: grey">ASSOCIATED PRESS, 22 de noviembre del 2023</small>
          <hr>
          <p class="justificar">
          VALLADOLID, España —  VALLADOLID, España (AP) — El centrocampista español Gavi habría sufrido una grave una lesión en su rodilla derecha en el partido ante Georgia, 
          el último de la selección por las eliminatorias rumbo al Campeonato Europeo de 2024. El jugador de 19 años del Barcelona salió cojeando del terreno entre lágrimas a 
          los 24 minutos en Valladolid. Gavi recibió un fuerte golpe en la rodilla derecha en un cruce con un futbolista de Georgia minutos antes de su salida. Continuó jugando 
          con muestras de dolor en la misma pierna mientras intentaba controlar el balón. Luego de eso inmediatamente señaló hacia al equipo que no podía continuar.
          </p>
          <p class="justificar">
          El volante se ha convertido en un jugador clave para el Barcelona y para España. Fue titular en cada partido de España durante la pasada Copa del Mundo, y su gol ante
          Noruega en octubre aseguró el triunfo por 1-0 que clasificó a su país a la Euro 2024. El seleccionador Luis de la Fuente abrazó al volante antes que Gavi se marchara al 
          vestuario junto a los médicos del equipo. “Vamos a esperar a las pruebas y se confirme la gravedad de la lesión. Es la victoria más amarga que he vivido en mi vida. Estamos 
          muy preocupados por Gavi”, dijo de la Fuente. “Se va a Barcelona y allí le harán las pruebas”. La lesión opacó la victoria 3-1 de España. Ferran Torres anotó un gol y aportó una asistencia.
          </p>
        </div>
        <br>
        <br>
        <div class="" style="background:white; color:black;">
           <br>
          <h1>La Comisión Europea avisa oficialmente de que estudiará si la amnistía es legal: "Con detenimiento, independencia y objetividad"</h1>
          <img src="img/art3.2.PNG" width="90%" alt="Descripción de la imagen">
          <br>
          <small style="color: grey">María G. Zornoza 22 de noviembre del 2023</small>
          <hr>
          <p class="justificar">La Eurocámara ha celebrado este miércoles uno de los debates con acento español que más expectación ha despertado en la en los últimos 
            tiempos: la discusión sobre el proyecto de Ley de Amnistía y su impacto en el Estado de Derecho. Los eurodiputados se enzarzaron en un rifirrafe nacional 
            ante un Hemiciclo con poca participación. El cruce de acusaciones entre el centro-derecha y el centro-izquierda incluyó las referencias a históricos como 
            José María Aznar, Felipe González o el propio Antonio Machado. Mientras que la Comisión se mantiene cauta, pero vigilante.
          </p>
          <p class="justificar">
          El foco se cernía sobre las palabras de la Comisión Europea, que tal y como se esperaba, mantuvo un tono de cautela. Didyer Reynders, comisario de Justicia, que 
          había deslizado preocupación cuando se cocinaba el acuerdo de investidura entre PSOE y Junts, no podía hacer mucho más que ser prudente. Los expertos jurídicos 
          están analizando el proyecto de ley, que ha comenzado esta semana su andadura en el Congreso de los Diputados.
          </p>
          <br>
          <br>
        </div>
        <div class="" style="background:black; color:white;">
          <br>
          <h1>"El Silicon Valley de la prehistoria": el pueblo de España donde se hallaron los restos humanos más antiguos de Europa</h1>
          <img src="img/art3.3.PNG" width="90%" alt="Descripción de la imagen">
          <br>
          <small style="color: grey">Susana Girón 22 de noviembre del 2023</small>
          <hr>
          <p class="justificar">
          Una serie de descubrimientos está revelando que los primeros habitantes de Europa se asentaron en un rincón remoto y accidentado de Granada hace aproximadamente 1,4 
          millones de años. La ciudad de Orce está ubicada en el corazón del Altiplano de Granada, en el sur de España, cuenta con 1.300 habitantes y está rodeada por un tapiz 
          de tierras baldías secas, cañones profundos y embalses de aguas cristalinas que se extienden hasta donde alcanza la vista. Pocos viajeros se aventuran a este remoto rincón 
          de Andalucía, pero aquellos que lo hacen obtienen una visión fascinante del pasado de Europa. Si se toma la sinuosa carretera a 140 kilómetros al noreste de Granada, pasando 
          por las serradas crestas del Parque Sierra de Huétor y las áridas llanuras esteparias del Parque Sierra de Baza hasta Orce, pronto se alcanza esta modesta aldea en la cima de una 
          colina, con un entorno único.
          </p>
          <p class="justificar">
            La aldea es el hogar de un profundo secreto: se cree que contiene los restos de los primeros humanos del continente. De hecho, los descubrimientos arqueológicos en esta región rural no sólo revelan
            destellos de dónde vinieron los europeos, sino también cuán diferente era el mundo natural cuando los humanos pisaron el continente por primera
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
        <h1>El nuevo Gobierno de Pedro Sánchez, 22 de noviembre | Reynders dice que Cataluña es “un asunto interno” español, pero promete que estudiarán “muy de cerca” la ley de amnistía</h1>
        <img src="img/art3.4.PNG" alt="Descripción de la imagen" width="90%" alt="noviembre 19, 2023 | 11:14 am hrs">
        <small style="color: grey">Montserrat Márquez 20 noviembre 2023</small>
        <hr>
        <p class="justificar">
        El comisario europeo de Justicia participa en del Parlamento Europeo sobre la proposición de medida de gracia a petición del PP y Vox | La ultraderecha sube el tono contra el Gobierno “ilegítimo” 
        de Sánchez en el debate sobre la ley de amnistía de la Eurocámara | Alegría, tras el Consejo de Ministros: “Los ciudadanos merecen un Gobierno que trabaje y una oposición que construya” | Sánchez,
        a los nuevos ministros: “A la crispación responderemos con trabajo”
        El comisario europeo de Justicia, Didier Reynders, ha asegurado este miércoles en el Parlamento Europeo que “el debate sobre la ley de amnistía ha de producirse en España, dentro del marco constitucional 
        español y ha de empezar en el Parlamento español. La Comisión, como guardiana de los tratados, analizará el encaje del proyecto de ley para asegurar su compatibilidad con el derecho comunitario”. En un debate
         sobre la ley de amnistía —que el PP y Vox han llevado a la Eurocámara— Reynders ha rebajado el tono sobre el asunto, asegurando que Cataluña “sigue siendo un tema interno de España” que la comisión seguirá 
         “muy de cerca”. Por la mañana, el recién estrenado Gobierno de Pedro Sánchez ha celebrado el primer Consejo de Ministros. En la rueda de prensa posterior, la nueva ministra portavoz, Pilar Alegría, ha lanzado un
          mensaje al PP: “Los ciudadanos merecen un Gobierno que trabaje y una oposición que construya”. Los 22 integrantes del Ejecutivo se han encontrado una carta del presidente en la que Sánchez les ha dicho: “A la crispación, responderemos con trabajo”.
        </p>
        <br>
        <br>
        </div>

        <div style="background:black; color:white; width: 100%;margin: 0; padding: 0; ">
        <h1>La Guardia Urbana de Barcelona denuncia el autobús de Hazte Oír que muestra a Sánchez como Hitler</h1>
        <img src="img/art3.5.PNG" alt="Descripción de la imagen" width="90%" alt="noviembre 19, 2023 | 11:14 am hrs">
        <small style="color: grey">Clara Blanchar 22 noviembre 2023</small>
        <hr>
        <p class="justificar">La Guardia Urbana de Barcelona ha denunciado a la entidad Hazte Oír por circular por la ciudad con un autobús que muestra una gran imagen del presidente del Gobierno, Pedro Sánchez, como si fuera Adolf Hitler. 
            Sobre color naranja, el bus, de dos pisos, lleva escrito el lema "¡Sánchez Dictador! ¡Pedro Sánchez Odia España!" Los agentes han multado al autobús por exhibir publicidad comercial sin permiso. La entidad ha explicado en las redes
            sociales que los agentes han retenido el autobús en la  plaza Catalunya durante "aproximadamente una hora". "Nos han intimidado y advertido de que vayamos con cuidado porque nos pueden apedrear dependiendo de la zona a la que vayamos", han añadido.
        </p>    
        <br>
        <br>
        </div>

        <div style="background:white; color:black;">
        <br>
        <h1>Ampliación | La derecha no logra europeizar el debate sobre la amnistía en la Eurocámara</h1>
        <img src="img/art3.6.PNG" alt="Descripción de la imagen" width="90%" alt="noviembre 19, 2023 | 11:14 am hrs">
        <small style="color: grey">Susana montiel 20 noviembre 2023</small>
        <hr>
        <p class="justificar">
        Bruselas es la gran bala que el Partido Popular quiere activar contra la amnistía para los encausados en el procés. Pero este miércoles, en un pleno en el Parlamento Europeo sobre el asunto impulsado por los populares, el comisario de Justicia de la UE, Didier Reynders, 
        no le ha dado combustible para la crítica. “La situación de Cataluña sigue siendo un tema interno de España que se dirimirá según su Constitución”, ha remarcado el liberal belga en un debate bronco y de alta tensión al que ha asistido menos de un centenar de los 705 
        eurodiputados. “El debate y análisis sobre la ley de amnistía ha de producirse en España, dentro del marco constitucional español y ha de empezar en el Parlamento español”, ha zanjado Reynders, que ha explicado que la Comisión, como guardiana de los tratados, analizará el 
        encaje del proyecto de ley “para asegurar su compatibilidad con el derecho comunitario” y ha prometido que seguirá “muy de cerca” y de de forma “muy cuidadosa y objetiva” la cuestión. La evaluación de Bruselas solo concluirá, además, cuando estén presentadas todas las enmiendas al texto legal.
        </p>    
        </div>

    </article>
    </center>
    </div>
  </div>
 </div>