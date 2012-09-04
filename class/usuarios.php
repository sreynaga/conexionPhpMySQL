<?php

require_once 'conexion.php';

class Usuarios {
    
    private $users;
    
    public function __construct() {
        $this->users = array();
    }
    
    public function getUsuarios() {
        $query = "SELECT * FROM usuarios";
        $res = mysql_query($query,Conexion::con());
        
        while ($reg = mysql_fetch_assoc($res)) {
            $this->users[] = $reg;
        }
        
        return $this->users;
    }
    
}

?>