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