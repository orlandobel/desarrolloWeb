<?php
    $host = 'localhost';
    $user = 'root';
    $pass = 'Tuiolosega50?';
    $table = 'usuarios';

    $con = mysqli_connect($host,$user,$pass,$table);

    if(!$con) {
        echo "Error en la coneccion"."<br/>".PHP_EOL()."<br/>";
        echo "error: ".mysqli_connect_error().PHP_EOL()."<br/>";
        echo "erno: ".mysqli_connect_erno().PHP_EOL()."<br/>";
        exit();
    }
?>
