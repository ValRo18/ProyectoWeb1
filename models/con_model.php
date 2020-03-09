<?php 


class Conocimientos
{
    private $coneccion;
    function __construct($coneccion)
    {
        $this->coneccion = $coneccion;
    }

    public function crear($id_usuario,$descripcion)
    {
    	try {
    		$this->coneccion->runStatement('INSERT INTO conocimientos(id_usuario,descripcion)
    		VALUES ($1,$2)', [$id_usuario,$descripcion]);
    		
		} catch (Exception $e) {
    		throw new Exception($e->getMessage());
		}
        
    }
    public function read($id)
    {
        $params = [$id];
        $sql = "SELECT * FROM conocimientos WHERE id_usuario=$1";
        return $this->coneccion->runQuery($sql, $params);
    }


    public function update($id,$descripcion)
    {
        try {
            $this->coneccion->runStatement('UPDATE conocimientos SET descripcion=$2 WHERE id=$1', [$id,$descripcion]);
            
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        
    }
    public function delete($id)
    {
        $this->coneccion->runStatement('DELETE FROM conocimientos
    WHERE id=$1', [$id]);
    }
}


 ?>