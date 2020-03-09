<?php 


class Contribuciones
{
    private $coneccion;
    function __construct($coneccion)
    {
        $this->coneccion = $coneccion;
    }

    public function crear($id_usuario,$nombre,$descripcion,$url)
    {
        try {
            $this->coneccion->runStatement('INSERT INTO contribuciones(id_usuario,nombre,descripcion,url)
            VALUES ($1,$2,$3,$4)', [$id_usuario,$nombre,$descripcion,$url]);
            
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        
    }
    public function read($id)
    {
        $params = [$id];
        $sql = "SELECT * FROM contribuciones WHERE id_usuario=$1";
        return $this->coneccion->runQuery($sql, $params);
    }

    public function update($id,$nombre,$descripcion,$url)
    {
        try {
            $this->coneccion->runStatement('UPDATE contribuciones SET nombre=$2,descripcion=$3,url=$4 WHERE id=$1', [$id,$nombre,$descripcion,$url]);
            
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        
    }
    public function delete($id)
    {
        $this->coneccion->runStatement('DELETE FROM contribuciones
    WHERE id=$1', [$id]);
    }
}


 ?>