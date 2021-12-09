<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";


$FiltroP= array(

    new FiltroElem("director","Director",false),
    new FiltroElem("tirada","Tirada",false),
    new FiltroElem("lugardepublicacion","Lugar de Publicación",false),
    new FiltroElem("imprenta","Imprenta",false),
    new FiltroElem("fechadeinicio","Fecha inicio",false),
    //new FiltroElem("fechasdepublicacion","Fechas de publicación",false) REQUIERE LINKING
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>