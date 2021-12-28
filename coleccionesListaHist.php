<?php
class CollectionElem
{
	
	public $Numer =0; 
	public $Nombre =""; 
	public $Descripcion =""; 
	public $Datos ="";
	public $Imagen ="";
    public $Order ="";
	
    
	public function __construct($Numer, $Nombre, $Descripcion, $Datos, $Imagen, $Order="DES"){
        $this->Numer = $Numer;
		$this->Nombre = $Nombre;
		$this->Descripcion=$Descripcion;
		$this->Datos=$Datos;
		$this->Imagen=$Imagen;
        $this->Order=$Order;
    }

}

class CollectionArray
{
	public $CollectionA =array(); 
	
	
    public function __construct(array $campoA ){
        $this->CollectionA = $campoA;
    }
    
	
	public function findDescripcion($numerID)
	{
	foreach ($this->CollectionA as $elem)
		foreach ($elem as $elemV)
			if ($elemV->Numer==$numerID)
				return $elemV->Descripcion;
			
	return ""; 
	}
	
	public function findDatos($numerID)
	{
	foreach ($this->CollectionA as $elem)
		foreach ($elem as $elemV)
			if ($elemV->Numer==$numerID)
				return $elemV->Datos;
			
	return ""; 
	}
	
	public function findNombre($numerID)
	{
	foreach ($this->CollectionA as $elem)
		foreach ($elem as $elemV)
			if ($elemV->Numer==$numerID)
				return $elemV->Nombre;
			
	return ""; 
	}
	
	public function findImagen($numerID)
	{
	foreach ($this->CollectionA as $elem)
		foreach ($elem as $elemV)
			if ($elemV->Numer==$numerID)
				return $elemV->Imagen;
			
	return ""; 
	}
	
}

// http://clavy.fdi.ucm.es/Clavy/rest/Basic/getPlainStructure?userclavy=USER&passwordclavy=PASS&keyclavy=5418875484852530

	$CollectionArrayAL=array(
	new CollectionElem(
		1,
		"Escritoras ",
		"Escritoras",
		"name=Escritoras&q=genero:mujer",
		"imagenes/21.Escritoras.png"
		),
	new CollectionElem(
		2,
		"Escritores",
		"Escritores",
		"name=Escritores&q=genero:hombre",
		"imagenes/22.Escritores.png"
		),
        new CollectionElem(
            3,
            "Mujeres Poetas",
            "Esta colección reúne a poetas de la Edad de Plata y sus obras. Coord.: Helena Establier",
            "name=Mujeres Poetas&q=genero:mujer AND ( generosliterariosquecultiva:poesia OR generosliterariosquecultiva:poeta)",
            "imagenes/23.Mujeres%20Poetas.png"
        ),
        new CollectionElem(
            4,
            "Géneros literarios",
            "Géneros literarios .",
            "name=Géneros literarios&q=generoliterario:/.*/",
            "imagenes/24.Generos.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            5,
            "Edad de Plata Interactiva ",
            "Textos interactivos escritos por mujeres prosistas e intelectuales, cuentos infantiles de la editorial Calleja y relatos sobre Madrid. Coord.: Alicia Reina",
            "name=Edad de Plata Interactiva &q=fuentedeenlace:Madgazine",
            "imagenes/25.Libros%20Interactivos.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            6,
            "Libros Digitalizados",
            "Libros Digitalizados",
            "name=Libros Digitalizados&q=link: /.*/",
            "imagenes/26.Libros%20Enlazados.png",
            "fechadepublicacion"
        ),
		new CollectionElem(
		7,
		"Publicaciones Periódicas",
		"Publicaciones Periódicas.",
		"name=Publicaciones Periódicas&q=coleccionenmnemosine:%22publicaciones periódicas%22",
		"imagenes/27.PubliPeriodicas.png",
            "fechadepublicacion"
		),



		
	);
	
	
	
	$CollectionArrayA=new CollectionArray($CollectionArrayAL);

?>