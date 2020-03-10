<?php 
	require_once 'menu.php';

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if($_POST['agregar']){
		$id_usuario=$_SESSION['user_id'];
		$nombre = $_POST['nombre'] ?? '';
        $plataforma = $_POST['plataforma'] ?? '';
        $descripcion = $_POST['descripcion'] ?? '';
        $url = $_POST['url'] ?? '';
        $errors = '';
            try{
                $pro_model->crear($id_usuario,$nombre,$plataforma,$descripcion,$url);
                header('Location: /proyectos.php');
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
        $plataforma = $_POST['plataforma'] ?? '';
        $descripcion = $_POST['descripcion'] ?? '';
        $url = $_POST['url'] ?? '';
        $errors = '';
            try{
                $pro_model->update($id,$nombre,$plataforma,$descripcion,$url);
                header('Location: /proyectos.php');
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
                $pro_model->delete($id);
                header('Location: /proyectos.php');
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
 	<title>Proyectos</title>
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
        <h1 class="mt-4">PROYECTOS</h1>
        <div id="separator"></div>
        <h5>Coloca tus mejores proyectos</h5>
        <div class="container">
        <div class ="row justify-content-center pt-5 mt-5 mr-1">
        <div class="col-md-12">
        	<div class="from-group mx-sm-4">
        		<h2>Nuevo Proyecto</h2>
                </div>
        	<form method="POST" class="form-agregar" action="/proyectos.php">
        		<div class="from-group mx-sm-4">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="plataforma">Plataforma:</label>
                    <input type="text" class="form-control" name="plataforma" id="plataforma" value="" required>
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
    			$pros = $pro_model->read($_SESSION['user_id']);
    				if ($pros) { ?>
    					<div class="from-group mx-sm-4">
        					<h2>Tus Proyectos</h2>
                		</div>
    					<?php
        				foreach ($pros as $pro) { 
        					?>
        					<form method="POST" class="form-card" action="/proyectos.php" id="<?=$pro['id']?>">
        						<input type="numeric" name="id" value="<?=$pro['id']?>" style="visibility:hidden">
        		<div class="from-group mx-sm-4">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?=$pro['nombre']?>" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="plataforma">Plataforma:</label>
                    <input type="text" class="form-control" name="plataforma" id="plataforma" value="<?=$pro['plataforma']?>" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?=$pro['descripcion']?>" required>
                </div>
                <div class="from-group mx-sm-4">
                    <label for="url">URL:</label>
                    <input type="text" class="form-control" name="url" id="url" value="<?=$pro['url']?>">
                </div>
                <div class="form-group mx-sm-4">
                	<input type="submit" class="btn btn-block guardar" name="guardar" value="GUARDAR">
                    
                    
                </div>
        	</form>
        	<div class="del-group mx-sm-4">
        		<input type="submit" class="btn eliminar" name="eliminar" value=" ✖ " onclick="sendForm(<?=$pro['id']?>)">
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