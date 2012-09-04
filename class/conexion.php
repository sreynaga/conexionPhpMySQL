<?php

/*
| ------------------------------------------------------------------------------
| Autor: Ing. Sergio Humberto Reynaga Ibarra
| E-mail: sergio.reynaga@gmail.com
| Fecha: 03 de Septiembre de 2012
| Descripción: Clase para realizar una conexión a una base de datos en MySQL
| ------------------------------------------------------------------------------
 */

class Conexion {

    public static function con() {
        
        $db = "nombre_de_tu_base_de_datos"; //Nombre de la base de datos a utilizar
        $hostname = "nombre_de_tu_hostname"; //Nombre del Hostname de tu base de datos MySQL
        $user = "nombre_de_usuario"; //Nombre de usuario para conectar a tu base de datos
        $pass = "password"; //Password para conectar a tu base de datos
        
        $con = mysql_connect($hostname, $user, $pass);
        if (!$con) {
            echo "Error al conectarse a MySQL";
            exit;
        }
        mysql_query("SET NAMES 'utf8'");
        mysql_select_db($db);
        return $con;
    }

}

?>