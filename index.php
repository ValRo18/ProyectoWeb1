<?php
require_once './shared/db.php';
require_once './shared/sessions.php';
?>
<!DOCTYPE html> 
 <html>
 <head>
 	<title>Login</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="css/Login.css">
 </head>
<body>

  <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $errors = '';
        try{
        	$results = $usr_model->login($email, $password);
        }catch(Exeption $e){
                $errors =$e->getMessage();
        }
        if ($results) {
            $_SESSION['user_id'] = $results[0]['id'];
            $_SESSION['user_email'] = $results[0]['email'];
            $_SESSION['user_name'] = $results[0]['nombre'];
            header('Location: /crear.php');
            exit();
        } elseif ($email != '' || $password != '') {
            $errors = 'Las credenciales no coinciden con ninguna cuenta';
        }else{
        	$errors ='Debe digitar unas credenciales validas';
        }
        if($errors!=''){?>
            <p id="error"><?=$errors?></p>
    <?php  }
    }
 ?>
 <div class="container">
 	
 	<div class ="row justify-content-center pt-5 mt-5 mr-1">
    	<div class="col-md-8">
    		<form method="POST" action="/">
    			
    			<div class="form-group text-center">
    				<h1>INICIAR SESIÓN</h1>
    			</div>
    			<div class="from-group mx-sm-4">
    				<input type="text" class="form-control" name="email" placeholder="CORREO ELECTRÓNICO">
    			</div>
    			<div class="from-group mx-sm-4">
    				<input type="password" class="form-control" name="password" placeholder="CONTRASEÑA">
    			</div>
    			<div class="form-group mx-sm-4">
    				<input type="submit" class="btn btn-block ingresar" value="INGRESAR">
    			</div>
    			<div class="form-group mx-sm-4">
    				<p>¿No tienes una cuenta? <a href="register.php">Registrate</a></p>
    			</div>

    		</form>
    		
    		
    	</div>

    </div>

 </div>
    
 
 </body>
 </html>

