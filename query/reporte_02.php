<?php
    require('qconn.php'); 

    $sqlReporte02 = "SELECT COUNT(procedencia) as dato FROM dato_programa WHERE procedencia = '$procedencia'";
    $resultadoReporte02 = $conn->query($sqlReporte02);
    $rowResultadoReporte02 = $resultadoReporte02->fetch_assoc();
?>