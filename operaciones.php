<?php
$n1=$_GET["n1"];
$n2=$_GET["n2"];
$operacion=$_GET["operacion"];

switch ($operacion) {
    case "suma":
        echo "La suma es de: " . $n1+$n2;
        break;
    case "resta":
        echo "La resta es de: " . $n1-$n2;
        break;
    case "multiplicacion":
        echo "La multiplicacion es de: " . $n1*$n2;
        break;
    case "division":
        echo "La division es de: " . $n1/$n2;
        break;
    default:
        echo "La opcion escogida es inexistente";
        break;
}

