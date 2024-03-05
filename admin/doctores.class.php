<?php
    require_once('sistema.class.php');
    //Clases van con mayuscula
    class Doctores extends Sistema{
        function getAll(){
            $this->conection();
            $stmt = $this->conn->prepare("SELECT id_doctor, segundo_apellido, primer_apellido, nombre ,fotografia FROM doctor;");
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $datos =$stmt->fetchAll();
            $this->setCount(count($datos));
            return $datos;
        }

        function getOne($id_doctor){
            $this->conection();
            $stmt = $this->conn->prepare("SELECT id_doctor, segundo_apellido ,primer_apellido, nombre, fotografia FROM doctor where id_doctor = :id_doctor;");
            //bindParam es para evitar inyecciones sql
            $stmt->bindParam(':id_doctor', $id_doctor, PDO::PARAM_INT); //PDO::PARAM_INT es para que sea un entero

            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $datos = array();
            $datos =$stmt->fetchAll();//
            if(isset($datos[0])){
                $this->setCount(count($datos));
                return $datos[0];
            }
            return array();
        }

        function insert($datos){
            $this->conection();
            if($this->validate_doctor($datos)){
                $stmt = $this->conn->prepare("INSERT INTO doctor (nombre, primer_apellido, segundo_apellido, fotografia) 
                VALUES (:nombre, :primer_apellido, :segundo_apellido, :fotografia);");
                $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
                $stmt->bindParam(':primer_apellido', $datos['primer_apellido'], PDO::PARAM_STR);            
                $stmt->bindParam(':segundo_apellido', $datos['segundo_apellido'], PDO::PARAM_STR);
                $stmt->bindParam(':fotografia', $datos['fotografia'], PDO::PARAM_STR);

                $stmt->execute();
                return $stmt->rowCount(); //rowCount es para saber cuantas filas se afectaron, es 0 o es 1
            }
            return 0;

        }

        function update($id_doctor, $datos){ //datos es un arreglo
            $this->conection();
            $stmt = $this->conn->prepare("UPDATE doctor set nombre=:nombre,
                                        primer_apellido=:primer_apellido,
                                        segundo_apellido=:segundo_apellido,
                                        fotografia=:fotografia where id_doctor=:id_doctor;");
            $stmt->bindParam(':id_doctor', $id_doctor, PDO::PARAM_INT);
            $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
            $stmt->bindParam(':primer_apellido', $datos['primer_apellido'], PDO::PARAM_STR);            
            $stmt->bindParam(':segundo_apellido', $datos['segundo_apellido'], PDO::PARAM_STR);
            $stmt->bindParam(':fotografia', $datos['fotografia'], PDO::PARAM_STR);

            $stmt->execute();
            return $stmt->rowCount(); //rowCount es para saber cuantas filas se afectaron, es 0 o es 1
        }

        function delete($id_doctor){
            $this->conection();
            $stmt = $this->conn->prepare("DELETE FROM doctor WHERE id_doctor = :id_doctor;");
            $stmt->bindParam(':id_doctor', $id_doctor, PDO::PARAM_INT); //PDO::PARAM_INT es para que sea un entero
            $stmt->execute();
            return $stmt->rowCount(); //rowCount es para saber cuantas filas se afectaron, es 0 o es 1
        }

        function validate_doctor($datos){
            if(empty($datos['nombre'])){
                return false;
            }
            return true;
        }
    }
?>