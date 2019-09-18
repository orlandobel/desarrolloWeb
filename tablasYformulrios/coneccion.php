<?php
    $host = 'localhost';
    $user = 'root';
    $pass = 'Tuiolosega50?';
    $table = 'usuarios';

    $con = mysqli_connect($host,$user,$pass,$table);

    if(!$con) {
        echo "Error en la coneccion"."<br/>".PHP_EOL();
        exit();
    }

    echo "Coneccion establecida"."<br/>";
?>
