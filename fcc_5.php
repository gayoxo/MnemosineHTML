<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";
use FiltroArray;
use FiltroElem;

$FiltroP= array(
    new FiltroElem("DES","Nombre",false),
     new FiltroElem("lugardepublicacion","Lugar de publicación",false),
    new FiltroElem("editorial","Editorial",false),
    new FiltroElem("ao","Fecha",false),
    new FiltroElem("serieocoleccion","Serie o colección",false),
    // new FiltroElem("digitalizacion","Digitalización",false), No esta definido

);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>