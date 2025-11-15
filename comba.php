<?php
//declaracion variables
    $saltos= 0;
    $saltostotales=0;
echo "vamos a saltar a la comba";
//declaracion salto maximo
for ($saltostotales= random_int (0,100); $saltos <= $saltostotales; $saltos++) {
    echo "salto nº $saltos\n";
}
echo"se acabo la comba, has saltado $saltostotales veces";
?>