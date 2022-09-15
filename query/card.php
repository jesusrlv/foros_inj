<?php
    require('qconn.php'); 

    $sqlCardParticipantes = "SELECT COUNT(procedencia) as datoParticipantes FROM dato_programa WHERE procedencia = '$mpio'";
    $resultadoCardParticipantes = $conn->query($sqlCardParticipantes);
    $rowCardParticipantes = $resultadoCardParticipantes->fetch_assoc();

    $sqlCardEdad = "SELECT edad, COUNT(*) as cantidadEdad FROM dato_programa WHERE procedencia = '$mpio' GROUP BY edad ORDER BY edad ASC";
    $resultadoCardEdad = $conn->query($sqlCardEdad);
    // $rowCardEdad = $resultadoCardEdad->fetch_assoc();
?>