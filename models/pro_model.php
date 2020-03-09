<?php 


class Proyectos
{
    private $coneccion;
    function __construct($coneccion)
    {
        $this->coneccion = $coneccion;
    }

    public function crear($id_usuario,$nombre,$plataforma,$descripcion,$url)
    {
    	try {
    		$this->coneccion->runStatement('INSERT INTO proyectos(id_usuario,nombre,plataforma,descripcion,url)
    		VALUES ($1,$2,$3,$4,$5)', [$id_usuario,$nombre,$plataforma,$descripcion,$url]);
    		
		} catch (Exception $e) {
    		throw new Exception($e->getMessage());
		}
        
    }
    public function read($id)
    {
        $params = [$id];
        $sql = "SELECT * FROM proyectos WHERE id_usuario=$1";
        return $this->coneccion->runQuery($sql, $params);
    }


    public function update($id,$nombre,$plataforma,$descripcion,$url)
    {
        try {
            $this->coneccion->runStatement('UPDATE proyectos SET nombre=$2,plataforma=$3,descripcion=$4,url=$5 WHERE id=$1', [$id,$nombre,$plataforma,$descripcion,$url]);
            
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        
    }
    public function delete($id)
    {
        $this->coneccion->runStatement('DELETE FROM proyectos
    WHERE id=$1', [$id]);
    }
}


 ?>