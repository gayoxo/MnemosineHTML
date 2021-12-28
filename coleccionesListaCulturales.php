<?php
class CollectionElem
{
	
	public $Numer =0; 
	public $Nombre =""; 
	public $Descripcion =""; 
	public $Datos ="";
	public $Imagen ="";
    public $Order ="";
	
    
	public function __construct($Numer, $Nombre, $Descripcion, $Datos, $Imagen, $Order="DES" ){
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
		"Mujeres intelectuales",
		"Escritoras cuyas publicaciones van diseñando los perfiles de la nueva mujer del siglo XX",
		"name=Mujeres intelectuales&q=genero:mujer",
		"imagenes/1IntelectualesB.png",
		),
        new CollectionElem(
            2,
            "Traductoras",
            "Traductoras españolas cuya labor puso en valor la literatura universal entre los lectores del primer tercio del siglo XX. Coord. Amelia Sanz",
            "name=Traductoras&q=genero:mujer %26%26 tipoderelacion:traductor",
            "imagenes/2.%20M-Traductoras.png",
        ),
        new CollectionElem(
            3,
            "Literatura Lésbica",
            "Obras de ficción al margen de lo convencional que la censura social y la autocensura convertía en invisible. Coordinadoras: Ángela Ena Bordonada y Patricia Barrera Velasco",
            "name=Literatura Lésbica&q=subcoleccion:lesbica",
            "imagenes/3.%20Lit%20lesbica.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            4,
            "Literatura Femenina en Índice Literario",
            "Reseñas de obras literarias escritas por mujeres entre 1932 -1936 y publicadas en la revista Índice Literario. Coord. Juana María González",
            "name=Índice Literario&q=reseadaen:indice AND reseadaen:literario",
            "imagenes/4.%20Lit%20femen%20indice%20literario.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            5,
            "Literatura infantil",
            "La literatura infantil y juvenil va tomando cuerpo en el último cuarto del siglo XIX y conoce un amplio desarrollo en el XX. Coord. Mª Jesús Fraga",
            "name=Literatura infantil&q=materia:%22literatura?infantil%22 OR coleccionenmnemosine:%22literatura?infantil%22",
            "imagenes/5.%20Lit-Infantil%20y%20J.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            6,
            "Cuentos de Calleja",
            "Esta colección recoge algunos cuentos publicados por Saturnino Calleja durante la Edad de Plata. Coord. Mª Jesús Fraga",
            "name=Cuentos de Calleja&q=subcoleccion:calleja",
            "imagenes/6.%20Calleja.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            7,
            "Diálogos literarios",
            "Gracias al auge de la prensa literaria, el diálogo breve vivió un momento de esplendor también durante la Edad de Plata. Coord. Mª Jesús Fraga",
            "name=Diálogos literarios&q=dialogos OR generoliterario:dialogo",
            "imagenes/7.Dialogos.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            8,
            "Protociencia-ficción",
            "La colección contiene 185 obras catalogadas y digitalizadas gracias a la aportación del fondo de Agustín Jaureguizar. Coord. Marta Correa",
            "name=Protociencia-ficción&q=materia:protociencia AND materia:Ficci?n",
            "imagenes/8.%20Protocienciaficcion.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            9,
            "Literatura de Quiosco",
            "El quiosco fue un nodo para la difusión de abundantes colecciones literarias de gran tirada que se vendían a precios asequibles. Coord. Jeffrey Zamostny",
            "name=Literatura de Quiosco&q=tipodecoleccion:quiosco",
            "imagenes/9.%20Lit%20de%20Quiosco.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            10,
            "Literatura de compromiso político",
            "La literatura, hecho social por definición, se hará eco de tales circunstancias en una serie de obras con intencionalidad política. Coords. Gonzalo Santonja y José Miguel González Soriano",
            "name=Literatura de compromiso político&q=clavy_id:59600 OR clavy_id:59614 OR clavy_id:59601 OR clavy_id:59596",
            "imagenes/10.%20compromisopolitico.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            11,
            "Fondo Fernando Eguidazu ",
            "El presente fondo cuenta con 295 títulos diferentes de colecciones literarias publicadas entre 1900 y 1936. Coord. Dolores Romero",
            "name=Fondo Fernando Eguidazu&q=subcoleccion:CFENPE",
            "imagenes/11.Fondo%20Eguidazu.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            12,
            "Instituto Iberoamericano de Berlín",
            "Esta colección pretende ser un reconocimiento a las instituciones que albergan legados culturales españoles fuera de nuestras fronteras. Coord. Dolores Romero",
            "name=Instituto Iberoamericano de Berlín&q=localizaciondelfondo:Berlin",
            "imagenes/12.Iberoamericano%20deBErlin.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            13,
            "Bohemia Literaria",
            "Esta colección reúne obras de autores que pertenecieron o conocieron la bohemia. Coord. Sofía Nicolás Díez.",
            "name=Bohemia Literaria&q=subcoleccion:'Bohemia Literaria'",
            "imagenes/13.Bohemia.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            14,
            "Escritores muertos en tiempos de Guerra",
            "En esta colección se incluyen todos aquellos autores presentes en Mnemosine que murieron durante la Guerra Civil. Coord. Antonella Russo",
            "name=Escritores muertos en tiempos de Guerra&q=fechademuerte:/193[6789]/",
            "imagenes/14.muertos%20en%20conflicto.png"
        ),
        new CollectionElem(
            15,
            "Autores en exilio",
            "Esta colección reúne escritores y obras del exilio republicano español de 1939. Coord. Lucía Cotarelo",
            "name=Autores en exilio&q=exilio:S?",
            "imagenes/15.Exilio.png"
        ),
        new CollectionElem(
            16,
            "Memorias de Exiliadas",
            "Datos y metadatos relacionados con textos memorialísticos escritos por mujeres en los que se recoge el relato de sus vivencias en el exilio.  Coord. Begoña Camblor",
            "name=Memorias de Exiliadas&q=subcoleccion:exiliadas",
            "imagenes/16.MemoriasExiliadas.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            17,
            "Madrid en la Literatura de la Edad de Plata",
            "Madrid tuvo un lugar muy destacado en la producción literaria de la Edad de Plata. Coord. Inmaculada Plaza",
            "name=Madrid en la Literatura de la Edad de Plata&q=lugardepublicacion:madrid",
            "imagenes/17.Madrid.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            18,
            "Autores Extremeños",
            "Rescate de escritores extremeños que viven y escriben durante la Edad de Plata. Coord. Guadalupe Nieto",
            "name=Autores Extremeños&q=coleccionenmnemosine:%22extremenos%22",
            "imagenes/18.EscriExtremeños.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            19,
            "Carmen de Burgos",
            "Esta colección contiene una extensa red de datos biográficos y referencias bibliográficas de Carmen de Burgos. Coord. José Miguel González Soriano y Dolores Romero López",
            "name=Carmen de Burgos&q=REL:62598",
            "imagenes/19.CarmenBurgos.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            20,
            "Luis Bello",
            "Colección que recoge la producción individual del escritor Luis Bello, cronista de la Edad de Plata. Coord. José Miguel González Soriano",
            "name=Luis Bello&q=REL:61030",
            "imagenes/20LuisBello.png",
            "fechadepublicacion"
        )
	);
	

	$CollectionArrayA=new CollectionArray($CollectionArrayAL);

?>