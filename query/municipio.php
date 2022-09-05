<?php
    require('qconn.php'); 
    $sqlMunicipio = "SELECT * FROM municipio ORDER BY id ASC";
    $resultado_sqlMun = $conn->query($sqlMunicipio);
?>