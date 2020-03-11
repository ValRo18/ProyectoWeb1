<?php 
	require_once 'menu.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Crear</title>
	<link rel="stylesheet" type="text/css" href="css/CRUD.css">
</head>
<body>

	<div id="page-content-wrapper">

      <div class="container-fluid">
        <h1 class="mt-4">CREAR</h1>
        <div id="separator"></div>
        <h5>Asegúrate de haber completado tu información y elíje una plantilla para crear tu currículum: </h5>
        
        <div class="img-container">
    		<img class="card-img-top" src="./imgs/CV1.png" alt="CV 1"onclick = "location='plantillas/CV1.php'">
    		<img class="card-img-top" src="./imgs/CV3.png" alt="CV3" onclick = "location='plantillas/CV3.php'">
    		<img class="card-img-top" src="./imgs/CV4.png" alt="CV4" onclick = "location='plantillas/CV4.php'">
    		<img class="card-img-top" src="./imgs/CV5.png"  onclick = "location='plantillas/CV5.php'">
    		<img class="card-img-top" src="./imgs/CV6.png"  onclick = "location='plantillas/CV6.php'">
    		<img class="card-img-top" src="./imgs/CV7.png" alt="CV7" onclick = "location='plantillas/CV7.php'">
    		<img class="card-img-top" src="./imgs/CV8.png" onclick = "location='plantillas/CV8.php'">
    		<img class="card-img-top" src="./imgs/CV2.png" alt="CV2" onclick = "location='plantillas/CV9.php'">

  		</div>
      </div>
    </div>
</div>

</body>
</html>