<?php

include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";

$FiltroP= array(
    new FiltroElem("generosliterariosquecultiva_T","Géneros literarios que cultiva",false),
    new FiltroElem("exilio_T","Exilio",false),
    new FiltroElem("fechasasociadasalnombre_T","Fechas asociadas al nombre",false),
    //new FiltroElem("fechasdepublicacion","Fechas de publicación",false) REQUIERE LINKING
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>