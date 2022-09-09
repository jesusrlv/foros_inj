<?php
    require('../query/qconn.php'); 

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $genero = $_POST['genero'];
    $edad = $_POST['edad'];
    $procedencia = $_POST['procedencia'];
    $email = $_POST['email'];

    $sqlSave = "INSERT INTO municipio(nombre,apellido,genero,edad,procedencia,email,) VALUES('$nombre','$apellido'.'$genero','$edad','$procedencia','$email')";
    $resultado_sqlMun = $conn->query($sqlMunicipio);
?>