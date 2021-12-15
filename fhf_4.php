<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";


$FiltroP= array(

    new FiltroElem("generoliterario_T","Genero Literario",false),
    //new FiltroElem("fechasdepublicacion","Fechas de publicación",false) REQUIERE LINKING
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>