<?php
class CampoElem
{
	
	public $Id =0; 
	public $Valor ="Unvalued"; 
	
	
    public function __construct($id, $valor){
        $this->Id = $id;
		$this->Valor=$valor;
    }
    

}

$a=new CampoElem(0,"Todos");
	
	$CamposArray=array(new CampoElem(0,"Todos"),new CampoElem(21814,"Nombre"),new CampoElem(25119,"Titulo"),new CampoElem(19749,"Editorial"));

?>