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



$DescP= array(new Desc(25119,"Título"),new Desc(20932,"Autor"),new Desc(19749,"Editorial"),new Desc(19750,"Fecha de publicación"),new Desc(21814,"Nombre"),new Desc(31018,"Fecha de nacimiento"),new Desc(31019,"Fecha de muerte"));

$DescObject=new DescArray($DescP);

$Desc=getDescrip($DescObject->DescA);

?>