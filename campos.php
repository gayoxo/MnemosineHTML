<?php
class CampoElem
{
	
	public $Numer =0; 
	public $Id =array(); 
	public $Valor ="Unvalued";
	public $inside =false;
	
	
  /*  public function __construct($numer,array $id, $valor){
        $this->Id = $id;
		$this->Valor=$valor;
		$this->Numer=$numer;
		$this->inside=false;
    }*/
    
	public function __construct($numer,array $id, $valor, $inside){
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
	
	$SalidaVacia=array($numerID);
	return $SalidaVacia; 
	}
	
	public function isinside($numerID)
	{
	foreach ($this->CampoA as $elem)
		foreach ($elem as $elemV)
			if ($elemV->Numer==$numerID)
				return $elemV->inside;
			
	return false; 
	}
	
	
	
}

	$Grupo0=array(new CampoElem(0,array(0),"Todos",false));

	$Grupo1=array(
	new CampoElem(1,array(-1,111543,111236,110626,110401,109276),"Nombre",false),
	new CampoElem(2,array(98699,98700,98701,98702,98703,98704,98705,98706,98707,98708,98709,98712,98713,98714,98715,98716,98717,98718,98719,98720,98721,98722,98720,98723,98724,98725,98726,98727,98728,98729,98730,98731,98732,98733,98734,98735,98736,98737,98738,98739,98740,98741,98742),"Función",false),
	new CampoElem(3,array(111560,111255,110645,110412,109331,111560,111255,110645,110412,109331),"Exilio",false),
	new CampoElem(4,array(111551,111246,110636,110407,109294),"Fecha de nacimiento",true),
	new CampoElem(5,array(111552,111247,110637,110408,109295),"Fecha de muerte",true),
	new CampoElem(6,array(111559,111254,110644,110411,109302),"Género",false));
	
	$Grupo2=array(
	new CampoElem(7,array(-2,111673,111452,110876,110815,109052),"Titulo",false),
	new CampoElem(8,array(111458,110903,110824,109059,111678,111458,110828,109063,111682,111462,110907,111681,111460,110906,110827,109062,111681,111680,111461,110905,110826,109061,111680),"Datos de Publicación",false),
	new CampoElem(9,array(110494,110493,110495,109079,109097,109115,109133,109151,111478,111698,109081,109099,109117,109135,109153,111480,111700,109086,109104,109122,109140,110834,110837,111467,111687,109068),"Materia",false),
	new CampoElem(10,array(-3,109159,109164,111486,111491,111706),"Colección o serie",false),
	new CampoElem(12,array(111480,111700,109081,109099,109117,109135,109153),"Lugar Geografico",false),
	new CampoElem(11,array(111517,111518,111663,111728,109182,109183,109184,109185,109186,109650,109651,109652,109653,109654,109655,109656,109657,109658,110189,110191,110193,110195,110197,110199,110201,110203,110205,110207,110209,110211,110213,110215,110217,110219,110221,110223,110225,110227,110229,110231,110233,110235,110237,110239,110241,110243,110245,110247,110249,110251,110253,110255,110257,110259,110261,110263,110261,110263,110265,110267,110269,110271,110273,110275),"Otros Campos",false)
	);
	
	$CamposArrayA=array(0 => $Grupo0,"Autor" =>$Grupo1,"Obra" => $Grupo2);
	
	$CamposArray=new CampoArray($CamposArrayA);

?>