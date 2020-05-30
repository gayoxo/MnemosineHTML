<?php
class CampoElem
{
	
	public $Numer =0; 
	public $Id =""; 
	public $Valor ="Unvalued";
	public $inside =false;
	
	
    
	public function __construct($numer, $id, $valor, $inside){
        $this->Id = $id;
		$this->Valor=$valor;
		$this->Numer=$numer;
		$this->inside=$inside;
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
	
	$SalidaVacia="";
	return $SalidaVacia; 
	}
	
	/*
	public function isinside($numerID)
	{
	foreach ($this->CampoA as $elem)
		foreach ($elem as $elemV)
			if ($elemV->Numer==$numerID)
				return $elemV->inside;
			
	return false; 
	}*/
	
	
	
}

	$Grupo0=array(new CampoElem(0,"","Basica",false));

	$Grupo1=array(
	new CampoElem(1,"nombre","Nombre",false),
	new CampoElem(2,"funcion","Función",false),
	new CampoElem(3,"exilio","Exilio",false),
	new CampoElem(4,"fechadenacimiento","Fecha de nacimiento",true),
	new CampoElem(5,"fechademuerte","Fecha de muerte",true),
	new CampoElem(6,"genero","Género",false));
	
	$Grupo2=array(
	new CampoElem(7,"titulo","Titulo",false),
	new CampoElem(8,"datosdepublicacion","Datos de Publicación",false),
	new CampoElem(9,"materia","Materia",false),
	new CampoElem(10,"colecionoserie","Colección o serie",false),
	new CampoElem(12,"lugargeografico","Lugar Geografico",false),
	new CampoElem(11,"notas","Otros Campos",false)
	);
	
	$CamposArrayA=array(0 => $Grupo0,"Autor" =>$Grupo1,"Obra" => $Grupo2);
	
	$CamposArray=new CampoArray($CamposArrayA);

?>