<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";
use FiltroArray;
use FiltroElem;

$FiltroP= array(
    new FiltroElem("DES","Nombre",false),
    new FiltroElem("genero","Genero",false),
    new FiltroElem("fechanacimiento","Fecha nacimiento",false),
    new FiltroElem("fechademuerte","Fecha de muerte",false),
    new FiltroElem("lugardenacimiento","Lugar de nacimiento",false),
 //   new FiltroElem("lugardemuerte","Lugar de muerte",false),  NO SE PUEDE
 //   new FiltroElem("lugarderesidencia","Lugar de residencia",false), NO SE PUEDE
    new FiltroElem("actividadprofesional","Actividad profesional",false),
    new FiltroElem("generosliterariosquecultiva","Géneros que cultiva",false),
    new FiltroElem("digitalizacion","Digitalizacion",false),
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>