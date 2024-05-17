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
    <title>México</title>
    <style>
    body {
      background: url('img/fondo_mexico.jpg') no-repeat center center fixed; /* Puedes reemplazar 'ruta_de_la_imagen.jpg' con la ruta de tu imagen */
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
          <h1>"El Nini" arriba a instalaciones de la FGR en la Ciudad de México</h1>
          <img src="img/art2.1.PNG" width="90%" alt="Descripción de la imagen">
          <br>
          <small style="color: grey">Daniela Wachauf, el universal 22 de noviembre del 2023</small>
          <hr>
          <p class="justificar">Néstor Isidro García / Pérez Salas, “El Nini”, presunto jefe de seguridad de los “Chapitos”, hijos de Joaquín “El Chapo’” 
            Guzmán, arribó a las instalaciones de la Fiscalía Especializada en Materia de Delincuencia Organizada (Femdo), en Avenida Paseo de la Reforma, 
            Ciudad de México. Lee también Así es la cárcel rascacielos de Chicago en la que está recluido el hijo de "El Chapo" De acuerdo a fuentes oficiales, 
            posiblemente será llevado al Centro Federal de Readaptación Social (Cefereso) No. 1 Almoloya, conocido como el Altiplano.    </p>
          <p class="justificar">
            CULIACÁN, Sin. (apro).- Con un fuerte despliegue encabezado por la Secretaría de la Defensa Nacional (Sedena), esta tarde capturaron a Néstor Isidro García 
            “El Nini”, presunto jefe de seguridad de “Los Chapitos”, en la colonia Colinas de la Rivera al norte de Culiacán. La detención se realizó en medio de un gran 
            operativo que incluyó vigilancia aérea en prácticamente todo el sector norte de Culiacán, incautando un domicilio en el fraccionamiento Isla Musala, uno de los 
            sectores exclusivos de la ciudad.
          </p>
        </div>
        <br>
        <br>
        <div class="" style="background:white; color:black;">
           <br>
          <h1>Captan en VIDEO violento asalto en el barrio de Tequis, en la capital de SLP </h1>
          <img src="img/art2.2.PNG" width="90%" alt="Descripción de la imagen">
          <br>
          <small style="color: grey">el universal san luis potosí el 22 de noviembre del 2023</small>
          <hr>
          <p class="justificar">Un sujeto despojó de sus pertenencias a un hombre, a punta de pistola, a unos pasos del IMSS Cuauhtémoc; la fiscalía ya 
            inició la investigación. Mediante redes sociales, usuarios han compartido un violento asalto a mano armada que se registró la noche del martes
            en la calle Melchor Ocampo en el Barrio de Tequis, a sólo unos pasos del IMSS de Cuauhtémoc, en la capital de San Luis Potosí. El atraco quedó 
            grabado en las cámaras de videovigilancia de la zona. En éste se puede apreciar desde el momento en el que un sujeto, con el rostro cubierto, 
            baja de un vehículo Versa blanco sin placas, se acerca sigilosamente hasta llegar con su víctima a quien amenaza con un arma, aprovechando que
            se encontraba distraído hablando por teléfono.
          </p>
          <p class="justificar">
           De forma inmediata lo despoja de sus pertenencias y huye del lugar. El hecho ha causado indignación entre la población, pues recriminan la falta de 
           vigilancia pues este no es el primer caso que se registra. Al respecto, la Fiscalía General del Estado de San Luis Potosí (FGESLP) informó que la Policía 
           de Investigación (PDI) comenzó con las diligencias correspondientes que ayuden a esclarecer lo sucedido. Además, extendió un llamado para que las corporaciones
           preventivas de la Zona Metropolitana intensifiquen los rondines y labores de vigilancia
          </p>
          <br>
          <br>
        </div>
        <div class="" style="background:black; color:white;">
          <br>
          <h1>Mujeres científicas estudian los nanometariales en la UNAM Juriquilla</h1>
          <img src="img/art2.3.PNG" width="90%" alt="Descripción de la imagen">
          <br>
          <small style="color: grey">Domingo Valdez 22 de noviembre del 2023</small>
          <hr>
          <p class="justificar">Su uso en la industria textil, electrónica y de alimentos es una realidad, pero aún falta explotar sus posibilidades en la producción de medicamentos 
            y tratamientos.Usados para conservar fármacos en buen estado, para evitar la degradación de materiales o productos, incluso en las vacunas contra el SARS CoV-2, los nanomateriales 
            ganan terreno en muchos aspectos de la vida cotidiana, aunque en México su uso no esta regulado todavía de manera formal, explica Karla Oyuky Juárez Moreno, bióloga de profesión e
            investigadora en nanotoxicología, disciplina que estudia los efectos que ocasionan los nanomateriales en diferentes células yen organismos. Los nanomateriales, precisa, son materiales 
            muy pequeños, que se miden en nanómetros.
          </p>
          <p class="justificar">
          “Son importantes actualmente porque tienen propiedades físicas y químicas únicas por el tamaño tan pequeño que tienen. Actualmente se usan mucho en la industria y en diversas tecnologías. 
          La nanotoxicología evalúa cuáles son sus efectos en el corto, mediano y largo plazo”, indica la investigadora del Campus Juriquilla de la UNAM. Explica que hay tres orígenes para todos los 
          nanomateriales: Los primeros son los naturales, que se encuentran en el medio ambiente, como pudieran ser las cenizas volcánicas, los virus, o los nanotubos de carbono, que surgen cuando se 
          generan incendios forestales. Los segundos son los nanomateriales sintéticos o manufacturados, que se diseñan y elaboran en la industria o por medio de un laboratorio para un fin en específico. 
          Los terceros son los nanomateriales incidentales, que son producto de la actividad industrial y que se generan por accidente, más que de manera intencional, durante la elaboración de algún otro 
          producto. Ejemplo de este último caso es la generación de nanopartículas durante la combustión de las gasolinas, o los nanoplásticos que se pueden generar cuando se lava la ropa.
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
        <h1>Tras decreto presidencial, autoridades confían en la construcción del tren México-Querétar</h1>
        <img src="img/art2.4.PNG" alt="Descripción de la imagen" width="90%" alt="noviembre 19, 2023 | 11:14 am hrs">
        <small style="color: grey">Montserrat Márquez 20 noviembre 2023</small>
        <hr>
        <p class="justificar">
        El pasado lunes el presidente de la República, Andrés Manuel López Obrador, publicó en el Diario Oficial de la Federación el decreto por el que el servicio de trenes de pasajeros en el sistema ferroviario 
        mexicano se declara como área prioritaria para el desarrollo nacional con siete rutas en la que se encuentran México-Querétaro, León-Aguascalientes y México-Querétaro-Guadalajara-Tepic-Mazatlán-Nogales. Lo 
        importante, recalcó, es que este proyecto se pueda concretar, ya que desde el sexenio pasado se habló de la construcción de un tren rápido México-Querétaro, pero tampoco se concretó el proyecto
        </p>
        <br>
        <br>
        </div>

        <div style="background:black; color:white; width: 100%;margin: 0; padding: 0; ">
        <h1>Luis Nava arranca el programa “Mi Querétaro Lindo”</h1>
        <img src="img/art2.5.PNG" alt="Descripción de la imagen" width="90%" alt="noviembre 19, 2023 | 11:14 am hrs">
        <small style="color: grey">Alma alcantara 22 noviembre 2023</small>
        <hr>
        <p class="justificar">Con el fin de realizar una limpieza profunda en diferentes colonias de la capital del estado, arrancó el programa “Mi Querétaro Lindo”, esto de forma simultánea en algunas colonias de las siete
             delegaciones, aunque el arranque oficial fue en Villas del Parque, donde estuvo presente el presidente municipal Luis Nava Guerrero.“El trabajo que realizamos todos los días para que Querétaro luzca bonito no es 
             suficiente y lo digo con toda humildad, requerimos de la ayuda de cada una de las personas que habitan en esta hermosa ciudad, Querétaro es de todas y todos, y así entre todos debemos de cuidarlo”, expresó. Adelantó 
             que se prevé intervenir 400 de las 900 colonias que hay en la capital con acciones de poda alta y baja, barrido, desmalezado, rehabilitación de banquetas, bacheo, limpieza de grafitis, ampliación de luminaria, entre otras.
        </p>    
        <br>
        <br>
        </div>

        <div style="background:white; color:black;">
        <br>
        <h1>Con un mensaje de paz, llega La Pequeña Amal a Oaxaca, marioneta que representa a la niñez refugiada</h1>
        <img src="img/art2.6.PNG" alt="Descripción de la imagen" width="90%" alt="noviembre 19, 2023 | 11:14 am hrs">
        <small style="color: grey">Sociedad 20 noviembre 2023</small>
        <hr>
        <p class="justificar">Oaxaca de Juárez.– Con 3.6 metros de altura y tras recorrer 14 países y cuatro estados de la República Mexicana, este miércoles aterrizó en Oaxaca “La Pequeña Amal”, una marioneta que representa a la niñez 
            refugiada y que durante dos días se reunirá con niños y niñas, con comunidades oaxaqueñas, migrantes y personas en refugio, así como artistas y colectivos que ayuden a difundir su mensaje de paz, esperanza y solidaridad “hacia 
            miles de personas desplazadas por la violencia, la guerra y la persecución”. Amal, que es considerada símbolo mundial de los derechos humanos, especialmente de la niñez, inició sus actividades en la entidad con una sesión de fotos
            en Monte Albán, al ser uno de lugares emblemáticos de la entidad; también paseará por las calles del Centro Histórico de la capital y participará en una gran calenda. “La marioneta gigante, que representa a una niña refugiada de Siria 
            que recorre el mundo en busca de su madre, se encontrará con el pueblo oaxaqueño. Su intención es traer un mensaje de paz y solidaridad hacia las personas desplazadas a causa de la violencia, la guerra o la persecución”, informaron los productores. Amal, cuyo nombre en árabe significa “esperanza”, ingresó a México el pasado 6 de noviembre, tras cruzar la frontera en Tijuana, Baja California, procedente de Estados Unidos.
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