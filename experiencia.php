<?php 
	require_once 'menu.php';

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if($_POST['agregar']){
		$id_usuario=$_SESSION['user_id'];
		$compannia = $_POST['compannia'] ?? '';
        $cargo = $_POST['cargo'] ?? '';
        $periodo = $_POST['periodo'] ?? '';
        $descripcion = $_POST['descripcion'] ?? '';
        $web = $_POST['web'] ?? '';
        $errors = '';
            try{
                $exp_model->crear($id_usuario,$compannia,$cargo,$periodo,$descripcion,$web);
                header('Location: /experiencia.php');
                exit();
            }catch(Exeption $e){
                $errors =$e->getMessage();
            }
        if($errors!=''){?>
            <p id="error"><?=$errors?></p>
    <?php  }
		}elseif($_POST['guardar']){
		$id=$_POST['id'] ?? 1;
		$compannia = $_POST['compannia'] ?? '';
        $cargo = $_POST['cargo'] ?? '';
        $periodo = $_POST['periodo'] ?? '';
        $descripcion = $_POST['descripcion'] ?? '';
        $web = $_POST['web'] ?? '';
        $errors = '';
            try{
                $exp_model->update($id,$compannia,$cargo,$periodo,$descripcion,$web);
                header('Location: /experiencia.php');
                exit();
            }catch(Exeption $e){
                $errors =$e->getMessage();
            }
        if($errors!=''){?>
            <p id="error"><?=$errors?></p>
    <?php  }
		}else{
		$id=$_POST['id'] ?? 1;
        $errors = '';
            try{
                $exp_model->delete($id);
                header('Location: /experiencia.php');
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
 	<title>Experiencia</title>
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
        <h1 class="mt-4">EXPERIENCIA</h1>
        <div id="separator"></div>
        <h5>Dínos dónde has trabajado</h5>
        <div class="container">
        <div class ="row justify-content-center pt-5 mt-5 mr-1">
        <div class="col-md-12">
        	<div class="from-group mx-sm-4">
        		<h2>Nueva Experiencia</h2>
                </div>
        	<form method="POST" class="form-agregar" action="/experiencia.php">
        		<div class="from-group mx-sm-4">
                    <label for="compannia">Compañia:</label>
                    <input type="text" class="form-control" name="compannia" id="compannia" value="" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="cargo">Cargo:</label>
                    <input type="text" class="form-control" name="cargo" id="cargo" value="" required>
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
    			$exps = $exp_model->read($_SESSION['user_id']);
    				if ($exps) { ?>
    					<div class="from-group mx-sm-4">
        					<h2>Tu Experiencia</h2>
                		</div>
    					<?php
        				foreach ($exps as $exp) { 
        					?>
        					<form method="POST" class="form-card" action="/experiencia.php" id="<?=$exp['id']?>">
        						<input type="numeric" name="id" value="<?=$exp['id']?>" style="visibility:hidden">
        		<div class="from-group mx-sm-4">
                    <label for="compannia">Compañia:</label>
                    <input type="text" class="form-control" name="compannia" id="compannia" value="<?=$exp['compannia']?>" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="cargo">Cargo:</label>
                    <input type="text" class="form-control" name="cargo" id="cargo" value="<?=$exp['cargo']?>" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="periodo">Periodo:</label>
                    <input type="text" class="form-control" name="periodo" id="periodo" value="<?=$exp['periodo']?>" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?=$exp['descripcion']?>" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="web">Sitio Web:</label>
                    <input type="text" class="form-control" name="web" id="web" value="<?=$exp['sitioweb']?>">
                </div>
                <div class="form-group mx-sm-4">
                	<input type="submit" class="btn btn-block guardar" name="guardar" value="GUARDAR">
                    
                    
                </div>
        	</form>
        	<div class="del-group mx-sm-4">
        		<input type="submit" class="btn eliminar" name="eliminar" value=" ✖ " onclick="sendForm(<?=$exp['id']?>)">
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