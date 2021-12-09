<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";



$FiltroP= array(

    new FiltroElem("generoforma","Genero / Forma",false),
    new FiltroElem("fechadepublicacion","Fecha de publicación",false),
    new FiltroElem("editorial","Editorial",false),
    //new FiltroElem("fechasdepublicacion","Fechas de publicación",false) REQUIERE LINKING
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>