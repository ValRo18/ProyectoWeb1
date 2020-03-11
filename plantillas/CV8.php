<?php
require_once '../shared/Barra.php';
require_once 'cargarPlantilla.php';
?>
<link rel="stylesheet" href="../css/CV8.css"><div class="parent">
<div class="container"> 
  <div class="head-title">
    <h1><span class="c">Curriculum</span> Vitae</h1>
  </div>
  <div class="header">
  <img class="card-img-top" src="<?php echo $imagen; ?>" style="width: 300px;height: 300px;">
    <div class="info">
          <?php echo '<h2>'.$nombre.$apellidos. '</h2>'?>
          <?php echo '<p>'.$posicion. '</p>'?>
    </div>
  </div>
  <div class="content">
    <div class="section">
      <h3 class="title">Información personal</h3>
      <div class="item">
         <?php echo '<p>'."F. Nacimiento:".$year. '</p>'?>
         <?php echo '<p>'."Dirección:".$city. '</p>'?>
              <?php echo '<p>'.$About. '</p>'?>
        </dl>
      </div>
    </div>
    <div class="section">
      <h3 class="title">Educacion</h3>
      <div class="item">
        <dl>
          <?php
              foreach ($Education as $edu) {
                echo '<li>'."Titulo: ".$edu['titulo']. '</li>';
                echo '<li>'."Periodo: ".$edu['periodo']. '</li>';
                echo '<li>'."Descripcion: ".$edu['descripcion']. '</li>';
                echo '<li>'."Sitio: ".$edu['sitioweb']. '</li>';
                echo '<br>';
              }

              ?>
        </dl>
      </div>
    </div>
    <div class="section">
      <h3 class="title">Experiencia</h3>
      <div class="item">
        <dl>
          <?php
              foreach ($Experience as $exp) {
                echo '<li>'."Compañia: ".$exp['compannia']. '</li>';
                echo '<li>'."Cargo: ".$exp['cargo']. '</li>';
                echo '<li>'."Periodo: ".$exp['periodo']. '</li>';
                echo '<li>'."Descripcion: ".$exp['descripcion']. '</li>';
                echo '<li>'."WEB: ".$exp['sitioweb']. '</li>';
                echo '<br>';
              }


              ?>
        </dl>
      </div>
    </div>
    <div class="section">
      <h3 class="title">Proyectos</h3>
      <div class="item">
        <dl>
          <?php
              foreach ($Projects as $pro) {
                echo '<li>'."Nombre: ".$pro['nombre']. '</li>';
                echo '<li>'."Plataforma: ".$pro['plataforma']. '</li>';
                echo '<li>'."Descripcion: ".$pro['descripcion']. '</li>';
                echo '<li>'."URL: ".$pro['url']. '</li>';
                echo '<br>';
              }


              ?>
        </dl>
      </div>
    </div>
    <div class="section">
      <h3 class="title">Contribuciones</h3>
      <div class="item">
        <dl>
        <?php
              foreach ($Contributions as $cont) {
                echo '<li>'."Nombre: ".$cont['nombre']. '</li>';
                echo '<li>'."Descripcion: ".$cont['descripcion']. '</li>';
                echo '<li>'."URL: ".$cont['url']. '</li>';
                echo '<br>';
              
              }

              ?>
        </dl>
      </div>
    </div>
     <div class="section">
      <h3 class="title">Conocimientos</h3>
      <div class="item">
        <dl>
        <?php 
                  foreach ($Conocimientos as $conocimiento) {
                    echo '<p>'.$conocimiento['descripcion']. '</p>';
                  }


                   ?>
        </dl>
      </div>
    </div>
    <div class="section">
      <h3 class="title">Habilidades</h3>
      <div class="item">
        <dl>
          <?php 
                  foreach ($Skills as $skill) {
                    echo '<li>'."Nombre: ".$skill['nombre'].", Nivel: ".$skill['nivel'].'</li>';
                      }
                   ?>
        </dl>
      </div>
    </div>
        <h3 class="title">Hobbies</h3>
        <div class="item">
          <dl>
          <?php
              foreach ($Hobbies as $hobbie) {
                echo '<li>'."Nombre: ".$hobbie['nombre']. '</li>';
                echo '<li>'."Descripcion: ".$hobbie['iconclass']. '</li>';
                echo '<li>'."URL: ".$hobbie['url']. '</li>';
                echo '<br>';
              }

              ?>
          </dl>
        </div>
      <div class="section">
        <h3 class="title">Contacto</h3>
        <div class="item">
          <dl>
          <?php echo '<p>'.$correo. '</p>'?>
          <?php echo '<p>'.$telefono. '</p>'?>
            <?php echo '<p>'."Github:".$github. '</p>'?>
            <?php echo '<p>'."Website:".$website. '</p>'?>
          </dl>
        </div>
      </div>
    </div>
  </div>

  </div>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  
    ga('create', 'UA-68317239-1', 'auto');
    ga('send', 'pageview');
  </script>