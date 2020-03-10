<?php 
	require_once 'menu.php';

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if($_POST['agregar']){
		$id_usuario=$_SESSION['user_id'];
		$nombre = $_POST['nombre'] ?? '';
        $descripcion = $_POST['descripcion'] ?? '';
        $url = $_POST['url'] ?? '';
        $errors = '';
            try{
                $hob_model->crear($id_usuario,$nombre,$descripcion,$url);
                header('Location: /hobbies.php');
                exit();
            }catch(Exeption $e){
                $errors =$e->getMessage();
            }
        if($errors!=''){?>
            <p id="error"><?=$errors?></p>
    <?php  }
		}elseif($_POST['guardar']){
		$id=$_POST['id'] ?? 0;
		$nombre = $_POST['nombre'] ?? '';
        $descripcion = $_POST['descripcion'] ?? '';
        $url = $_POST['url'] ?? '';
        $errors = '';
            try{
                $hob_model->update($id,$nombre,$descripcion,$url);
                header('Location: /hobbies.php');
                exit();
            }catch(Exeption $e){
                $errors =$e->getMessage();
            }
        if($errors!=''){?>
            <p id="error"><?=$errors?></p>
    <?php  }
		}else{
		$id=$_POST['id'] ?? 0;
        $errors = '';
            try{
                $hob_model->delete($id);
                header('Location: /hobbies.php');
                exit();
            }catch(Exeption $e){
                $errors =$e->getMessage();
            }
        if($errors!=''){?>
            <p id="error"><?=$errors?></p>
    <?php  }
		}
    }
    
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Hobbies</title>
 	 	<link rel="stylesheet" type="text/css" href="css/CRUD.css">

 </head>
 <body>
 	<script type="text/javascript">
 		function sendForm(idForm) {
  			if (confirm("¿Desea eliminar el registro?")) {
    			document.getElementById(idForm+"").submit();
  			}
		}
 	</script>
 <div id="page-content-wrapper">

      <div class="container-fluid">
        <h1 class="mt-4">HOBBIES</h1>
        <div id="separator"></div>
        <h5>¿Cuáles son tus hobbies?</h5>
        <div class="container">
        <div class ="row justify-content-center pt-5 mt-5 mr-1">
        <div class="col-md-12">
        	<div class="from-group mx-sm-4">
        		<h2>Nuevo Hobbie</h2>
                </div>
        	<form method="POST" class="form-agregar" action="/hobbies.php">
        		<div class="from-group mx-sm-4">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" value="" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="url">URL:</label>
                    <input type="text" class="form-control" name="url" id="url" value="">
                </div>
                <div class="form-group mx-sm-4">
                    <input type="submit" class="btn btn-block agregar" name="agregar" value="AGREGAR">
                </div>
        	</form>
        	<?php
    			$hobs = $hob_model->read($_SESSION['user_id']);
    				if ($hobs) { ?>
    					<div class="from-group mx-sm-4">
        					<h2>Tus Hobbies</h2>
                		</div>
    					<?php
        				foreach ($hobs as $hob) { 
        					?>
        					<form method="POST" class="form-card" action="/hobbies.php" id="<?=$hob['id']?>">
        						<input type="numeric" name="id" value="<?=$hob['id']?>" style="visibility:hidden">
        		<div class="from-group mx-sm-4">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?=$hob['nombre']?>" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?=$hob['iconclass']?>" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="url">URL:</label>
                    <input type="text" class="form-control" name="url" id="url" value="<?=$hob['url']?>">
                </div>
                <div class="form-group mx-sm-4">
                	<input type="submit" class="btn btn-block guardar" name="guardar" value="GUARDAR">
                    
                    
                </div>
        	</form>
        	<div class="del-group mx-sm-4">
        		<input type="submit" class="btn eliminar" name="eliminar" value=" ✖ " onclick="sendForm(<?=$hob['id']?>)">
            </div>
        	
            			
        				<?php  }
    				}
    		?>
        </div>
    	</div>
    </div>
        
        
        
      </div>
    </div>
</div>
 </body>
 </html>