<?php
require_once './shared/db.php';
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/Registro.css">
    <title>Registro</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'] ?? '';
        $apellidos = $_POST['apellidos'] ?? '';
        $cedula= $_POST['cedula'] ?? 1;
        $email = $_POST['email'] ?? '';
        $fechaNacimiento = $_POST['fechanacimiento'] ?? '';
        $password = $_POST['password'] ?? '';
        $repassword = $_POST['repassword'] ?? '';
        $descripcion = $_POST['descripcion'] ?? '';
        $puesto = $_POST['puesto'] ?? '';
        $direccion= $_POST['direccion'] ?? '';
        $telefono = $_POST['telefono'] ?? '';
        $sitioweb = $_POST['web'] ?? '';
        $github = $_POST['git'] ?? '';
        $errors = '';
        if($email!=''||$password!=''){
            if($password==$repassword){
            try{
                $usr_model->crear($nombre,$apellidos,$cedula,$email,$fechaNacimiento,$password,$descripcion,$puesto,$direccion,$telefono,$sitioweb,$github);
            header('Location: /index.php');
            exit();
            }catch(Exeption $e){
                $errors =$e->getMessage();
            }
            
            }else{
                $errors = 'Las contraseñas no coinciden';
            }
        }else{
            $errors = 'Debe digitar los espacios requeridos';
        }
        if($errors!=''){?>
            <p id="error"><?=$errors?></p>
    <?php  }
    }
 ?>


    <div class="container">
        <div class ="row justify-content-center pt-5 mt-5 mr-1">
        <div class="col-md-12">
            <form method="POST" action="/register.php">
                
                <div class="form-group text-center">
                    <h1>REGISTRO</h1>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" class="form-control" name="apellidos" id="apellidos" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="cedula">Numero de ID (Cédula):</label>
                    <input type="number" class="form-control" name="cedula" id="cedula" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="email">Correo electrónico:</label>
                    <input type="text" class="form-control" name="email" id="email" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="fechanacimiento">Fecha de nacimiento:</label>
                    <input type="date" class="form-control" name="fechanacimiento" id="fechanacimiento" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="password">Contraseña:</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="repassword">Repetir contraseña:</label>
                    <input type="password" class="form-control" name="repassword" id="repassword" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="descripcion">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" class="form-control"></textarea>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="puesto">Puesto:</label>
                    <input type="text" class="form-control" name="puesto" id="puesto">
                </div>
                <div class="from-group mx-sm-4">
                    <label for="direccion">Direccion:</label>
                    <input type="text" class="form-control" name="direccion" id="direccion">
                </div>
                <div class="from-group mx-sm-4">
                    <label for="telefono">Teléfono:</label>
                    <input type="number" class="form-control" name="telefono" id="telefono">
                </div>
                <div class="from-group mx-sm-4">
                    <label for="web">Sitio web:</label>
                    <input type="text" class="form-control" name="web" id="web">
                </div>
                <div class="from-group mx-sm-4">
                    <label for="git">Cuenta de GitHub:</label>
                    <input type="text" class="form-control" name="git" id="git">
                </div>
                <div class="form-group mx-sm-4">
                    <input type="submit" class="btn btn-block ingresar" value="GUARDAR">
                </div>
                <div class="form-group mx-sm-4">
                    <p>¿Ya tienes una cuenta? <a href="index.php">Inicia Sesión</a></p>
                </div>

            </form>
            
            
        </div>

    </div>
    </div>

</body>
</html>
