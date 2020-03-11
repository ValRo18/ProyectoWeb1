<?php
require_once '../shared/Barra.php';
require_once 'cargarPlantilla.php';
?>
<link rel="stylesheet" href="../css/CV9.css">
<body>
  <div id="drag" class="container">
    <div class="mainDetails">
      <div id="headshot" class="quickFade">
        <img src="<?php echo $imagen; ?>" />
      </div>

      <div id="name">
        <?php echo '<h1 class="quickFade delayTwo">'.$nombre.$apellidos. '</h1>'?>
        <div class="bioDetails"> 
          <?php echo '<h2>'.$posicion. '</h2>'?>
        </div>        
      </div>
      <div class="clear"></div>
    </div>

    <div class="primaryContent">
    <div id="personalArea" class="quickFade delayFour">
      <section>
            <div class="sectionTitle">
              <h1>Info</h1>
            </div>
            <div class="sectionContent">

            <?php echo '<p>'."F. Nacimiento:".$year. '</p>'?>
            <?php echo '<p>'.$correo. '</p>'?>
            <?php echo '<p>'.$telefono. '</p>'?>
            <?php echo '<p>'."Dirección:".$city. '</p>'?>
            <?php echo '<p>'."Github:".$github. '</p>'?>
            <?php echo '<p>'."Website:".$website. '</p>'?>        
          </div>
              <p><p/>
      </section>      
      <div class="clear"></div>     
    </div>
    
    <div id="mainArea" class="quickFade delayFive">
      <section id="Profile">
        <article>
          <div class="sectionTitle">
            <h1>Informacion</h1>
          </div>

          <div class="sectionContent">
              <?php echo '<p>'.$About. '</p>'?>
          </div>
        </article>
        <div class="clear"></div>
      </section>

      <section id="credentials">
        <div class="sectionTitle">
          <h1>Experiencia</h1>
        </div>
        <div class="sectionContent">
          <article>
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
          </article>
        </div>
        <div class="clear"></div>
      </section>
      <section id="Education">
        <div class="sectionTitle">
          <h1>Habilidades</h1>
        </div>
        <div class="sectionContent">

          <article>
             <?php 
                  foreach ($Skills as $skill) {
                    echo '<li>'."Nombre: ".$skill['nombre'].", Nivel: ".$skill['nivel'].'</li>';
                      }
                   ?>
          </article>
        </div>
        <div class="clear"></div>
      </section>
      
      <section id="Education">
        <div class="sectionTitle">
          <h1>Educacion</h1>
        </div>
        <div class="sectionContent">

          <article>
             <?php
              foreach ($Education as $edu) {
                echo '<li>'."Titulo: ".$edu['titulo']. '</li>';
                echo '<li>'."Periodo: ".$edu['periodo']. '</li>';
                echo '<li>'."Descripcion: ".$edu['descripcion']. '</li>';
                echo '<li>'."Sitio: ".$edu['sitioweb']. '</li>';
                echo '<br>';
              }

              ?>
          </article>
        </div>
        <div class="clear"></div>
      </section>
      <section id="Education">
        <div class="sectionTitle">
          <h1>Contribuciones</h1>
        </div>
        <div class="sectionContent">

          <article>
             <?php
              foreach ($Contributions as $cont) {
                echo '<li>'."Nombre: ".$cont['nombre']. '</li>';
                echo '<li>'."Descripcion: ".$cont['descripcion']. '</li>';
                echo '<li>'."URL: ".$cont['url']. '</li>';
                echo '<br>';
              
              }

              ?>
          </article>
        </div>
        <div class="clear"></div>
      </section>
      <section id="Education">
        <div class="sectionTitle">
          <h1>Hobbies</h1>
        </div>
        <div class="sectionContent">

          <article>
             <?php
              foreach ($Hobbies as $hobbie) {
                echo '<li>'."Nombre: ".$hobbie['nombre']. '</li>';
                echo '<li>'."Descripcion: ".$hobbie['iconclass']. '</li>';
                echo '<li>'."URL: ".$hobbie['url']. '</li>';
                echo '<br>';
              }

              ?>
          </article>
        </div>
        <div class="clear"></div>
      </section>

      <section id="Work">
        <div class="sectionTitle">
          <h1>Proyectos</h1>
        </div>

        <div class="sectionContent">
          <article>
          <?php
              foreach ($Projects as $pro) {
                echo '<li>'."Nombre: ".$pro['nombre']. '</li>';
                echo '<li>'."Plataforma: ".$pro['plataforma']. '</li>';
                echo '<li>'."Descripcion: ".$pro['descripcion']. '</li>';
                echo '<li>'."URL: ".$pro['url']. '</li>';
                echo '<br>';
              }


              ?>
          </article>

                             
        </div>         
        <div class="clear"></div>
      </section>
            <section id="Work">
        <div class="sectionTitle">
          <h1>Conocimientos</h1>
        </div>

        <div class="sectionContent">
          <article>
          <?php 
                  foreach ($Conocimientos as $conocimiento) {
                    echo '<p>'.$conocimiento['descripcion']. '</p>';
                  }


                   ?>
          </article>

                             
        </div>         
        <div class="clear"></div>
      </section>

    </div>
    </div>
  </div>
  <script type="text/javascript">

  </script>

</body>