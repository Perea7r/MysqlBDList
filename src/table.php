<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas Bases de datos</title>
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css">
</head>
<body>
    <?php
        $db = $_GET["db"];
        $tabla = $_GET["tabla"];
    ?>
        <h1>Datos tabla de <?php echo $_GET["tabla"]; ?> </h1>
    <?php
        use ITEC\PRESENCIAL\DAW\BDLIST\bd;
        include_once "../vendor/autoload.php";

        $bd = new bd ();
        $resultado = $bd->Select("Select * from ". $db . ".". $tabla .";");
        $cabeceras = array_keys($resultado[0]);
        $code = '<table class="table"><tr>';
        for ($i=0;$i<count($cabeceras);$i++){
            $code.='<th>$cabeceras[$i]</th>';
        }
        $code .= '</tr>';
        for($i=0;$i<count($resultado);$i++){
            $code .= '<tr>';
            foreach($resultado[$i] as $campo =>$valor){
                $code.='<td>$valor</td>';
            }
            $code .= '</tr>';           
        }
        $code .= '</table>';
        echo $code;
    ?>
</body>
</html>