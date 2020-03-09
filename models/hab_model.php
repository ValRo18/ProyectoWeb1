<?php 


class Habilidades
{
    private $coneccion;
    function __construct($coneccion)
    {
        $this->coneccion = $coneccion;
    }

    public function crear($id_usuario,$nombre,$nivel)
    {
    	try {
    		$this->coneccion->runStatement('INSERT INTO habilidades(id_usuario,nombre,nivel)
    		VALUES ($1,$2,$3)', [$id_usuario,$nombre,$nivel]);
    		
		} catch (Exception $e) {
    		throw new Exception($e->getMessage());
		}
        
    }

    public function read($id)
    {
        $params = [$id];
        $sql = "SELECT * FROM habilidades WHERE id_usuario=$1";
        return $this->coneccion->runQuery($sql, $params);
    }


    public function update($id,$nombre,$nivel)
    {
        try {
            $this->coneccion->runStatement('UPDATE habilidades SET nombre=$2,nivel=$3 WHERE id=$1', [$id,$nombre,$nivel]);
            
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        
    }
    public function delete($id)
    {
        $this->coneccion->runStatement('DELETE FROM habilidades
    WHERE id=$1', [$id]);
    }
}


 ?>