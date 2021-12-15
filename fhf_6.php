<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";

$FiltroP= array(

    new FiltroElem("fuentedelenlace_T","Fuente de la Obra",false),
    new FiltroElem("link","Enlace",false),
    //new FiltroElem("fechasdepublicacion","Fechas de publicación",false) REQUIERE LINKING
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>