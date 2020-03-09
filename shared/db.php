<?php
require_once './models/usuario.php';
require_once './models/exp_model.php';
require_once 'vendor/autoload.php';

use crojasaragonez\UtnDb\PgConnection;

$con = new PgConnection('postgres', 'Postgres', 'proyectoweb1', 5432, 'localhost');
$con->connect();

$usr_model=new Usuario($con);
$exp_model=new Experiencia($con);

/*
$sql = "INSERT INTO users(email, password) VALUES ($1, md5($2))";
$con->runStatement($sql, ['estudiante@est.utn.ac.cr', '12345']);

$results = $con->runQuery('SELECT * FROM users WHERE id >= $1', [1]);

var_dump($results);

$con->disconnect();
*/