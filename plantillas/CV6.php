<?php
require_once '../shared/Barra.php';
require_once 'cargarPlantilla.php';
?>

<div class="container">
<link rel="stylesheet" href="../css/CV6.css">
<div id="resume">
  <img class="card-img-top" src="<?php echo $imagen; ?>">
  <?php echo '<h1>'.$nombre.$apellidos. '</h1>'?>
  <?php echo '<p>'.$posicion. '</p>'?>
  <?php echo '<p>'."F. Nacimiento:".$year. '</p>'?>
  <?php echo '<p>'.$correo. '</p>'?>
  <?php echo '<p>'.$telefono. '</p>'?>
  <?php echo '<p>'."Diresccion:".$city. '</p>'?>
  <?php echo '<p>'."Github:".$github. '</p>'?>
  <?php echo '<p>'."Website:".$website. '</p>'?>
  <hr>

  <?php echo '<p id="objective">'.$About. '</p>'?>
<dl>
  <dt>Educacion
  <dd>
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
<dl>
<dt>Habilidades 
<dd>
  <?php 
                  foreach ($Skills as $skill) {
                    echo '<li>'."Nombre: ".$skill['nombre'].", Nivel: ".$skill['nivel'].'</li>';
                      }
                   ?>
</dl>
<dl>
<dt>Proyectos
<dd>
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
<dl>
<dt>Contribuciones 
  <dd>
  <<?php
              foreach ($Contributions as $cont) {
                echo '<li>'."Nombre: ".$cont['nombre']. '</li>';
                echo '<li>'."Descripcion: ".$cont['descripcion']. '</li>';
                echo '<li>'."URL: ".$cont['url']. '</li>';
                echo '<br>';
              
              }

              ?>
</dd>
</dl>
<dl>
<dt>Experiencia
<dd>
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
</dd>
</dl>
</dl>
<dl>
<dt>Conocimientos
<dd>
  <?php 
                  foreach ($Conocimientos as $conocimiento) {
                    echo '<p>'.$conocimiento['descripcion']. '</p>';
                  }


                   ?>
</dd>
</dl>
<dl>
<dt>Hobbies
  <dd>
  <?php
              foreach ($Hobbies as $hobbie) {
                echo '<li>'."Nombre: ".$hobbie['nombre']. '</li>';
                echo '<li>'."Descripcion: ".$hobbie['iconclass']. '</li>';
                echo '<li>'."URL: ".$hobbie['url']. '</li>';
                echo '<br>';
              }

              ?>
</dl>
</dd>
</div>
</div>