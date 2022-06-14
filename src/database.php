<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas Bases de datos</title>
</head>
<body>
    <h1>Listado tablas de <?php echo $_GET["db"]; ?> </h1>
    <?php
        use ITEC\PRESENCIAL\DAW\BDLIST\bd;
        include_once "../vendor/autoload.php";

        $bd = new bd ();
        $resultado = $bd->Select("SHOW tables from ". $_GET["db"] .";");
        for($i=0;$i<count($resultado);$i++){
            echo '<div><a href=database.php?db='.$resultado[$i]["Tables_in_".$_GET["db"]].'>'.$resultado[$i]["Tables_in_".$_GET["db"]].'</a></div>';
        }
    ?>


</body>
</html>



