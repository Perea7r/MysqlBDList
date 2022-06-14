<?php
    use ITEC\PRESENCIAL\DAW\BDLIST\bd;
    include_once "../vendor/autoload.php";

    $bd = new bd ();
    $resultado = $bd->Select("SHOW DATABASES;");
    print_r($resultado);