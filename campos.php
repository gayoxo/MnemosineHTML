<?php
class CampoElem
{
	
	public $Numer =0; 
	public $Id =array(); 
	public $Valor ="Unvalued"; 
	
	
    public function __construct($numer,array $id, $valor){
        $this->Id = $id;
		$this->Valor=$valor;
		$this->Numer=$numer;
    }
    

}

class CampoArray
{
	public $CampoA =array(); 
	
	
    public function __construct(array $campoA ){
        $this->CampoA = $campoA;
    }
    
	
	public function findElem($numerID)
	{
	foreach ($this->CampoA as $elem)
		if ($elem->Numer==$numerID)
			return $elem->Id;
			
	return array(); 
	}
	
	
	
}



	
	$CamposArrayA=array(new CampoElem(0,array(0),"Todos"),new CampoElem(1,array(21814,21817,19028),"Nombre(Autor)"),new CampoElem(2,array(27915),"Función"),new CampoElem(3,array(25119,21974,21985),"Titulo"),new CampoElem(4,array(19749),"Editorial"));
	
	$CamposArray=new CampoArray($CamposArrayA);

?>