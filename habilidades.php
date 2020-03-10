<?php 
	require_once 'menu.php';

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if($_POST['agregar']){
		$id_usuario=$_SESSION['user_id'];
		$nombre = $_POST['nombre'] ?? '';
        $nivel = $_POST['nivel'] ?? '';
        $errors = '';
            try{
                $hab_model->crear($id_usuario,$nombre,$nivel);
                header('Location: /habilidades.php');
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
        $nivel = $_POST['nivel'] ?? '';
        $errors = '';
            try{
                $hab_model->update($id,$nombre,$nivel);
                header('Location: /habilidades.php');
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
                $hab_model->delete($id);
                header('Location: /habilidades.php');
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
 	<title>Habilidades</title>
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
        <h1 class="mt-4">HABILIDÁDES</h1>
        <div id="separator"></div>
        <h5>Agrega tus habilidades</h5>
        <div class="container">
        <div class ="row justify-content-center pt-5 mt-5 mr-1">
        <div class="col-md-12">
        	<div class="from-group mx-sm-4">
        		<h2>Nueva Habilidad</h2>
                </div>
        	<form method="POST" class="form-agregar" action="/habilidades.php">
        		<div class="from-group mx-sm-4">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="nivel">Nivel:</label>
                    <input type="numeric" class="form-control" name="nivel" id="nivel" value="" required>
                </div>
                <div class="form-group mx-sm-4">
                    <input type="submit" class="btn btn-block agregar" name="agregar" value="AGREGAR">
                </div>
        	</form>
        	<?php
    			$habs = $hab_model->read($_SESSION['user_id']);
    				if ($habs) { ?>
    					<div class="from-group mx-sm-4">
        					<h2>Tus Habilidádes</h2>
                		</div>
    					<?php
        				foreach ($habs as $hab) { 
        					?>
        					<form method="POST" class="form-card" action="/habilidades.php" id="<?=$hab['id']?>">
        						<input type="numeric" name="id" value="<?=$hab['id']?>" style="visibility:hidden">
        		<div class="from-group mx-sm-4">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?=$hab['nombre']?>" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="nivel">Nivel:</label>
                    <input type="numeric" class="form-control" name="nivel" id="nivel" value="<?=$hab['nivel']?>" required>
                </div>
              <div class="form-group mx-sm-4">
                	<input type="submit" class="btn btn-block guardar" name="guardar" value="GUARDAR">
                    
                    
                </div>
        	</form>
        	<div class="del-group mx-sm-4">
        		<input type="submit" class="btn eliminar" name="eliminar" value=" ✖ " onclick="sendForm(<?=$hab['id']?>)">
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