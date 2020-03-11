<?php 
	require_once '../shared/db.php';

	$usuario=$usr_model->read($_SESSION['user_id']);


	$imagen =$usuario[0]['foto'] ?? '';
	if($imagen!=''){
		$imagen="../".$imagen;
	}else{
		$imagen="../imgs/userIcon.png";
	}
	
  	$nombre=$usuario[0]['nombre'] ?? '';
  	$apellidos =$usuario[0]['apellidos'] ?? '';
  	$year =$usuario[0]['fechanacimiento'] ?? '';
  	$correo =$usuario[0]['email'] ?? '';
  	$telefono=$usuario[0]['telefono'] ?? '';
  	$website= $usuario[0]['sitioweb'] ?? '';
  	$github=$usuario[0]['github'] ?? '';
  	$city=$usuario[0]['direccion'] ?? '';
  	$posicion = $usuario[0]['puesto'] ?? 'puesto';
  	$About=$usuario[0]['descripcion'] ?? '';

  	$Experience=$exp_model->read($_SESSION['user_id']);

  	$Education=$edu_model->read($_SESSION['user_id']);

  	$Skills=$hab_model->read($_SESSION['user_id']);

  	$Conocimientos=$con_model->read($_SESSION['user_id']);

  	$Projects=$pro_model->read($_SESSION['user_id']);

  	$Hobbies=$hob_model->read($_SESSION['user_id']);
  	
  	$Contributions=$cont_model->read($_SESSION['user_id']);
  	

 ?>