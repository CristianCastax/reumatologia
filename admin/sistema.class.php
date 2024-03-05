<?php
    class Sistema{
        var $conn;
        var $count = 0;
        function conection(){
            //conexion a la base de datos
            $servername = "localhost";
            $username = "reumatologia";
            $password = "123";
            $this->conn = new PDO("mysql:host=$servername;dbname=reumatologia", $username, $password);
        }
        function setCount($count){
            $this->count = $count;
        }
        function getCount(){
            return $this->count;
        }
    }
?>