<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";
use FiltroArray;
use FiltroElem;


$FiltroP= array(
    // new FiltroElem("DES","Nombre",false), probable
     new FiltroElem("lugardepublicacion_T","Lugar de publicación",false),
    new FiltroElem("ao","Fecha",false),
    new FiltroElem("coleccioneditorial_T","Colección Editorial",false),
    new FiltroElem("ilustradordecubiertayportada_T","Ilustrador de cubierta y portada",false),
    new FiltroElem("ilustradordeinteriores_T","Ilustrador de interiores",false),
    new FiltroElem("ilustradorcapitular_T","Ilustrador capitular",false),
    new FiltroElem("ilustradorchiste_T","Ilustrador chiste",false),
    new FiltroElem("ilustrador4decubierta_T","Ilustrador 4.ª de Cubierta",false),
    // new FiltroElem("digitalizacion","Digitalización",false), No esta definido

);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>