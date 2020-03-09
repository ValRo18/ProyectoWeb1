<?php 
	require_once 'shared/guard.php';
	require_once 'shared/db.php';

	$user=$usr_model->read($_SESSION['user_id']);
	$imgdir=$user[0]['foto'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="css/simple-sidebar.css">
 </head>
 <body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="" id="sidebar-wrapper">
      <div class="sidebar-heading">
      	<?php if(is_file($imgdir)){ ?>
            			<img id="usrImg" src="<?=$imgdir?>">
            		<?php }else{ ?>
            			<img id="usrImg" src="imgs/userIcon.png">
            		<?php } ?>
      	<br>
      	<?=$_SESSION['user_name']?>
      	<p id="mail"><?=$_SESSION['user_email']?></p>
      	<a id="cerrar" href="logout.php">CERRAR SESIÓN</a>
  		</div>
      <br>
      <br>
      <div class="list-group list-group-flush">
      	<a href="crear.php" class="list-group-item"> ◉ CREAR</a>
        <a href="perfil.php" class="list-group-item"> ◉ PERFÍL</a>
        <a href="experiencia.php" class="list-group-item"> ◉ EXPERIENCIA</a>
        <a href="#" class="list-group-item"> ◉ EDUCACIÓN</a>
        <a href="#" class="list-group-item"> ◉ HABILIDADES</a>
        <a href="#" class="list-group-item"> ◉ CONOCIMIENTOS</a>
        <a href="#" class="list-group-item"> ◉ PROYECTOS</a>
        <a href="#" class="list-group-item"> ◉ HOBBIES</a>
        <a href="#" class="list-group-item"> ◉ CONTRIBUCIONES</a>
      </div>
    </div>

