<?php
require_once '../shared/Barra.php';
require_once 'cargarPlantilla.php';
?>

<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width"/>
<meta name="description" content="The Curriculum Vitae"/>
<meta charset="UTF-8"> 

<link rel="stylesheet" href="../css/CV7.css">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

</head>
<div class="container">
<body id="top">
<div id="cv" class="instaFade">
	<div class="mainDetails">
		<div id="headshot" class="quickFade">
			<img src="<?php echo $imagen; ?>" alt="Alan Smith" />
		</div>
		
		<div id="name">
          <?php echo '<h1>'.$nombre."<br>".$apellidos. '</h1>'?>
          <?php echo '<h2>'.$posicion. '</h2>'?>
		</div>
		<div id="contactDetails" class="quickFade delayFour">
			<?php echo '<p>'.$correo. '</p>'?>
            <?php echo '<p>'.$telefono. '</p>'?>
            <?php echo '<p>'."Github:".$github. '</p>'?>
            <?php echo '<p>'."Website:".$website. '</p>'?>
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="mainArea" class="quickFade delayFive">
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Informacion Personal</h1>
				</div>
				
				<div class="sectionContent">

            		<?php echo '<p>'."Dirección:".$city. '</p>'?>
            		<?php echo '<p>'."F. Nacimiento:".$year. '</p>'?>	
              		<?php echo '<p>'.$About. '</p>'?>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		
		
		<section>
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
		
		
		<section>
			<div class="sectionTitle">
				<h1>Habilidades</h1>
			</div>
			
			<div class="sectionContent">
				<ul class="keySkills">
					<?php 
                  foreach ($Skills as $skill) {
                    echo '<li>'."Nombre: ".$skill['nombre'].", Nivel: ".$skill['nivel'].'</li>';
                      }
                   ?>
				</ul>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
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
		</section>
		<div class="clear"></div>
		<section>
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
		</section>
		<div class="clear"></div>
		<section>
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
		</section>
		<section>
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
		</section>
		<section>
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
		</section>
			<div class="clear"></div>
		</section>
		
	</div>
</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>