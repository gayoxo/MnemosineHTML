<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";
use FiltroArray;
use FiltroElem;

$FiltroP= array(
    new FiltroElem("DES","Nombre",false),
    new FiltroElem("subtema","Subtemas",false),
    new FiltroElem("genero","Genero",false),
    new FiltroElem("subgenero","Subgenero",false),
    new FiltroElem("estilo","Estilo",false),
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>