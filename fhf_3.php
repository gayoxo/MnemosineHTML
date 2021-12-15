<?php

include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";



$FiltroP= array(

    new FiltroElem("exilio_T","Exilio",false),
    new FiltroElem("fechasasociadasalnombre","Fechas asociadas al nombre",false),
    //new FiltroElem("fechasdepublicacion","Fechas de publicación",false) REQUIERE LINKING
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>