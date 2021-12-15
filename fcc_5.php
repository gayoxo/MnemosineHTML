<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";
use FiltroArray;
use FiltroElem;

$FiltroP= array(
    new FiltroElem("DES","Nombre",false),
     new FiltroElem("lugardepublicacion_T","Lugar de publicación",false),
    new FiltroElem("editorial_T","Editorial",false),
    new FiltroElem("ao","Fecha",false),
    new FiltroElem("serieocoleccion_T","Serie o colección",false),
    // new FiltroElem("digitalizacion","Digitalización",false), No esta definido

);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>