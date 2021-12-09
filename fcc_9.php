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
    new FiltroElem("lugardeedicion","Lugar de edición",false),
    new FiltroElem("fechadeinicio","Fecha de inicio",false),
    new FiltroElem("fechadedesaparicion","Fecha de desaparición",false),
    new FiltroElem("imprenta","Imprenta",false),
    new FiltroElem("director","Director",false),
    new FiltroElem("periodicidad","Periodicidad",false),
    new FiltroElem("numerodepaginas","Número de páginas",false),
    new FiltroElem("precio","Precio",false)
);

$FiltroObject=new FiltroArray($FiltroP);

$Filtro=getfiltro($FiltroObject->FiltroA);

?>