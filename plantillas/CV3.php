<?php
require_once '../shared/Barra.php';
require_once 'cargarPlantilla.php';
?>

<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../css/CV3.css">
<div class="container">

  <img class="card-img-top" src="<?=$imagen?>">
  <div class="header">
    <div class="full-name">
      <?php echo '<span>'.$nombre.$apellidos. '</span>'?><br>
      <span class="separator"></span>
      <?php echo '<span>'.$posicion. '</span>'?>
    </div>
    <div class="contact-info">
      <span class="email">Correo: </span>
        <?php echo '<span>'.$correo. '</span>'?>
         <hr>
        <?php echo '<span>'."Dirección:".$city. '</span>'?>
         <hr>
        <?php echo '<span>'."Github:".$github. '</span>'?>
         <hr>
       <?php echo '<span>'."F. Nacimiento:".$year. '</span>'?>
      <hr>
      <span class="separator"></span>
      <span class="phone">Telefono: </span>
        <?php echo '<span>'."City:".$city. '</span>'?>
         <hr>
        <?php echo '<span>'."Github:".$github. '</span>'?>
         <hr>
        <?php echo '<span>'."Website:".$website. '</span>'?>
         <hr>
        <?php echo '<span>'.$telefono. '</span>'?>
    </div>
    
    <div class="about">
      <span class="position"><h2>Informacion Personal</h2></span>

      <span class="desc">
        <?php echo '<p>'.$About. '</p>'?>
      </span>
    </div>
  </div>
   <div class="details">
    <div class="section">
      <div class="section__title"><h2>Experiencia</h2></div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <br>
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
      </div>
    </div>
    <div class="section">
      <div class="section__title"><h2>Educacion</h2></div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <br>
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
        </div>
        </div>

      </div>
     <div class="section">
      <div class="section__title"><h2>Proyectos</h2></div> 
       <div class="section__list">
         <div class="section__list-item">
          <br>
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
        <div class="section__title"><h2>Contribuciones</h2></div> 
       <div class="section__list">
                  <div class="section__list-item">
                    <br>
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
       </div>
    </div>
     <div class="section">
       <div class="section__title"><h2>Habilidades</h2>
        <br>
        <?php 
                  foreach ($Skills as $skill) {
                    echo '<li>'."Nombre: ".$skill['nombre'].", Nivel: ".$skill['nivel'].'</li>';
                      }
                   ?>
                   <br>
       </div>
       
     </div>

     <div class="section">
       <div class="section__title"><h2>Conocimientos</h2>
        <br>
        <?php 
                  foreach ($Conocimientos as $conocimiento) {
                    echo '<p>'.$conocimiento['descripcion']. '</p>';
                  }


                   ?>
                   <br>

       </div>
       
     </div>
  </div>
</div>