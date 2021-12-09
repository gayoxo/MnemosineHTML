<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";
use FiltroArray;
use FiltroElem;



$FiltroP= array(
    new FiltroElem("DES","Nombre",false),
    new FiltroElem("lugardeedicion","Lugar de edición",false),
    new FiltroElem("fechadeinicio","Fecha de inicio",false),
    new FiltroElem("fechadedesaparicion","Fecha de desaparición",false),
    new FiltroElem("imprenta","Imprenta",false),
    new FiltroElem("director","Director",false),
    new FiltroElem("periodicidad","Periodicidad",false),
    new FiltroElem("numerodepaginas","Número de páginas",false),
    new FiltroElem("precio","Precio",false)
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>