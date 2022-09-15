<?php
    require('qconn.php'); 

    $sqlReporte01 = "SELECT * FROM dato_programa ORDER BY id ASC";
    $resultadoReporte01 = $conn->query($sqlReporte01);
?>