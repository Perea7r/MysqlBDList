<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
    <title>Listas Bases de datos</title>
</head>
<body>
    <h1 class = "bg-dark">Listado de bases de datos disponibles</h1>
    <?php
        use ITEC\PRESENCIAL\DAW\BDLIST\bd;
        include_once "../vendor/autoload.php";

        $bd = new bd ();
        $resultado = $bd->Select("SHOW DATABASES;");
        for($i=0;$i<count($resultado);$i++){
            echo '<div><a href=database.php?db='.$resultado[$i]["Database"].'>'.
                $resultado[$i]["Database"].'</a></div>';
        }
    ?>
    
</body>
</html>