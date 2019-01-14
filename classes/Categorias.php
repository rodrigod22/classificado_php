<?php

class Categorias {
   
    public function getLista(){
        
        $array = array();
        global $pdo;
        $sql = $pdo->prepare("SELECT * FROM categorias");
        $sql->execute();
        if($sql->rowCount() > 0 ){
            $array = $sql->fetchAll();
        }
        return $array;
    }
    
}
