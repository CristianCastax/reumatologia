<?php
    $servername = "localhost";
    $username = "reumatologia";
    $password = "123";

    $conn = new PDO("mysql:host=$servername;dbname=reumatologia", $username, $password);
    print_r( $conn);

    $stmt = $conn->prepare("SELECT id_doctor, CONCAT(segundo_apellido,' ',primer_apellido,' ',nombre) as nombre_doctor, fotografia
    FROM doctor;");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $datos =$stmt->fetchAll();
    ?>