<?php

include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";
use FiltroArray;
use FiltroElem;

$FiltroP= array(
    new FiltroElem("DES","Autores",false),
    new FiltroElem("editorial","Editorial",false),
    new FiltroElem("lugardepublicacion","Lugar de publicación",false),
    new FiltroElem("fechadepublicacion","Fecha de publicación",false),
    new FiltroElem("genero","Generos",false),
    // new FiltroElem("digitalizacion","Digitalización",false), NO APLICA
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>