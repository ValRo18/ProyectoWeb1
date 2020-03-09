<?php 


class Usuario
{
    private $coneccion;
    function __construct($coneccion)
    {
        $this->coneccion = $coneccion;
    }

    public function login($email, $password)
    {
    	try {
    		return $this->coneccion->runQuery('SELECT * FROM usuarios WHERE email = $1 and password = md5($2)', [$email, $password]);
		} catch (Exception $e) {
    		throw new Exception($e->getMessage());
		}
        
    }
    public function crear($nombre,$apellidos,$cedula,$email,$fechaNacimiento,$password,
    	$descripcion,$puesto,$direccion,$telefono,$sitioweb,$github)
    {
    	try {
    		$this->coneccion->runStatement('INSERT INTO usuarios(nombre,apellidos,cedula,email,fechanacimiento,password,
    		descripcion,puesto,direccion,telefono,sitioweb,github)
    		VALUES ($1,$2,$3,$4,$5,md5($6),$7,$8,$9,$10,$11,$12)', [$nombre,$apellidos,$cedula,$email,$fechaNacimiento,$password,$descripcion,$puesto,$direccion,$telefono,$sitioweb,$github]);
    		
		} catch (Exception $e) {
    		throw new Exception($e->getMessage());
		}
        
    }
    public function read($id)
    {
        $params = [$id];
        $sql = "SELECT * FROM usuarios WHERE id=$1";
        return $this->coneccion->runQuery($sql, $params);
    }
    public function update($id,$nombre,$apellidos,$cedula,$email,$fechaNacimiento,$descripcion,$puesto,$direccion,$telefono,$sitioweb,$github,$foto)
    {
        try {
            $this->coneccion->runStatement('UPDATE usuarios SET nombre=$2,apellidos=$3,cedula=$4,email=$5,fechanacimiento=$6,
            descripcion=$7,puesto=$8,direccion=$9,telefono=$10,sitioweb=$11,github=$12,foto=$13 WHERE id=$1', [$id,$nombre,$apellidos,$cedula,$email,$fechaNacimiento,$descripcion,$puesto,$direccion,$telefono,$sitioweb,$github,$foto]);
            
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        
    }
}


 ?>
