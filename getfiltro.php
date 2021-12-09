<?php
function getfiltro(array $Objec)
{

    $Salida=array();

    foreach ($Objec as $elem)
        array_push($Salida, $elem->Id);

    return $Salida;
}
?>