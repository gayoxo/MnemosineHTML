<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";
use FiltroArray;
use FiltroElem;

$FiltroP= array(
    new FiltroElem("DES","Nombre",false),
    new FiltroElem("fechanacimiento","Fecha nacimiento",false),
    new FiltroElem("fechadepublicacion","Fecha de publicación",false),
    new FiltroElem("editorial","Editorial",false),
    new FiltroElem("genero","Género literario",false),
    // new FiltroElem("digitalizacion","Digitalización",false), NO APLICA
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>