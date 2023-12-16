<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dietas</title>
  <link rel="stylesheet" href="./dietas.css">
  <link rel="stylesheet" href="dietaspublic">
</head>

<body>
  <main>
    <header class="container">
      <div>
        <a href="../inicio_logueado/dashboard.php">
          <h1 class="color-white">Alive</h1>
        </a>
      </div>
      <div>
        <ul>
          <li><a href="/index.php">Inicio</a></li>
          <li><a href="/login/login.php">Iniciar sesion</a></li>
          <li><a href="/register/register.php">Registrarse</a></li>
        </ul>
      </div>
    </header>

    <section class="post-list">
      <div class="content">
        <article class="post">
          <div class="post-body">
            <h2 class="color-primary">Dieta Cetogénica</h2>
            <p class="descripcion">Baja en carbohidratos, moderada en proteínas y alta en grasas saludables.
              El objetivo es inducir un estado de cetosis, en el que el cuerpo quema grasas como fuente
              principal de energía.</p>
            <a href="https://www.ilae.org/patient-care/dieta-cetog-nica/conceptos-b-sicos#:~:text=La%20Dieta%20Cetog%C3%A9nica%20es%20una,cetonas%2C%20g%C3%A9nesis%3Dproducci%C3%B3n)." class="post-link">Más información</a>
          </div>
        </article>
        <article class="post">
          <div class="post-body">
            <h2 class="color-primary"> Dieta baja en carbohidratos</h2>
            <p class="descripcion">Se centra en limitar la ingesta de carbohidratos refinados y azúcares. Se favorece el
              consumo de fuentes saludables de proteínas y grasas. </p>
            <a href="https://www.mayoclinic.org/es/healthy-lifestyle/weight-loss/in-depth/low-carb-diet/art-20045831" class="post-link">Más información</a>
          </div>
        </article>

        <article class="post">
          <div class="post-body">
            <h2 class="color-primary">Dieta Paleolítica</h2>
            <p class="descripcion">Se centra en alimentos que se consumían durante el Paleolítico, como
              carnes magras, pescado, frutas, verduras, nueces y semillas. Excluye alimentos procesados,
              granos y lácteos.</p>
            <a href="https://www.mayoclinic.org/es/healthy-lifestyle/nutrition-and-healthy-eating/in-depth/paleo-diet/art-20111182#:~:text=Una%20dieta%20paleol%C3%ADtica%20es%20un,huevos%2C%20frutos%20secos%20y%20semillas." class="post-link">Más información</a>
          </div>
        </article>

        <article class="post">
          <div class="post-body">
            <h2 class="color-primary" class="color-primary">Dieta flexitariana</h2>
            <p class="descripcion">La dieta flexitariana es una aproximación flexible al vegetarianismo, donde la persona
              elige principalmente opciones vegetarianas pero ocasionalmente incluye carne o pescado.</p>
            <a href="https://www.elmundo.es/yodona/vida-saludable/2023/01/13/63bfcf49e4d4d8ef0f8b4571.html" class="post-link">Más información</a>
          </div>
        </article>

        <article class="post">

          <div class="post-body">
            <h2 class="color-primary">Dieta DASH</h2>
            <p class="descripcion">Diseñada para reducir la presión arterial, la dieta DASH incluye frutas, verduras,
              granos enteros, pescado, aves y productos lácteos bajos en grasa. También limita el consumo de sodio. Esta
              dieta es conocida por sus beneficios para la salud cardiovascular.</p>
            <a href="https://medlineplus.gov/spanish/ency/patientinstructions/000784.htm" class="post-link">Más información</a>
          </div>
        </article>

        <article class="post">
          <div class="post-body">
            <h2 class="color-primary">Dieta de ayuno intermitente</h2>
            <p class="descripcion">El ayuno intermitente alterna períodos de ayuno con períodos de alimentación. Puede
              seguir diferentes protocolos, como el ayuno 16/8. Esta dieta ha mostrado beneficios para la pérdida de peso
              y la salud metabólica.</p>
            <a href="https://www.clara.es/belleza/cuerpo/dieta-ayuno-intermitente_13099" class="post-link">Más información</a>
          </div>
        </article>

        <article class="post">
          <div class="post-body">
            <h2 class="color-primary">Dieta baja en grasas</h2>
            <p class="descripcion">La dieta baja en grasas limita la ingesta de grasas, especialmente las saturadas y
              trans. Favorece alimentos bajos en grasas y altos en carbohidratos y proteínas magras. Se ha utilizado
              históricamente para reducir el riesgo de enfermedades cardiovasculares.</p>
            <a href="https://www.mskcc.org/es/cancer-care/patient-education/minimal-fat-diet" class="post-link">Más información</a>
          </div>
        </article>

        <article class="post">
          <div class="post-body">
            <h2 class="color-primary">Dieta sin gluten</h2>
            <p class="descripcion">La dieta sin gluten excluye alimentos que contienen gluten y es esencial para personas
              con enfermedad celíaca o sensibilidad al gluten. Se centra en alimentos naturalmente libres de gluten, como
              frutas, verduras, proteínas magras y granos sin gluten.</p>
            <a href="https://www.mayoclinic.org/es/healthy-lifestyle/nutrition-and-healthy-eating/in-depth/gluten-free-diet/art-20048530" class="post-link">Más información</a>
          </div>
        </article>

        <article class="post">
          <div class="post-body">
            <h2 class="color-primary">Dieta Vegetariana</h2>
            <p class="descripcion">Excluye la carne, ya sea total o parcialmente. Los vegetarianos pueden
              consumir productos lácteos y huevos (ovo-lacto-vegetarianos), solo productos lácteos
              (lacto-vegetarianos) o solo vegetales (veganos).</p>
            <a href="https://medlineplus.gov/spanish/vegetariandiet.html" class="post-link">Más información</a>
          </div>
        </article>
      </div>
    </section>
  </main>
</body>

</html>