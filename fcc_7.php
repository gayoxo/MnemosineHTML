<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";
use FiltroArray;
use FiltroElem;



$FiltroP= array(
    new FiltroElem("DES","Nombre",false),
     new FiltroElem("autorescritapor","Autor /Escrita por",false),
    new FiltroElem("publicacionperiodica","Publicación periódica",false),
    new FiltroElem("lugar","Lugar",false),
    // new FiltroElem("digitalizacion","Digitalización",false), No esta definido

);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>