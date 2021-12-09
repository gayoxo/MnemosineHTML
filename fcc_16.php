<?php 

function getfiltro(array $Objec)
{

	$Salida=array();

	foreach ($Objec as $elem)
		array_push($Salida, $elem->Id);

	return $Salida;
}

class FiltroElem
{
	
	public $Id =0; 
	public $Valor ="Unvalued"; 
	public $AsumeNum =false; 
	
	
    public function __construct($id, $valor, $asumeNum ){
        $this->Id = $id;
		$this->Valor=$valor;
		$this->AsumeNum=$asumeNum;
    }
    

}

class FiltroArray
{
	public $FiltroA =array(); 
	
	
    public function __construct(array $filtroA ){
        $this->FiltroA = $filtroA;
    }
    
	
	public function findElem($valueID)
	{
	foreach ($this->FiltroA as $elem)
		{
			
			if (is_numeric($elem->Id)&& is_numeric($valueID))
				if ($elem->Id==$valueID)
					return $elem->Valor;
				else;
			else
				if (!is_numeric($elem->Id)&& !is_numeric($valueID))
				{
					
					if ($elem->Id==$valueID)
						return $elem->Valor;
				}
		}
		
	return "Unvalued"; 
	}
	
	public function isNumeric($valueID)
	{
	foreach ($this->FiltroA as $elem)
		if ($elem->Id==$valueID)
			return $elem->AsumeNum;
			
	return false; 
	}
	
}



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