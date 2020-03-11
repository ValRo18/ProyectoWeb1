<?php
require_once '../shared/Barra.php';
require_once 'cargarPlantilla.php';

?>
<!DOCTYPE html>
<html>
<head>
  <title>CV1</title>
  <link rel="stylesheet" href="../css/CV1.css">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all"> 
</head>
<body>

<div class="container"> 
  <div id="doc2" class="yui-t7">
  <div id="inner">
  
  <img class="card-img-top" name='imagen' src="<?=$imagen?>">
    <div id="hd">
      <div class="yui-gc">
        <div class="yui-u first">
          <?php echo '<h1>'.$nombre."<br>".$apellidos. '</h1>' ?>
          <?php echo '<h2>'.$posicion. '</h2>' ?>
        </div>

        <div class="yui-u">
          <div class="contact-info">
            <?php echo '<h2>'."F. NACIMIENTO:".$year. '</h2>' ?>
            <?php echo '<h2>'.$correo. '</h2>' ?>
            <?php echo '<h2>'.$telefono. '</h2>' ?>
            <?php echo '<h2>'."DIRECCION:".$city. '</h2>' ?>
            <?php echo '<h2>'."GITHUB:".$github. '</h2>' ?>
            <?php echo '<h2>'."SITE:".$website. '</h2>' ?>
          </div><!--// .contact-info -->
        </div>
      </div><!--// .yui-gc -->
    </div><!--// hd -->

    <div id="bd">
      <div id="yui-main">
        <div class="yui-b">

          <div class="yui-gf">
            <div class="yui-u first">
              <h2>Descripción</h2>
            </div>
            <div class="yui-u">
              <?php echo '<p>'.$About. '</p>'?>
            </div>
          </div><!--// .yui-gf -->

          <div class="yui-gf">
            <div class="yui-u first">
              <h2>Habilidades</h2>
            </div>
            <div class="yui-u">
                <div class="talent">
                  <?php 
                  foreach ($Skills as $skill) {
                    echo '<li>'."Nombre: ".$skill['nombre'].", Nivel: ".$skill['nivel'].'</li>';
                      }
                   ?>
                </div>
            </div>
          </div>
          <div class="yui-gf">
            <div class="yui-u first">
              <h2>Conocimientos</h2>
            </div>
            <div class="yui-u">
                <div class="talent">
                  <?php 
                  foreach ($Conocimientos as $conocimiento) {
                    echo '<p>'.$conocimiento['descripcion']. '</p>';
                  }


                   ?>
                </div>
            </div>
          </div><!--// .yui-gf -->

          <div class="yui-gf">
            <div class="yui-u first">
              <h2>Hobbies</h2>
            </div>
            <div class="yui-u">
              <ul class="talent">
                <?php
              foreach ($Hobbies as $hobbie) {
                echo '<li>'."Nombre: ".$hobbie['nombre']. '</li>';
                echo '<li>'."Descripcion: ".$hobbie['iconclass']. '</li>';
                echo '<li>'."URL: ".$hobbie['url']. '</li>';
                echo '<br>';
              }

              ?>
              </ul>
            </div>
          </div><!--// .yui-gf-->

          <div class="yui-gf">
  
            <div class="yui-u first">
              <h2>Experiencia</h2>
            </div><!--// .yui-u -->

            <div class="yui-u">
              <div class="job">
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
              </div>
            </div><!--// .yui-u -->
          </div><!--// .yui-gf -->
        <div class="yui-gf last">
            <div class="yui-u first">
              <h2>Proyectos</h2>
            </div>
            <div class="yui-u">
              <?php
              foreach ($Projects as $pro) {
                echo '<li>'."Nombre: ".$pro['nombre']. '</li>';
                echo '<li>'."Plataforma: ".$pro['plataforma']. '</li>';
                echo '<li>'."Descripcion: ".$pro['descripcion']. '</li>';
                echo '<li>'."URL: ".$pro['url']. '</li>';
                echo '<br>';
              }


              ?>
            </div>
          </div> 
          <div class="yui-gf last">
            <div class="yui-u first">
              <h2>Contribuciones</h2>
            </div>
            <div class="yui-u">
              <?php
              foreach ($Contributions as $cont) {
                echo '<li>'."Nombre: ".$cont['nombre']. '</li>';
                echo '<li>'."Descripcion: ".$cont['descripcion']. '</li>';
                echo '<li>'."URL: ".$cont['url']. '</li>';
                echo '<br>';
              
              }

              ?>
            </div>
          </div>   

          <div class="yui-gf last">
            <div class="yui-u first">
              <h2>Educacion</h2>
            </div>
            <div class="yui-u">
              <?php
              foreach ($Education as $edu) {
                echo '<li>'."Titulo: ".$edu['titulo']. '</li>';
                echo '<li>'."Periodo: ".$edu['periodo']. '</li>';
                echo '<li>'."Descripcion: ".$edu['descripcion']. '</li>';
                echo '<li>'."Sitio: ".$edu['sitioweb']. '</li>';
                echo '<br>';
              }

              ?>
            </div>
          </div><!--// .yui-gf -->
        </div><!--// .yui-b -->
      </div><!--// yui-main -->
    </div><!--// bd -->
  </div><!-- // inner -->
</div>
</div>
</body>
</html>