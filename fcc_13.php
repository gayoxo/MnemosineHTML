<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";
use FiltroArray;
use FiltroElem;

$FiltroP= array(
    new FiltroElem("DES","Nombre",false),
    new FiltroElem("subtema_T","Subtemas",false),
    new FiltroElem("genero_T","Genero",false),
    new FiltroElem("subgenero_T","Subgenero",false),
    new FiltroElem("estilo_T","Estilo",false),
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>