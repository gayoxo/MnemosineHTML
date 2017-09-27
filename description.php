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
		if ($elem->Id==$valueID)
			return $elem->Valor;
			
	return "Unvalued"; 
	}
	
}



$DescP= array(
new Desc(56332,"Fechas asociadas al nombre"),
new Desc(62212,"Fechas asociadas al nombre"),
new Desc(70620,"Fechas asociadas al nombre"),
new Desc(73968,"Fechas asociadas al nombre"),
new Desc(74259,"Fechas asociadas al nombre"),
new Desc(56488,"Editorial"),
new Desc(62942,"Editorial"),
new Desc(74786,"Editorial"),
new Desc(74804,"Editorial"),
new Desc(74134,"Editorial"),
new Desc(74347,"Editorial"),
new Desc(56490,"Año de publicación"),
new Desc(62943,"Año de publicación"),
new Desc(74790,"Año de publicación"),
new Desc(74806,"Año de publicación"),
new Desc(74078,"Año de publicación"),
new Desc(74342,"Año de publicación"));

$DescObject=new DescArray($DescP);

$Desc=getDescrip($DescObject->DescA);

?>