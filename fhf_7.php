<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";


$FiltroP= array(

    new FiltroElem("director_T","Director",false),
    new FiltroElem("tirada_T","Tirada",false),
    new FiltroElem("lugardepublicacion_T","Lugar de Publicación",false),
    new FiltroElem("imprenta_T","Imprenta",false),
    new FiltroElem("fechadeinicio","Fecha inicio",false),
    //new FiltroElem("fechasdepublicacion","Fechas de publicación",false) REQUIERE LINKING
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>