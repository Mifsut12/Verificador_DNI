<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <?php

    require("funciones.php");
    require("datos.php");


    $DNI = $_POST["dni"];
    verificarDNI($DNI,$letras);
?>
</body>
</html>


