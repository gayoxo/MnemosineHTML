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

	$Grupo1=array(new CampoElem(1,array(-3,21814,21817,19028),"Nombre"),new CampoElem(2,array(30995),"Función"),new CampoElem(3,array(31020),"Exilio"),new CampoElem(4,array(31018),"Fecha de nacimiento"),new CampoElem(5,array(31019),"Fecha de muerte"),new CampoElem(5,array(21832),"Género"));
	
	$Grupo2=array(
	new CampoElem(6,array(-3,25119,21974,21985),"Titulo"),
	new CampoElem(7,array(19749,28646,28647,19750),"Datos de Publicación"),
	new CampoElem(8,array(20805,20700,20666,20762,29718),"Materia"),
	new CampoElem(9,array(21985),"Colección o serie"),
	new CampoElem(10,array(29183,19054,27949,28138,19063),"Otros Campos"));
	
	$CamposArrayA=array(0 => $Grupo0,"Autor" =>$Grupo1,"Obra" => $Grupo2);
	
	$CamposArray=new CampoArray($CamposArrayA);

?>