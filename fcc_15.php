<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";
use FiltroArray;
use FiltroElem;


$FiltroP= array(
    new FiltroElem("DES","Nombre",false),
    new FiltroElem("genero_T","Genero",false),
  //  new FiltroElem("Fecha de publicación","b.	Fecha de publicación",false), No Aplica en Autores
  //  new FiltroElem("Editorial","c.	Editorial",false), No Aplica en Autores
    new FiltroElem("lugarderesidencia_T","Lugar de residencia",false),
    new FiltroElem("estadocivil_T","Estado civil",false),
    new FiltroElem("actividadprofesional_T","Actividad profesional",false),
    new FiltroElem("asociacionesalasquepertenece_T","Asociaciones a las que pertenece",false),
    new FiltroElem("notas","Notas",false),
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>