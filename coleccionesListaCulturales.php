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
		"imagenes/1IntelectualesB.png"
		),
        new CollectionElem(
            2,
            "Traductoras de la Edad de Plata",
            "Esta colección reúne a un grupo de mujeres que publicaron en español traducciones de autores extranjeros. Se utiliza la herramienta @Note para realizar anotaciones colaborativas de textos en línea. Coordinadora: Amelia Sanz Cabrerizo.",
            "name=Traductoras de la Edad de Plata&q=genero:mujer %26%26 tipoderelacion:traductor",
            "imagenes/2.%20M-Traductoras.png"
        ),
        new CollectionElem(
            3,
            "Literatura Lesbica",
            "Coleccion Literatura Lesbica. Coordinador: Ángela Ena y Patricia Barrera.",
            "name=Literatura Lesbica&q=subcoleccion:lesbica",
            "imagenes/3.%20Lit%20lésbica.png"
        ),
        new CollectionElem(
            4,
            "Literatura Femenina en Índice Literario",
            "Literatura Femenina en Índice Literario. Coordinador: Juana Maria González García.",
            "name=Índice Literario&q=reseadaen:indice AND reseadaen:literario",
            "imagenes/4.%20Lit%20femen%20indice%20literario.png"
        ),
        new CollectionElem(
            5,
            "Literatura infantil",
            "Esta colección es resultado de la investigación del proyecto &quot;eLITE-CM: Edición Literaria Electrónica&quot; (Ref. H2015/HUM-3426), financiado por el Programa de Actividades de I+D entre grupos de investigación de la Comunidad de Madrid en Ciencias Sociales y Humanidades. Coordinadoras: Alicia Reina y Mª Jesús Fraga.",
            "name=Literatura infantil&q=materia:%22literatura?infantil%22 OR coleccionenmnemosine:%22literatura?infantil%22",
            "imagenes/5.%20Lit-Infantil%20y%20J.png"
        ),
        new CollectionElem(
            6,
            "Cuentos de Calleja",
            "Cuentos de Calleja. Coordinador: Mª Jesús Fraga.",
            "name=Cuentos de Calleja&q=subcoleccion:calleja",
            "imagenes/6.%20Calleja.png"
        ),
        new CollectionElem(
            7,
            "Diálogos literarios",
            "Esta colección reúne los textos dialogados que se publicaron durante la Edad de Plata. Se fomenta así la colaboración con el Grupo de Investigación UCM Dyalogica y su Biblioteca Digital del Diálogo Hispánico. Coordinadora: Mª Jesús Fraga.",
            "name=Diálogos literarios&q=dialogos OR generoliterario:dialogo",
            "imagenes/7.Dialogos.png"
        ),
        new CollectionElem(
            8,
            "Protociencia-ficción",
            "Esta colección reúne los textos de la “Biblioteca de Protociencia-ficción Agustín Jaureguizar” que han sido digitalizados por la Biblioteca UCM. Se aportan datos y metadatos externos a Mnemosine. Coordinadora: Marta Correa Román.",
            "name=Protociencia-ficción&q=materia:protociencia AND materia:Ficci?n",
            "imagenes/8.%20Protocienciaficcion.png"
        ),
        new CollectionElem(
            9,
            "Literatura de Quiosco",
            "La literatura vendida en los quioscos gozó de gran éxito de público. Esta colección irá recogiendo el legado de buena parte de estas colecciones. Encargado de la colección Jeffrey Zamostny",
            "name=Literatura de Quiosco&q=tipodecoleccion:quiosco",
            "imagenes/9.%20Lit%20de%20Quiosco.png"
        ),
        new CollectionElem(
            10,
            "Literatura de compromiso político-social",
            "En esta colección se pueden catalogar textos y colecciones de quiosco pertenecientes a este subgénero. Por ahora solo se muestran completas las colecciones La Novela Roja (1922-23), La Novela Proletaria (1932-33), Tesoro de la Literatura Revolucionaria (1933) y parcialmente El Cuento Semanal (1907-8). Pendiente de asignar coordinador.",
            "name=Literatura de compromiso político-social&q=clavy_id:59600 OR clavy_id:59614 OR clavy_id:59601 OR clavy_id:59596",
            "imagenes/10.%20compromisopolitico.png"
        ),
        new CollectionElem(
            11,
            "Fondo Fernando Eguidazu ",
            "Fondo Fernando Eguidazu de Novela Popular Española. Coordinador:  Dolores Romero López.",
            "name=Fondo Fernando Eguidazu&q=subcoleccion:CFENPE",
            "imagenes/11.Fondo%20Eguidazu.png"
        ),
        new CollectionElem(
            12,
            "Instituto Iberoamericano de Berlín",
            "Instituto Iberoamericano de Berlín. Coordinador:  Dolores Romero López.",
            "name=Instituto Iberoamericano de Berlín&q=localizaciondelfondo:Berlin",
            "imagenes/12.Iberoamericano%20deBErlin.png"
        ),
        new CollectionElem(
            13,
            "Bohemia Literaria",
            "Coleccion Bohemia Literaria. Coordinador: Sofia Nicolas Díez.",
            "name=Bohemia Literaria&q=subcoleccion:'Bohemia Literaria'",
            "imagenes/13.Bohemia.png"
        ),
        new CollectionElem(
            14,
            "Muertos en conflicto (1936-1939)",
            "Esta colección reúne a aquellos autores raros y olvidados que fallecieron por distintas causas durante la Guerra Civil. Se utiliza la herramienta Google Maps para localizar los lugares de fallecimiento. Coordinador: José Miguel González Soriano.",
            "name=Muertos en conflicto (1936-1939)&q=fechademuerte:/193[6789]/",
            "imagenes/14.muertos%20en%20conflicto.png"
        ),
        new CollectionElem(
            15,
            "Autores en exilio",
            "Esta colección reúne escritores que sufrieron el exilio tras la Guerra Civil. Se utiliza la herramienta Google Maps para localizar los espacios del exilio. Coordinadora: Lucía Cotarelo Esteban.",
            "name=Autores en exilio&q=exilio:S?",
            "imagenes/15.Exilio.png"
        ),
        new CollectionElem(
            16,
            "Memorias de Exiliadas",
            "Memorias de escritoras exiliadas tras la Guerra Civil. Coordinador: Begoña Camblor Pandiella.",
            "name=Memorias de Exiliadas&q=subcoleccion:exiliadas",
            "imagenes/16.MemoriasExiliadas.png"
        ),
        new CollectionElem(
            17,
            "Madrid en la Literatura de la Edad de Plata",
            "Esta colección es resultado de la investigación del proyecto &quot;eLITE-CM: Edición Literaria Electrónica&quot; (Ref. H2015/HUM-3426), financiado por el Programa de Actividades de I+D entre grupos de investigación de la Comunidad de Madrid en Ciencias Sociales y Humanidades. Coordinador: José Miguel González Soriano",
            "name=Madrid en la Literatura de la Edad de Plata&q=lugardepublicacion:madrid",
            "imagenes/17.Madrid.png"
        ),
        new CollectionElem(
            18,
            "Autores Extremeños",
            "Autores de la Edad de Plata nacidos en Extremadura. Coordinador: Guadalupe Nieto Caballero.",
            "name=Autores Extremeños&q=coleccionenmnemosine:%22extremenos%22",
            "imagenes/18.EscriExtremeños.png"
        ),
        new CollectionElem(
            19,
            "Carmen de Burgos",
            "Es una colección de los libros publicados por una autora individual. Coordinador: Pendiente de asignar.",
            "name=Carmen de Burgos&q=REL:62598",
            "imagenes/19.CarmenBurgos.png"
        ),
        new CollectionElem(
            20,
            "Luis Bello",
            "Es una colección de los libros publicados por un autor individual. Coordinador: Pendiente de asignar.",
            "name=Luis Bello&q=REL:61030",
            "imagenes/20LuisBello.png"
        )
	);
	

	$CollectionArrayA=new CollectionArray($CollectionArrayAL);

?>