<?php 
	require_once 'menu.php';

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if($_POST['agregar']){
		$id_usuario=$_SESSION['user_id'];
        $descripcion = $_POST['descripcion'] ?? '';
        $errors = '';
            try{
                $con_model->crear($id_usuario,$descripcion);
                header('Location: /conocimientos.php');
                exit();
            }catch(Exeption $e){
                $errors =$e->getMessage();
            }
        if($errors!=''){?>
            <p id="error"><?=$errors?></p>
    <?php  }
		}elseif($_POST['guardar']){
		$id=$_POST['id'] ?? 1;
        $descripcion = $_POST['descripcion'] ?? '';
        $errors = '';
            try{
                $con_model->update($id,$descripcion);
                header('Location: /conocimientos.php');
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
                $con_model->delete($id);
                header('Location: /conocimientos.php');
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
 	<title>Conocimientos</title>
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
        <h1 class="mt-4">CONOCIMIENTOS</h1>
        <div id="separator"></div>
        <h5>Cuentanos tus conocimientos</h5>
        <div class="container">
        <div class ="row justify-content-center pt-5 mt-5 mr-1">
        <div class="col-md-12">
        	<div class="from-group mx-sm-4">
        		<h2>Nuevo Conocimiento</h2>
                </div>
        	<form method="POST" class="form-agregar" action="/conocimientos.php">
                <div class="from-group mx-sm-4">
                    <label for="descripcion">Descripcion:</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" ></textarea>
                </div>
                <div class="form-group mx-sm-4">
                    <input type="submit" class="btn btn-block agregar" name="agregar" value="AGREGAR">
                </div>
        	</form>
        	<?php
    			$cons = $con_model->read($_SESSION['user_id']);
    				if ($cons) { ?>
    					<div class="from-group mx-sm-4">
        					<h2>Tus Conocimientos</h2>
                		</div>
    					<?php
        				foreach ($cons as $con) { 
        					?>
        					<form method="POST" class="form-card" action="/conocimientos.php" id="<?=$con['id']?>">
        						<input type="numeric" name="id" value="<?=$con['id']?>" style="visibility:hidden">
        		<div class="from-group mx-sm-4">
                    <label for="descripcion">Descripcion:</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" ><?=$con['descripcion']?></textarea>
                </div>
                <div class="form-group mx-sm-4">
                	<input type="submit" class="btn btn-block guardar" name="guardar" value="GUARDAR">
                    
                    
                </div>
        	</form>
        	<div class="del-group mx-sm-4">
        		<input type="submit" class="btn eliminar" name="eliminar" value=" ✖ " onclick="sendForm(<?=$con['id']?>)">
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