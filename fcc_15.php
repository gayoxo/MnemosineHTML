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
    new FiltroElem("genero","Genero",false),
  //  new FiltroElem("Fecha de publicación","b.	Fecha de publicación",false), No Aplica en Autores
  //  new FiltroElem("Editorial","c.	Editorial",false), No Aplica en Autores
    new FiltroElem("lugarderesidencia","Lugar de residencia",false),
    new FiltroElem("estadocivil","Estado civil",false),
    new FiltroElem("actividadprofesional","Actividad profesional",false),
    new FiltroElem("asociacionesalasquepertenece","Asociaciones a las que pertenece",false),
    new FiltroElem("notas","Notas",false),
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>