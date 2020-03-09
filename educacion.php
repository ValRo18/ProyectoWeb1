<?php 
	require_once 'menu.php';

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if($_POST['agregar']){
		$id_usuario=$_SESSION['user_id'];
		$titulo = $_POST['titulo'] ?? '';
        $periodo = $_POST['periodo'] ?? '';
        $descripcion = $_POST['descripcion'] ?? '';
        $web = $_POST['web'] ?? '';
        $errors = '';
            try{
                $edu_model->crear($id_usuario,$titulo,$periodo,$descripcion,$web);
                header('Location: /educacion.php');
                exit();
            }catch(Exeption $e){
                $errors =$e->getMessage();
            }
        if($errors!=''){?>
            <p id="error"><?=$errors?></p>
    <?php  }
		}elseif($_POST['guardar']){
		$id=$_POST['id'] ?? 1;
		$titulo = $_POST['titulo'] ?? '';
        $periodo = $_POST['periodo'] ?? '';
        $descripcion = $_POST['descripcion'] ?? '';
        $web = $_POST['web'] ?? '';
        $errors = '';
            try{
                $edu_model->update($id,$titulo,$periodo,$descripcion,$web);
                header('Location: /educacion.php');
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
                $edu_model->delete($id);
                header('Location: /educacion.php');
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
 	<title>Educacion</title>
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
        <h1 class="mt-4">EDUCACIÓN</h1>
        <div id="separator"></div>
        <h5>Añade tus títulos académicos</h5>
        <div class="container">
        <div class ="row justify-content-center pt-5 mt-5 mr-1">
        <div class="col-md-12">
        	<div class="from-group mx-sm-4">
        		<h2>Nuevo Título</h2>
                </div>
        	<form method="POST" class="form-agregar" action="/educacion.php">
        		<div class="from-group mx-sm-4">
                    <label for="compannia">Titulo:</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" value="" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="periodo">Periodo:</label>
                    <input type="text" class="form-control" name="periodo" id="periodo" value="" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" value="" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="web">Sitio Web:</label>
                    <input type="text" class="form-control" name="web" id="web" value="">
                </div>
                <div class="form-group mx-sm-4">
                    <input type="submit" class="btn btn-block agregar" name="agregar" value="AGREGAR">
                </div>
        	</form>
        	<?php
    			$edus = $edu_model->read($_SESSION['user_id']);
    				if ($edus) { ?>
    					<div class="from-group mx-sm-4">
        					<h2>Tus Títulos</h2>
                		</div>
    					<?php
        				foreach ($edus as $edu) { 
        					?>
        					<form method="POST" class="form-card" action="/educacion.php" id="<?=$edu['id']?>">
        						<input type="numeric" name="id" value="<?=$edu['id']?>" style="visibility:hidden">
        		<div class="from-group mx-sm-4">
                    <label for="compannia">Título:</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" value="<?=$edu['titulo']?>" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="periodo">Periodo:</label>
                    <input type="text" class="form-control" name="periodo" id="periodo" value="<?=$edu['periodo']?>" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?=$edu['descripcion']?>" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="web">Sitio Web:</label>
                    <input type="text" class="form-control" name="web" id="web" value="<?=$edu['sitioweb']?>">
                </div>
                <div class="form-group mx-sm-4">
                	<input type="submit" class="btn btn-block guardar" name="guardar" value="GUARDAR">
                    
                    
                </div>
        	</form>
        	<div class="del-group mx-sm-4">
        		<input type="submit" class="btn eliminar" name="eliminar" value=" ✖ " onclick="sendForm(<?=$edu['id']?>)">
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