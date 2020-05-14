<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$SalarioTrabajador = 3500;

$Impuesto = 20; // Porcentaje

$SueldoReal = $SalarioTrabajador – (($SalarioTrabajador /

100) * $Impuesto);

echo “Sueldo del trabajador sin impuesto:  $SalarioTrabajador<BR>”;

echo “Con el impuesto :$SueldoReal”;

?>

</body>
</html>