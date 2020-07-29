<?php
include_once('conex.php');
$tiposave = $_GET["tipo"];
$titulopost = $_GET["titulo"];
$contenidopost = $_GET["contenido"];
$fechapost =  $_GET["fecha"];

if ($tiposave = "post") {
    $Rs = mysqli_query($Cn, "insert into publicaciones (titulo,contenido,fecha) values ('" . $titulopost . "' ,'" . $contenidopost . "','" . $fechapost . "');");
    $count = mysqli_affected_rows($Cn);

    if ($count > 0) {
        echo "Ok";
    } else {
        echo "Bad";
    }
}
