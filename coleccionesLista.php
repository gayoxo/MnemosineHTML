<?php
class CollectionElem
{
	
	public $Numer =0; 
	public $Nombre =""; 
	public $Descripcion =""; 
	public $Datos ="";
	public $Imagen ="";
	
	
    
	public function __construct($Numer, $Nombre, $Descripcion, $Datos, $Imagen){
        $this->Numer = $Numer;
		$this->Nombre = $Nombre;
		$this->Descripcion=$Descripcion;
		$this->Datos=$Datos;
		$this->Imagen=$Imagen;
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
		"Mujeres intelectuales de la edad de plata",
		"Esta colección es resultado de la investigación del proyecto &quot;eLITE-CM: Edición Literaria Electrónica&quot; (Ref. H2015/HUM-3426), financiado por el Programa de Actividades de I+D entre grupos de investigación de la Comunidad de Madrid en Ciencias Sociales y Humanidades. Coordinadora: Dolores Romero López con la colaboración de Ángela Ena y de Kirsty Hooper.",
		"name=Mujeres intelectuales de la edad de plata&Id1=6&Desc1=Mujer",
		"imagenes/COLECCION1.png"
		),
	new CollectionElem(
		2,
		"Literatura infantil",
		"Esta colección es resultado de la investigación del proyecto &quot;eLITE-CM: Edición Literaria Electrónica&quot; (Ref. H2015/HUM-3426), financiado por el Programa de Actividades de I+D entre grupos de investigación de la Comunidad de Madrid en Ciencias Sociales y Humanidades. Coordinadoras: Alicia Reina y Mª Jesús Fraga.",
		"name=Literatura infantil&Id1=9&Desc1=literatura&Id2=9&Desc2=infantil",
		"imagenes/COLECCION9.png"
		),
	new CollectionElem(
		3,
		"Madrid en la Literatura de la Edad de Plata",
		"Esta colección es resultado de la investigación del proyecto &quot;eLITE-CM: Edición Literaria Electrónica&quot; (Ref. H2015/HUM-3426), financiado por el Programa de Actividades de I+D entre grupos de investigación de la Comunidad de Madrid en Ciencias Sociales y Humanidades. Coordinador: José Miguel González Soriano",
		"name=Madrid en la Literatura de la Edad de Plata&Id1=12&Desc1=Madrid",
		"imagenes/COLECCION8.png"
		),
	new CollectionElem(
		4,
		"Edad de Plata Interactiva",
		"Esta colección es resultado de la investigación del proyecto eLITE-CM: Edición Literaria Electrónica (Ref. H2015/HUM-3426), financiado por el Programa de Actividades de I+D entre grupos de investigación de la Comunidad de Madrid en Ciencias Sociales y Humanidades. Coordinadora: Alicia Reina Navarro",
		"name=Edad de Plata Interactiva&Id1=56522&Desc1=Edad de Plata Interactiva&Id2=56523&Desc2=Edad de Plata Interactiva&Id3=56523&Desc3=Col. sobre La Mujer Moderna&Id4=56523&Desc4=Edad de Plata Interactiva",
		"imagenes/COLECCION6.png"
		),
		
	new CollectionElem(
		5,
		"Traductoras de la Edad de Plata",
		"Esta colección reúne a un grupo de mujeres que publicaron en español traducciones de autores extranjeros. Se utiliza la herramienta @Note para realizar anotaciones colaborativas de textos en línea. Coordinadora: Amelia Sanz Cabrerizo.",
		"name=Traductoras de la Edad de Plata&Id1=6&Desc1=Mujer&Id2=2&Desc2=Traductor",
		"imagenes/COLECCION3.png"
		),
		
	new CollectionElem(
		6,
		"Muertos en conflicto (1936-1939)",
		"Esta colección reúne a aquellos autores raros y olvidados que fallecieron por distintas causas durante la Guerra Civil. Se utiliza la herramienta Google Maps para localizar los lugares de fallecimiento. Coordinador: José Miguel González Soriano.",
		"name=Muertos en conflicto (1936-1939)&Id1=5&Desc1=1936&Or1=true&Id2=5&Desc2=1938&Or2=true&Id3=5&Desc3=1939&Or3=true&Id4=5&Desc4=1937&Or4=true",
		"imagenes/COLECCION4.png"
		),
		
	new CollectionElem(
		7,
		"Autores en exilio",
		"Esta colección reúne escritores que sufrieron el exilio tras la Guerra Civil. Se utiliza la herramienta Google Maps para localizar los espacios del exilio. Coordinadora: Lucía Cotarelo Esteban.",
		"name=Autores en exilio&Id1=3&Desc1=Sí",
		"imagenes/COLECCION5.png"
		),

	new CollectionElem(
		8,
		"Protociencia-ficción",
		"Esta colección reúne los textos de la “Biblioteca de Protociencia-ficción Agustín Jaureguizar” que han sido digitalizados por la Biblioteca UCM. Se aportan datos y metadatos externos a Mnemosine. Coordinadora: Marta Correa Román.",
		"name=Protociencia-ficción&Id1=9&Desc1=ficción&Id2=9&Desc2=Protociencia",
		"imagenes/COLECCION6.png"
		),

	new CollectionElem(
		9,
		"Diálogos literarios",
		"Esta colección reúne los textos dialogados que se publicaron durante la Edad de Plata. Se fomenta así la colaboración con el Grupo de Investigación UCM Dyalogica y su Biblioteca Digital del Diálogo Hispánico. Coordinadora: Mª Jesús Fraga.",
		"name=Diálogos literarios&Id1=0&Desc1=Dialogos",
		"imagenes/COLECCION7.png"
		),

	new CollectionElem(
		10,
		"Literatura de compromiso político-social",
		"En esta colección se pueden catalogar textos y colecciones de quiosco pertenecientes a este subgénero. Por ahora solo se muestran completas las colecciones La Novela Roja (1922-23), La Novela Proletaria (1932-33), Tesoro de la Literatura Revolucionaria (1933) y parcialmente El Cuento Semanal (1907-8). Pendiente de asignar coordinador.",
		"name=Literatura de compromiso político-social&Id1=56523&Desc1=209021&Or1=true&Id2=56523&Desc2=209006&Or2=true&Id3=56523&Desc3=209020&Or3=true&Id4=56523&Desc4=209009&Or4=true",
		"imagenes/COLECCION8.png"
		),
		
	new CollectionElem(
		11,
		"Literatura de Quiosco",
		"La literatura vendida en los quioscos gozó de gran éxito de público. Esta colección irá recogiendo el legado de buena parte de estas colecciones. Encargado de la colección Jeffrey Zamostny",
		"name=Literatura de Quiosco&Id1=56523&Desc1=209021&Or1=true&Id2=56523&Desc2=209006&Or2=true&Id3=56523&Desc3=209020&Or3=true&Id4=56523&Desc4=209009&Or4=true&Id5=56523&Desc5=209015&Or5=true&Id6=56523&Desc6=209016&Or6=true&Id7=56523&Desc7=209017&Or7=true&Id8=56523&Desc8=209019&Or8=true&Id9=56523&Desc9=209024&Or9=true&Id10=56523&Desc10=209025&Or10=true&Id11=56523&Desc11=209040&Or11=true",
		"imagenes/COLECCION3.png"
		),
		
		new CollectionElem(
		12,
		"Carmen de Burgos",
		"Es una colección de los libros publicados por una autora individual. Coordinador: Pendiente de asignar.",
		"name=Carmen de Burgos&Id1=1&Desc1=Carmen&Id2=1&Desc2=Burgos",
		"imagenes/COLECCION9.png"
		),
		
			new CollectionElem(
		13,
		"Libros digitalizados Edad de Plata",
		"Libros con referencia a edición digital del mismo. Coordinador: Pendiente de asignar.",
		"name=Libros digitalizados&Id1=56546&Desc1=*",
		"imagenes/COLECCION5.png"
		)
		
	);
	
	
	
	$CollectionArrayA=new CollectionArray($CollectionArrayAL);

?>