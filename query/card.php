<?php
    require('qconn.php'); 

    $sqlCardParticipantes = "SELECT COUNT(procedencia) as datoParticipantes FROM dato_programa WHERE procedencia = '$mpio'";
    $resultadoCardParticipantes = $conn->query($sqlCardParticipantes);
    $rowCardParticipantes = $resultadoCardParticipantes->fetch_assoc();

    // edad
    $sqlCardEdad = "SELECT edad, COUNT(*) as cantidadEdad FROM dato_programa WHERE procedencia = '$mpio' GROUP BY edad ORDER BY edad ASC";
    $resultadoCardEdad = $conn->query($sqlCardEdad);

    // género
    $sqlCardGenero = "SELECT genero, COUNT(*) as cantidadGenero FROM dato_programa WHERE procedencia = '$mpio' GROUP BY genero";
    $resultadoCardGenero = $conn->query($sqlCardGenero);

    // categorias
    $sqlCardCategorias = "SELECT * FROM dato_programa WHERE procedencia = '$mpio'";
    $resultadoCardCategorias = $conn->query($sqlCardCategorias);
    
?>