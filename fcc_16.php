<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";
use FiltroArray;
use FiltroElem;

$FiltroP= array(
    new FiltroElem("DES","Nombre",false),
    new FiltroElem("fechadepublicacion","Fecha de publicación",false),
    new FiltroElem("editorial","Editorial",false),
    new FiltroElem("lugardepublicacion","Lugar de publicación",false),
    new FiltroElem("genero","Género literario",false),
    new FiltroElem("subgenero","Subgénero literario",false),
    new FiltroElem("fechanacimiento","Fecha nacimiento",false),
    new FiltroElem("lugardenacimiento","Lugar de nacimiento",false),
    new FiltroElem("lugardeexilio","Lugar de exilio",false),
    new FiltroElem("fechademuerte","Fecha de muerte",false),
    new FiltroElem("actividadprofesional","Actividad profesional",false),
    new FiltroElem("generosliterariosquecultiva","Géneros literarios que cultiva",false),
    new FiltroElem("asociacionesalasquepertenece","Asociaciones a las que pertenece",false),
    // new FiltroElem("digitalizacion","Digitalización",false), NO APLICA
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>