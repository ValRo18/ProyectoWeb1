<?php
require_once '../shared/Barra.php';
require_once 'cargarPlantilla.php';
?>

<link rel="stylesheet" href="../css/CV4.css">
 <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="title text-center">
          <div class="info">
          <img class="card-img-top" src="<?php echo $imagen ?>">
          <div class="info">
          <?php echo '<h1>'.$nombre.$apellidos. '</h1>'?>
          <?php echo '<h2>'.$posicion. '</h2>'?>
          <?php echo '<h2>'.$correo. '</h2>'?>
        </div>
      
      </div>
      <hr>
        <div class="summary">
          <h2>Informacion Personal</h2>
          <h2 class="text-center"></h2>
          <?php echo '<p>'.$About. '</p>'?>
          
        </div>
        <div class="work-experience">
          <h2 class="text-center">Experiencia</h2>
          <div class="row experience-title">
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
          <div class="education">
          <h2 class="text-center">Education</h2>
          <div class="row experience-title">
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
          <h2 class="text-center">Hobbies</h2>
          <div class="row experience-title">
            <div class="col-md-9">
              <?php
              foreach ($Hobbies as $hobbie) {
                echo '<li>'."Nombre: ".$hobbie['nombre']. '</li>';
                echo '<li>'."Descripcion: ".$hobbie['iconclass']. '</li>';
                echo '<li>'."URL: ".$hobbie['url']. '</li>';
                echo '<br>';
              }

              ?>
            </div>
            <h2 class="text-center">Proyectos</h2>
          <div class="row experience-title">
            <div class="col-md-9">
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
          <h2 class="text-center">Contribuciones</h2>
          <div class="row experience-title">
            <div class="col-md-9">
             <?php
              foreach ($Contributions as $cont) {
                echo '<li>'."Nombre: ".$cont['nombre']. '</li>';
                echo '<li>'."Descripcion: ".$cont['descripcion']. '</li>';
                echo '<li>'."URL: ".$cont['url']. '</li>';
                echo '<br>';
              
              }

              ?>
            </div>
          <div class="skills">
            <h2>Habilidades</h2>
          <div class="row">
            <div class="col-md-3 col-sm-3">
            <?php 
                  foreach ($Skills as $skill) {
                    echo '<li>'."Nombre: ".$skill['nombre'].", Nivel: ".$skill['nivel'].'</li>';
                      }
                   ?>
            </div>
          </div>
        </div>
        <div class="skills">
            <h2>Conocimientos</h2>
          <div class="row">
            <div class="col-md-3 col-sm-3">
            <?php 
                  foreach ($Conocimientos as $conocimiento) {
                    echo '<p>'.$conocimiento['descripcion']. '</p>';
                  }


                   ?>
            </div>
          </div>
        </div>   
        <section>
        <div class="handmade">
          <h2>Contact</h2>
          <?php echo '<h3>'."Birth year:".$year. '</h3>'?>
            <?php echo '<h3>'.$correo. '</h3>'?>
            <?php echo '<h3>'.$telefono. '</h3>'?>
            <?php echo '<h3>'."City:".$city. '</h3>'?>
            <?php echo '<h3>'."Github:".$github. '</h3>'?>
            <?php echo '<h3>'."Website:".$website. '</h3>'?>
        </div>
      </section>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
</div>
