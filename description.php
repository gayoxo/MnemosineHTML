<?php 

function getDescrip(array $Objec)
{
	
	$Salida=array();
	
	foreach ($Objec as $elem)
		array_push($Salida, $elem->Id);
	
	return $Salida;
}

class Desc
{
	
	public $Id =0; 
	public $Valor ="Unvalued"; 
	
	
    public function __construct($id, $valor){
        $this->Id = $id;
		$this->Valor=$valor;
    }
    

}

class DescArray
{
	public $DescA =array(); 
	
	
    public function __construct(array $descA ){
        $this->DescA = $descA;
    }
    
	
	public function findElem($valueID)
	{
		
		
	foreach ($this->DescA as $elem)
	
		if (is_numeric($elem->Id)&& is_numeric($valueID))
			if ($elem->Id==$valueID)
				return $elem->Valor;
			else;
		else
			if (!is_numeric($elem->Id)&& !is_numeric($valueID))
				if ($elem->Id==$valueID)
						return $elem->Valor;
	return "Unvalued"; 
	}
	
}



$DescP= array(
new Desc("fechasasociadasalnombre","Fechas asociadas al nombre"),
new Desc("editorial","Editorial"),
new Desc("fechadepublicacion","Año de publicación"));

$DescObject=new DescArray($DescP);

$Desc=getDescrip($DescObject->DescA);

?>