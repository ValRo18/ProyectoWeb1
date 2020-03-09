<?php 


class Educacion
{
    private $coneccion;
    function __construct($coneccion)
    {
        $this->coneccion = $coneccion;
    }

    public function crear($id_usuario,$titulo,$periodo,$descripcion,$sitioweb)
    {
    	try {
    		$this->coneccion->runStatement('INSERT INTO educacion(id_usuario,titulo,periodo,descripcion,sitioweb)
    		VALUES ($1,$2,$3,$4,$5)', [$id_usuario,$titulo,$periodo,$descripcion,$sitioweb]);
    		
		} catch (Exception $e) {
    		throw new Exception($e->getMessage());
		}
        
    }
    public function read($id)
    {
        $params = [$id];
        $sql = "SELECT * FROM educacion WHERE id_usuario=$1";
        return $this->coneccion->runQuery($sql, $params);
    }


    public function update($id,$titulo,$periodo,$descripcion,$sitioweb)
    {
        try {
            $this->coneccion->runStatement('UPDATE educacion SET titulo=$2,periodo=$3,descripcion=$4,sitioweb=$5 WHERE id=$1', [$id,$titulo,$periodo,$descripcion,$sitioweb]);
            
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        
    }
    public function delete($id)
    {
        $this->coneccion->runStatement('DELETE FROM educacion
    WHERE id=$1', [$id]);
    }
}


 ?>