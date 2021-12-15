<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";
use FiltroArray;
use FiltroElem;


$FiltroP= array(
    new FiltroElem("DES","Nombre",false),
    new FiltroElem("fechadeedicion","Fecha de edición",false),
    new FiltroElem("titulolibroreseado_T","Obra",false),
    new FiltroElem("link1","Enlace",false)
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>