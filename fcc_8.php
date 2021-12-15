<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";
use FiltroArray;
use FiltroElem;


$FiltroP= array(
    new FiltroElem("DES","Nombre",false),
    // new FiltroElem("genero","Género",false), SIN SENTIDO
    new FiltroElem("editorial_T","Editorial",false),
    new FiltroElem("fechadepublicacion_T","Fecha de publicación",false),
    // new FiltroElem("digitalizacion","Digitalización",false), No esta definido

);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>