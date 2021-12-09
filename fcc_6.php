<?php
include "getfiltro.php";
include "FiltroElem.php";
include "FiltroArray.php";
use FiltroArray;
use FiltroElem;


$FiltroP= array(
    // new FiltroElem("DES","Nombre",false), probable
     new FiltroElem("lugardepublicacion","Lugar de publicación",false),
    new FiltroElem("ao","Fecha",false),
    new FiltroElem("coleccioneditorial","Colección Editorial",false),
    new FiltroElem("ilustradordecubiertayportada","Ilustrador de cubierta y portada",false),
    new FiltroElem("ilustradordeinteriores","Ilustrador de interiores",false),
    new FiltroElem("ilustradorcapitular","Ilustrador capitular",false),
    new FiltroElem("ilustradorchiste","Ilustrador chiste",false),
    new FiltroElem("ilustrador4decubierta","Ilustrador 4.ª de Cubierta",false),
    // new FiltroElem("digitalizacion","Digitalización",false), No esta definido

);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>