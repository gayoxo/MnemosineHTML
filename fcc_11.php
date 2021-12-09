<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";
use FiltroArray;
use FiltroElem;


$FiltroP= array(
    new FiltroElem("DES","Nombre",false),
    new FiltroElem("subgenero","Subgéneros",false),
    new FiltroElem("lugardepublicacion","Lugar de publicación",false),
    new FiltroElem("precio","Precio",false),
    new FiltroElem("imprenta","Imprenta",false),
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>