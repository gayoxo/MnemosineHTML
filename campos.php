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
		foreach ($elem as $elemV)
			if ($elemV->Numer==$numerID)
				return $elemV->Id;
			
	return array(); 
	}
	
	
	
}

	$Grupo0=array(new CampoElem(0,array(0),"Todos"));

	$Grupo1=array(new CampoElem(1,array(-3,21814,21817,19028),"Nombre"),new CampoElem(2,array(27915),"Función"));
	
	$Grupo2=array(new CampoElem(3,array(-3,25119,21974,21985),"Titulo"),new CampoElem(4,array(19749),"Editorial"));
	
	$CamposArrayA=array(0 => $Grupo0,"Autor" =>$Grupo1,"Obra" => $Grupo2);
	
	$CamposArray=new CampoArray($CamposArrayA);

?>