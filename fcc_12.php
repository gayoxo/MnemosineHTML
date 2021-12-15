<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";
use FiltroArray;
use FiltroElem;

$FiltroP= array(
    new FiltroElem("DES","Nombre",false),
    new FiltroElem("subgenero_T","Subgéneros",false),
    new FiltroElem("lugardepublicacion_T","Lugar de publicación",false),
    new FiltroElem("precio","Precio",false),
    new FiltroElem("imprenta_T","Imprenta",false),
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>