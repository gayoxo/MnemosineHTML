<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";


$FiltroP= array(
    //new FiltroElem("genero","Genero (sexo)",false), SIN SENTIDO
    new FiltroElem("nombre","Nombre",false),
    new FiltroElem("fechadenacimiento","Fecha nacimiento",false),
    new FiltroElem("lugardenacimiento","Lugar de nacimiento",false),
    new FiltroElem("actividadprofesional","Actividad profesional",false),
    new FiltroElem("generosquecultiva","Géneros que cultiva",false),
    new FiltroElem("exilio","Exilio",false),
    //new FiltroElem("fechasdepublicacion","Fechas de publicación",false) REQUIERE LINKING
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>