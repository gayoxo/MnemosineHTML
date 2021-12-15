<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";



$FiltroP= array(

    new FiltroElem("generoforma_T","Genero / Forma",false),
    new FiltroElem("fechadepublicacion","Fecha de publicación",false),
    new FiltroElem("editorial_T","Editorial",false),
    //new FiltroElem("fechasdepublicacion","Fechas de publicación",false) REQUIERE LINKING
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>