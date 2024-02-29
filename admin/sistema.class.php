<?php
    class Sistema{
        var $conn;
        function conection(){
            //conexion a la base de datos
            $servername = "localhost";
            $username = "reumatologia";
            $password = "123";
            $this->conn = new PDO("mysql:host=$servername;dbname=reumatologia", $username, $password);
        
        }
    }
?>