<?php
require_once '../shared/Barra.php';
require_once 'cargarPlantilla.php';
?>

<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic|Open+Sans:300,400,500,700|Waiting+for+the+Sunrise|Shadows+Into+Light' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../css/CV5.css">

<div class="container">

<div class="wrapper clearfix">
<div class="left">
    
    <div class="name-hero">
      

        
      <div class="name-text">
          <?php echo '<h1>'.$nombre." ".$apellidos. '</h1>'?>
          <?php echo '<p>'.$posicion. '</p>'?>
          <?php echo '<p>'."Birth year:".$year. '</p>'?>
          <?php echo '<p>'."City:".$city. '</p>'?>
     
      </div>
   
    </div>
    
  </div>
 <div class="right" style="margin-left: 100px;">
          <img class="card-img-top" src="<?php echo $imagen; ?>" style="margin-top: 50px; width:300px; height:300px; border-radius: 20px;" >
    
    <div class="inner">
      <section>
        <h1>Resumen</h1>
        <?php echo '<p>'.$About. '</p>'?>
      </section>
      <section>
        <h1>Experiencia</h1>
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
      </section>


      <section>
        <h1>Habilidades</h1>
        <ul class="skill-set">
          <?php 
                  foreach ($Skills as $skill) {
                    echo '<li>'."Nombre: ".$skill['nombre'].", Nivel: ".$skill['nivel'].'</li>';
                      }
                   ?>
        </ul>
      </section>
      <section>
        <h1>Educacion</h1>
        <?php
              foreach ($Education as $edu) {
                echo '<li>'."Titulo: ".$edu['titulo']. '</li>';
                echo '<li>'."Periodo: ".$edu['periodo']. '</li>';
                echo '<li>'."Descripcion: ".$edu['descripcion']. '</li>';
                echo '<li>'."Sitio: ".$edu['sitioweb']. '</li>';
                echo '<br>';
              }

              ?>
      </section>
      <section>
        <h1>Proyectos</h1>
        <?php
              foreach ($Projects as $pro) {
                echo '<li>'."Nombre: ".$pro['nombre']. '</li>';
                echo '<li>'."Plataforma: ".$pro['plataforma']. '</li>';
                echo '<li>'."Descripcion: ".$pro['descripcion']. '</li>';
                echo '<li>'."URL: ".$pro['url']. '</li>';
                echo '<br>';
              }


              ?>
      </section>
      <section>
        <h1>Contribuciones</h1>
        <?php
              foreach ($Contributions as $cont) {
                echo '<li>'."Nombre: ".$cont['nombre']. '</li>';
                echo '<li>'."Descripcion: ".$cont['descripcion']. '</li>';
                echo '<li>'."URL: ".$cont['url']. '</li>';
                echo '<br>';
              
              }

              ?>
      </section>

      <section>
        <h1>Conocimientos</h1>
        <?php 
                  foreach ($Conocimientos as $conocimiento) {
                    echo '<p>'.$conocimiento['descripcion']. '</p>';
                  }


                   ?>
      </section>
            <section>
        <h1>Hobbies</h1>
        <ul class="skill-set">
          <?php
              foreach ($Hobbies as $hobbie) {
                echo '<li>'."Nombre: ".$hobbie['nombre']. '</li>';
                echo '<li>'."Descripcion: ".$hobbie['iconclass']. '</li>';
                echo '<li>'."URL: ".$hobbie['url']. '</li>';
                echo '<br>';
              }

              ?>
        </ul>
      </section>
      <section>
        <div class="handmade">
          <h1>Contact</h1>
          <?php echo '<p>'.$correo. '</p>'?>
          <?php echo '<p>'.$telefono. '</p>'?>
            <?php echo '<p>'."Github:".$github. '</p>'?>
            <?php echo '<p>'."Website:".$website. '</p>'?>

        </div>
      </section>
    </div>
    
  </div>
  
  
  
</div>
</div>
