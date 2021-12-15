<?php

include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";
use FiltroArray;
use FiltroElem;


$FiltroP= array(
    new FiltroElem("DES","Autores",false),
    new FiltroElem("editorial_T","Editorial",false),
    new FiltroElem("lugardepublicacion_T","Lugar de publicación",false),
    new FiltroElem("fechadepublicacion","Fecha de publicación",false),
    new FiltroElem("genero_T","Generos",false),
    // new FiltroElem("digitalizacion","Digitalización",false), NO APLICA
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>