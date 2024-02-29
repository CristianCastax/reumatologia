<?php
    $servername = "localhost";
    $username = "reumatologia";
    $password = "123";

    $conn = new PDO("mysql:host=$servername;dbname=reumatologia", $username, $password);
    print_r( $conn);

    $stmt = $conn->prepare("SELECT e.id_especialidad, e.especialidad, CONCAT(d.segundo_apellido,' ',d.primer_apellido,' ',d.nombre) as nombre_doctor, e.extension
    FROM especialidad e LEFT JOIN doctor d on d.id_doctor = e.id_doctor
    order by 2;");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $datos =$stmt->fetchAll();
    ?>