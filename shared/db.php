<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/models/usuario.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/exp_model.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/edu_model.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/con_model.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/pro_model.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/hob_model.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/hab_model.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/cont_model.php';

require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

use crojasaragonez\UtnDb\PgConnection;

$con = new PgConnection('postgres', 'Postgres', 'proyectoweb1', 5432, 'localhost');
$con->connect();

$usr_model=new Usuario($con);
$exp_model=new Experiencia($con);
$edu_model=new Educacion($con);
$hab_model=new Habilidades($con);
$con_model=new Conocimientos($con);
$pro_model=new Proyectos($con);
$hob_model=new Hobbies($con);
$cont_model=new Contribuciones($con);


/*
$sql = "INSERT INTO users(email, password) VALUES ($1, md5($2))";
$con->runStatement($sql, ['estudiante@est.utn.ac.cr', '12345']);

$results = $con->runQuery('SELECT * FROM users WHERE id >= $1', [1]);

var_dump($results);

$con->disconnect();
*/