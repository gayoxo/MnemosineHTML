<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";

$FiltroP= array(
    new FiltroElem(0,"Tipo",false),
    new FiltroElem("genero","Género",false),
    new FiltroElem(109333,"Exilio (Pais)",false),
    new FiltroElem(109335,"Exilio (Ciudad)",false),
    new FiltroElem("impresor","Impresor",false),
    new FiltroElem("lugardeimpresion","Lugar de impresión",false),
    new FiltroElem("materia","Materia",false),
    new FiltroElem("tipodedocumento","Tipo de documento",false),
    new FiltroElem("fechadepublicacion","Fecha de publicación",false)
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>


