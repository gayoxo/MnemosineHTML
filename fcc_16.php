<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";
use FiltroArray;
use FiltroElem;

$FiltroP= array(
    new FiltroElem("DES","Nombre",false),
    new FiltroElem("fechadepublicacion","Fecha de publicación",false),
    new FiltroElem("editorial_T","Editorial",false),
    new FiltroElem("lugardepublicacion_T","Lugar de publicación",false),
    new FiltroElem("genero_T","Género literario",false),
    new FiltroElem("subgenero_T","Subgénero literario",false),
    new FiltroElem("fechanacimiento","Fecha nacimiento",false),
    new FiltroElem("lugardenacimiento_T","Lugar de nacimiento",false),
    new FiltroElem("lugardeexilio_T","Lugar de exilio",false),
    new FiltroElem("fechademuerte_T","Fecha de muerte",false),
    new FiltroElem("actividadprofesional_T","Actividad profesional",false),
    new FiltroElem("generosliterariosquecultiva_T","Géneros literarios que cultiva",false),
    new FiltroElem("asociacionesalasquepertenece_T","Asociaciones a las que pertenece",false),
    // new FiltroElem("digitalizacion","Digitalización",false), NO APLICA
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>