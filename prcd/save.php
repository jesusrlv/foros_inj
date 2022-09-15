<html>
    <header>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </header>
<body>

<?php
if(isset($_POST['nombre']) && isset($_POST['apellido'])){
    
}
else{
    header('Location: ../index.php');
}
    require('../query/qconn.php'); 

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $genero = $_POST['genero'];
    $edad = $_POST['edad'];
    $procedencia = $_POST['procedencia'];
    $email = $_POST['email'];
    $tema1 = $_POST['tema1'];
    $tema2 = $_POST['tema2'];
    $tema3 = $_POST['tema3'];
    $tema4 = $_POST['tema4'];
    $tema5 = $_POST['tema5'];
    $tema6 = $_POST['tema6'];
    $tema7 = $_POST['tema7'];

    date_default_timezone_set('America/Mexico_City');
    setlocale(LC_TIME, 'es_MX.UTF-8');
    $fecha = strftime("%Y-%m-%d,%H:%M:%S");

    $sqlSave = "INSERT INTO dato_programa(nombre,apellido,genero,edad,procedencia,email,tema1,tema2,tema3,tema4,tema5,tema6,tema7,fechahora) VALUES('$nombre','$apellido','$genero','$edad','$procedencia','$email','$tema1','$tema2','$tema3','$tema4','$tema5','$tema6','$tema7','$fecha')";
    $resultadoSave = $conn->query($sqlSave);

    if($resultadoSave){
        
        echo '<script>
        Swal.fire({
            icon: "success",
            title: "Registro correcto",
            footer: "Programa INJUVENTUD"
        }).then(function(){window.location="../index.php";});
        window.open("reconocimiento.php?nombre='.$nombre.'&apellido='.$apellido.'", "_blank");
        </script>';
        }
        else{
        echo 'No se registró el QR';
        }
?>

</body>
</html>