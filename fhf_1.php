<?php

include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";



$FiltroP= array(
    new FiltroElem("generosliterariosquecultiva","Géneros literarios que cultiva",false),
    new FiltroElem("exilio","Exilio",false),
    new FiltroElem("fechasasociadasalnombre","Fechas asociadas al nombre",false),
    //new FiltroElem("fechasdepublicacion","Fechas de publicación",false) REQUIERE LINKING
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>