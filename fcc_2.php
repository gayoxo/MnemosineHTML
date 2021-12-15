<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";

$FiltroP= array(
    new FiltroElem("nombre_T","Nombre",false),
    new FiltroElem("fechadenacimiento","Fecha nacimiento",false),
    new FiltroElem("lugardenacimiento_T","Lugar de nacimiento",false),
    new FiltroElem("actividadprofesional_T","Actividad profesional",false),
    new FiltroElem("generosquecultiva_T","Géneros que cultiva",false),
    new FiltroElem("exilio_T","Exilio",false),
    //new FiltroElem("fechasdepublicacion","Fechas de publicación",false) REQUIERE LINKING
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>