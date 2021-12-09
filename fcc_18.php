<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";
use FiltroArray;
use FiltroElem;

$FiltroP= array(
    new FiltroElem("DES","Nombre",false),
    new FiltroElem("lugardenacimiento","Lugar de nacimiento",false),
    new FiltroElem("fechanacimiento","Fecha nacimiento",false),
    new FiltroElem("fechademuerte","Fecha de muerte",false),
    new FiltroElem("lugarderesidencia","Lugar de residencia",false),
    new FiltroElem("actividadprofesional","Actividad profesional",false),
    new FiltroElem("generosliterariosquecultiva","Géneros que cultiva",false),
    new FiltroElem("digitalizacion","Digitalizacion",false),
    // new FiltroElem("digitalizacion","Digitalización",false), NO APLICA
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>