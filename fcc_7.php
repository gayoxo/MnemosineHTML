<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";
use FiltroArray;
use FiltroElem;



$FiltroP= array(
    new FiltroElem("DES","Nombre",false),
     new FiltroElem("autorescritapor_T","Autor /Escrita por",false),
    new FiltroElem("publicacionperiodica_T","Publicación periódica",false),
    new FiltroElem("lugar_T","Lugar",false),
    // new FiltroElem("digitalizacion","Digitalización",false), No esta definido

);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>