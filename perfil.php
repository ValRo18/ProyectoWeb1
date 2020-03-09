<?php 
	require_once 'menu.php';

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if($_POST['guardar']){
		$id=$_SESSION['user_id'];
        $nombre = $_POST['nombre'] ?? '';
        $apellidos = $_POST['apellidos'] ?? '';
        $cedula= $_POST['cedula'] ?? 1;
        $email = $_POST['email'] ?? '';
        $fechaNacimiento = $_POST['fechanacimiento'] ?? '';
        $descripcion = $_POST['descripcion'] ?? '';
        $puesto = $_POST['puesto'] ?? '';
        $direccion= $_POST['direccion'] ?? '';
        $telefono = $_POST['telefono'] ?? '';
        $sitioweb = $_POST['web'] ?? '';
        $github = $_POST['git'] ?? '';
        $foto=$imgdir;
        $errors = '';

        if($_FILES['imagen']['tmp_name']){
        	$ruta="imgs/profile_imgs";
        	$archivo=$_FILES['imagen']['tmp_name'];
        	$nombreArchivo=$_FILES['imagen']['name'];
        	$ruta=$ruta."/".$nombreArchivo;
        	move_uploaded_file($archivo, $ruta);
        	$foto=$ruta;
        }
        	

            try{
                $usr_model->update($id,$nombre,$apellidos,$cedula,$email,$fechaNacimiento,$descripcion,$puesto,$direccion,$telefono,$sitioweb,$github,$foto);
                header('Location: /perfil.php');
                exit();
            }catch(Exeption $e){
                $errors =$e->getMessage();
            }
        if($errors!=''){?>
            <p id="error"><?=$errors?></p>
    <?php  }
		}
    }

	$user = $usr_model->read($_SESSION['user_id']);
    if ($user) {
        $nombre = $user[0]['nombre'] ?? '';
        $apellidos = $user[0]['apellidos'] ?? '';
        $cedula= $user[0]['cedula'] ?? 1;
        $email = $user[0]['email'] ?? '';
        $fechaNacimiento = $user[0]['fechanacimiento'] ?? '';
        $password = $user[0]['password'] ?? '';
        $descripcion = $user[0]['descripcion'] ?? '';
        $puesto = $user[0]['puesto'] ?? '';
        $direccion= $user[0]['direccion'] ?? '';
        $telefono = $user[0]['telefono'] ?? '';
        $sitioweb = $user[0]['sitioweb'] ?? '';
        $github = $user[0]['github'] ?? '';
        $imgdir =$user[0]['foto'] ?? '';
    }
    ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Perfíl</title>
 	<link rel="stylesheet" type="text/css" href="css/CRUD.css">
 </head>
 <body>


 	<div id="page-content-wrapper">

      <div class="container-fluid">
        <h1 class="mt-4">PERFÍL</h1>
        <div id="separator"></div>
        <h5>Completa tu información personal</h5>
      </div>
      <div class="container">
        <div class ="row justify-content-center pt-5 mt-5 mr-1">
        <div class="col-md-12">
            <form method="POST" action="/perfil.php" enctype="multipart/form-data">
            	<div id="photo-container">
            		<?php if(is_file($imgdir)){ ?>
            			<img id="usr-photo" src="<?=$imgdir?>">
            		<?php }else{ ?>
            			<img id="usr-photo" src="imgs/userIcon.png">
            		<?php } ?>
            	</div>
            	
            	<div class="from-group mx-sm-4">
                    <label for="imagen">Seleccionar Imagen:</label>
                    <input type="file" class="form-control" name="imagen" id="imagen">
                </div>
                <div class="from-group mx-sm-4">

                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?=$nombre?>" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" class="form-control" name="apellidos" id="apellidos" value="<?=$apellidos?>" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="cedula">Numero de ID (Cédula):</label>
                    <input type="number" class="form-control" name="cedula" id="cedula" value="<?=$cedula?>" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="email">Correo electrónico:</label>
                    <input type="text" class="form-control" name="email" id="email" value="<?=$email?>" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="fechanacimiento">Fecha de nacimiento:</label>
                    <input type="date" class="form-control" name="fechanacimiento" id="fechanacimiento" value="<?=$fechaNacimiento?>" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="descripcion">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" ><?=$descripcion?></textarea>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="puesto">Puesto:</label>
                    <input type="text" class="form-control" name="puesto" id="puesto" value="<?=$puesto?>">
                </div>
                <div class="from-group mx-sm-4">
                    <label for="direccion">Direccion:</label>
                    <input type="text" class="form-control" name="direccion" id="direccion" value="<?=$direccion?>">
                </div>
                <div class="from-group mx-sm-4">
                    <label for="telefono">Teléfono:</label>
                    <input type="number" class="form-control" name="telefono" id="telefono" value="<?=$telefono?>">
                </div>
                <div class="from-group mx-sm-4">
                    <label for="web">Sitio web:</label>
                    <input type="text" class="form-control" name="web" id="web" value="<?=$sitioweb?>">
                </div>
                <div class="from-group mx-sm-4">
                    <label for="git">Cuenta de GitHub:</label>
                    <input type="text" class="form-control" name="git" id="git" value="<?=$github?>">
                </div>
                <div class="form-group mx-sm-4">
                    <input type="submit" class="btn btn-block ingresar" name="guardar" value="GUARDAR">
                </div>

            </form>
            
            
        </div>

    </div>
    </div>
    </div>
 
 </div>
 </body>
 </html>