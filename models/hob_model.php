<?php 


class Hobbies
{
    private $coneccion;
    function __construct($coneccion)
    {
        $this->coneccion = $coneccion;
    }

    public function crear($id_usuario,$nombre,$iconclass,$url)
    {
    	try {
    		$this->coneccion->runStatement('INSERT INTO hobbies(id_usuario,nombre,iconclass,url)
    		VALUES ($1,$2,$3,$4)', [$id_usuario,$nombre,$iconclass,$url]);
    		
		} catch (Exception $e) {
    		throw new Exception($e->getMessage());
		}
        
    }
    public function read($id)
    {
        $params = [$id];
        $sql = "SELECT * FROM hobbies WHERE id_usuario=$1";
        return $this->coneccion->runQuery($sql, $params);
    }


    public function update($id,$nombre,$iconclass,$url)
    {
        try {
            $this->coneccion->runStatement('UPDATE hobbies SET nombre=$2,iconclass=$3,url=$4 WHERE id=$1', [$id,$nombre,$iconclass,$url]);
            
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        
    }
    public function delete($id)
    {
        $this->coneccion->runStatement('DELETE FROM hobbies
    WHERE id=$1', [$id]);
    }
}


 ?>