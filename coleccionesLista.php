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
		"name=Mujeres intelectuales de la edad de plata&q=genero:mujer",
		"imagenes/COLECCION1.png"
		),
	new CollectionElem(
		2,
		"Literatura infantil",
		"Esta colección es resultado de la investigación del proyecto &quot;eLITE-CM: Edición Literaria Electrónica&quot; (Ref. H2015/HUM-3426), financiado por el Programa de Actividades de I+D entre grupos de investigación de la Comunidad de Madrid en Ciencias Sociales y Humanidades. Coordinadoras: Alicia Reina y Mª Jesús Fraga.",
		"name=Literatura infantil&q=materia:%22literatura?infantil%22 OR coleccionenmnemosine:%22literatura?infantil%22",
		"imagenes/COLECCION9.png"
		),
	new CollectionElem(
		3,
		"Madrid en la Literatura de la Edad de Plata",
		"Esta colección es resultado de la investigación del proyecto &quot;eLITE-CM: Edición Literaria Electrónica&quot; (Ref. H2015/HUM-3426), financiado por el Programa de Actividades de I+D entre grupos de investigación de la Comunidad de Madrid en Ciencias Sociales y Humanidades. Coordinador: José Miguel González Soriano",
		"name=Madrid en la Literatura de la Edad de Plata&q=lugardepublicacion:madrid",
		"imagenes/COLECCION8.png"
		),
	new CollectionElem(
		4,
		"Edad de Plata Interactiva",
		"Esta colección es resultado de la investigación del proyecto eLITE-CM: Edición Literaria Electrónica (Ref. H2015/HUM-3426), financiado por el Programa de Actividades de I+D entre grupos de investigación de la Comunidad de Madrid en Ciencias Sociales y Humanidades. Coordinadora: Alicia Reina Navarro",
		"name=Edad de Plata Interactiva&q=serieocoleccion:%22Edad de Plata%22 OR serieocoleccion:%22Col. sobre La Mujer Moderna%22",
		"imagenes/COLECCION6.png"
		),
		
	new CollectionElem(
		5,
		"Traductoras de la Edad de Plata",
		"Esta colección reúne a un grupo de mujeres que publicaron en español traducciones de autores extranjeros. Se utiliza la herramienta @Note para realizar anotaciones colaborativas de textos en línea. Coordinadora: Amelia Sanz Cabrerizo.",
		"name=Traductoras de la Edad de Plata&q=genero:mujer %26%26 tipoderelacion:traductor",
		"imagenes/COLECCION3.png"
		),
		
	new CollectionElem(
		6,
		"Muertos en conflicto (1936-1939)",
		"Esta colección reúne a aquellos autores raros y olvidados que fallecieron por distintas causas durante la Guerra Civil. Se utiliza la herramienta Google Maps para localizar los lugares de fallecimiento. Coordinador: José Miguel González Soriano.",
		"name=Muertos en conflicto (1936-1939)&q=fechademuerte:/193[6789]/",
		"imagenes/COLECCION4.png"
		),
		
	new CollectionElem(
		7,
		"Autores en exilio",
		"Esta colección reúne escritores que sufrieron el exilio tras la Guerra Civil. Se utiliza la herramienta Google Maps para localizar los espacios del exilio. Coordinadora: Lucía Cotarelo Esteban.",
		"name=Autores en exilio&q=exilio:S?",
		"imagenes/COLECCION5.png"
		),

	new CollectionElem(
		8,
		"Protociencia-ficción",
		"Esta colección reúne los textos de la “Biblioteca de Protociencia-ficción Agustín Jaureguizar” que han sido digitalizados por la Biblioteca UCM. Se aportan datos y metadatos externos a Mnemosine. Coordinadora: Marta Correa Román.",
		"name=Protociencia-ficción&q=materia:protociencia AND materia:Ficci?n",
		"imagenes/COLECCION6.png"
		),

	new CollectionElem(
		9,
		"Diálogos literarios",
		"Esta colección reúne los textos dialogados que se publicaron durante la Edad de Plata. Se fomenta así la colaboración con el Grupo de Investigación UCM Dyalogica y su Biblioteca Digital del Diálogo Hispánico. Coordinadora: Mª Jesús Fraga.",
		"name=Diálogos literarios&q=dialogos OR generoliterario:dialogo",
		"imagenes/COLECCION7.png"
		),

	new CollectionElem(
		10,
		"Literatura de compromiso político-social",
		"En esta colección se pueden catalogar textos y colecciones de quiosco pertenecientes a este subgénero. Por ahora solo se muestran completas las colecciones La Novela Roja (1922-23), La Novela Proletaria (1932-33), Tesoro de la Literatura Revolucionaria (1933) y parcialmente El Cuento Semanal (1907-8). Pendiente de asignar coordinador.",
		"name=Literatura de compromiso político-social&q=clavy_id:59600 OR clavy_id:59614 OR clavy_id:59601 OR clavy_id:59596",
		"imagenes/COLECCION8.png"
		),
		
	new CollectionElem(
		11,
		"Literatura de Quiosco",
		"La literatura vendida en los quioscos gozó de gran éxito de público. Esta colección irá recogiendo el legado de buena parte de estas colecciones. Encargado de la colección Jeffrey Zamostny",
		"name=Literatura de Quiosco&q=tipodecoleccion:quiosco",
		"imagenes/COLECCION3.png"
		),
		
		new CollectionElem(
		12,
		"Carmen de Burgos",
		"Es una colección de los libros publicados por una autora individual. Coordinador: Pendiente de asignar.",
		"name=Carmen de Burgos&q=REL:62598",
		"imagenes/COLECCION9.png"
		),
		
			new CollectionElem(
		13,
		"Libros digitalizados Edad de Plata",
		"Libros con referencia a edición digital del mismo. Coordinador: Pendiente de asignar.",
		"name=Libros digitalizados&q=link:/.*/",
		"imagenes/COLECCION5.png"
		),
		
		new CollectionElem(
		14,
		"Poetas mujeres de la Edad de Plata",
		"Poetas mujeres de la Edad de Plata. Coordinador: Dolores Romero López.",
		"name=Poetas mujeres de la Edad de Plata&q=genero:mujer AND generosliterariosquecultiva:Poeta",
		"imagenes/COLECCION1.png"
		),
		
		new CollectionElem(
		15,
		"Bohemia Literaria",
		"Coleccion Bohemia Literaria. Coordinador: Sofia Nicolas Díez.",
		"name=Bohemia Literaria&q=subcoleccion:'Bohemia Literaria'",
		"imagenes/COLECCION3.png"
		),
		
		new CollectionElem(
		15,
		"Literatura Lesbica",
		"Coleccion Literatura Lesbica. Coordinador: Ángela Ena y Patricia Barrera.",
		"name=Literatura Lesbica&q=subcoleccion:lesbica",
		"imagenes/COLECCION5.png"
		),
		
		new CollectionElem(
		16,
		"Literatura Femenina en Índice Literario",
		"Literatura Femenina en Índice Literario. Coordinador: Juana Maria González García.",
		"name=Índice Literario&q=reseadaen:indice AND reseadaen:literario",
		"imagenes/COLECCION4.png"
		),
		
		new CollectionElem(
		17,
		"Fondo Fernando Eguidazu ",
		"Fondo Fernando Eguidazu de Novela Popular Española. Coordinador:  Dolores Romero López.",
		"name=Fondo Fernando Eguidazu&q=subcoleccion:CFENPE",
		"imagenes/COLECCION1.png"
		),
		
		new CollectionElem(
		18,
		"Instituto Iberoamericano de Berlín",
		"Instituto Iberoamericano de Berlín. Coordinador:  Dolores Romero López.",
		"name=Instituto Iberoamericano de Berlín&q=localizaciondelfondo:Berlin",
		"imagenes/COLECCION3.png"
		),
		
		new CollectionElem(
		19,
		"Memorias de Exiliadas",
		"Memorias de escritoras exiliadas tras la Guerra Civil. Coordinador: Begoña Camblor Pandiella.",
		"name=Memorias de Exiliadas&q=subcoleccion:exiliadas",
		"imagenes/COLECCION4.png"
		),
		
		new CollectionElem(
		20,
		"Cuentos de Calleja",
		"Cuentos de Calleja. Coordinador: Mª Jesús Fraga.",
		"name=Cuentos de Calleja&q=subcoleccion:calleja",
		"imagenes/COLECCION5.png"
		),
		
		new CollectionElem(
		21,
		"Publicaciones Periódicas",
		"Publicaciones Periódicas.",
		"name=Publicaciones Periódicas&q=coleccionenmnemosine:%22publicaciones periódicas%22",
		"imagenes/COLECCION1.png"
		),
		
		new CollectionElem(
		22,
		"Autores Extremeños",
		"Autores Extremeños. Coordinador: Guadalupe Nieto Caballero.",
		"name=Autores Extremeños&q=coleccionenmnemosine:%22Autores extremeños%22",
		"imagenes/COLECCION3.png"
		),

		
	);
	
	
	
	$CollectionArrayA=new CollectionArray($CollectionArrayAL);

?>