<?php

$host = "localhost";
$User = "root";
$BD = "bdblog";
$Pass = "";

$Cn = mysqli_connect($host, $User, $Pass, $BD) or die("Error de conexión");

if (!$Cn) {
    echo "Base conectada";
}



function filas($cnn,$consulta)
{
    $rs = mysqli_query($cnn, "select * from usuario");
    return $rs;
}
