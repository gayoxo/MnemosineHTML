<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";
use FiltroArray;
use FiltroElem;



$FiltroP= array(
    new FiltroElem("DES","Nombre",false),
    new FiltroElem("lugardeedicion_T","Lugar de edición",false),
    new FiltroElem("fechadeinicio","Fecha de inicio",false),
    new FiltroElem("fechadedesaparicion","Fecha de desaparición",false),
    new FiltroElem("imprenta_T","Imprenta",false),
    new FiltroElem("director_T","Director",false),
    new FiltroElem("periodicidad_T","Periodicidad",false),
    new FiltroElem("numerodepaginas","Número de páginas",false),
    new FiltroElem("precio","Precio",false)
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>