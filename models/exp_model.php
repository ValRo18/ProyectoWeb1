<?php 


class Experiencia
{
    private $coneccion;
    function __construct($coneccion)
    {
        $this->coneccion = $coneccion;
    }

    public function crear($id_usuario,$compannia,$cargo,$periodo,$descripcion,$sitioweb)
    {
    	try {
    		$this->coneccion->runStatement('INSERT INTO experiencia(id_usuario,compannia,cargo,periodo,descripcion,sitioweb)
    		VALUES ($1,$2,$3,$4,$5,$6)', [$id_usuario,$compannia,$cargo,$periodo,$descripcion,$sitioweb]);
    		
		} catch (Exception $e) {
    		throw new Exception($e->getMessage());
		}
        
    }
    public function read($id)
    {
        $params = [$id];
        $sql = "SELECT * FROM experiencia WHERE id_usuario=$1";
        return $this->coneccion->runQuery($sql, $params);
    }


    public function update($id,$compannia,$cargo,$periodo,$descripcion,$sitioweb)
    {
        try {
            $this->coneccion->runStatement('UPDATE experiencia SET compannia=$2,cargo=$3,periodo=$4,descripcion=$5,sitioweb=$6 WHERE id=$1', [$id,$compannia,$cargo,$periodo,$descripcion,$sitioweb]);
            
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        
    }
    public function delete($id)
    {
        $this->coneccion->runStatement('DELETE FROM experiencia
    WHERE id=$1', [$id]);
    }
}


 ?>