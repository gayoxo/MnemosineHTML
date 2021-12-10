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
		"Los estudios sobre memoria histórica han puesto en marcha dinámicas de género permitiendo rescatar la valiosa labor desarrollada por las escritoras modernas. En esta colección se encuentran nombres, datos, metadatos y enlaces a obras que fueron escritas por mujeres. En general son figuras nuevas junto a otras ya rescatadas y reconocidas. Todas ellas ponen voz al devenir cultural de este periodo y transmiten sus ideas para que otros las lean y valoren. Se trata de un conjunto heterogéneo de autoras y obras que abarca todos los géneros y en el que también aparecen algunas escritoras extranjeras, traducidas y leídas en la época. Aflora el discurso de unas mujeres –escritoras e intelectuales– que, en sus libros de ensayo y obras de ficción, van conformando los perfiles de la nueva mujer del siglo XX, desde su plano más íntimo al espacio público. Coordinadora: Dolores Romero López",
		"name=Mujeres intelectuales&q=genero:mujer",
		"imagenes/1IntelectualesB.png",
		),
        new CollectionElem(
            2,
            "Traductoras",
            "Mucho antes de la profesionalización de la traducción, algunas mujeres españolas vieron en la tarea de traducir una labor que les facilitaba su sustento y cierto reconocimiento público por su colaboración con la literatura. Aún tenemos escasos datos sobre sus vidas porque son casi anónimas; pero nos legaron magníficas traducciones de clásicos como a los modernos. Esta colección rescata sus nombres propios y en algunos casos sus datos vitales; también se da acceso a algunos de los recursos localizados. La digitalización de libros, publicaciones periódicas y archivos está permitiendo encontrar sus huellas, dibujar sus perfiles, recuperar sus contribuciones a aquella y a esta España. En esta colección se va dando cuenta de las obras producidas por traductoras de la Edad de Plata: de ellas y de los autores que les sirvieron de fuente, de los originales y de sus traducciones, de las conexiones de estas mujeres en el mundo de la cultura. Es un trabajo de colaboración entre profesores y estudiantes que realizan sus investigaciones sobre estas traductoras. Destacamos la labor de rescate de datos biográficos de alguna de ellas llevada a cabo por alumnos de la Universidad de Mayores de la Universidad Complutense de Madrid. Es la labor de aquellas mujeres ahora de todos y para todos. Coordinadora: Amelia Sanz Cabrerizo.",
            "name=Traductoras&q=genero:mujer %26%26 tipoderelacion:traductor",
            "imagenes/2.%20M-Traductoras.png",
        ),
        new CollectionElem(
            3,
            "Literatura Lesbica",
            "Desde hace algunos años, la crítica académica se ha ido interesando por la literatura de temática homosexual, pero todavía queda mucho camino en la –no siempre fácil- localización de los textos y en la comprensión de la representación de una sexualidad distinta a la norma heterosexual, más todavía si se trata específicamente de la condición lésbica. Esta colección abre camino en la configuración progresiva de un corpus que permita establecer los rasgos distintivos de la literatura que, en la Edad de Plata española, incorpora las relaciones entre mujeres desde un punto de vista afectivo, sentimental e identitario, no siempre estrictamente erótico, aunque pueda incluir también este elemento. La colección presenta obras de ficción –narraciones y obras de teatro- cuyas autoras y autores superan el reto de mostrar una afectividad entre mujeres, al margen de lo convencional en el primer tercio del siglo XX, que la censura social y la autocensura convertía en invisible, cuando no en marginada. Coordinadoras: Ángela Ena Bordonada y Patricia Barrera Velasco",
            "name=Literatura Lesbica&q=subcoleccion:lesbica",
            "imagenes/3.%20Lit%20lésbica.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            4,
            "Literatura Femenina en Índice Literario",
            "La colección da a conocer obras literarias escritas por mujeres publicadas en España entre 1932 y 1936 y reseñadas en la revista Índice Literario. Esta revista fue el principal fruto editorial de la sección “Archivos de Literatura Española Contemporánea” del Centro de Estudios Históricos (1910-1939), dirigida por Pedro Salinas. El diseño de los metadatos específicos de la ficha para la colección tiene en cuenta los datos bibliográficos de las obras reseñadas, la ubicación de las reseñas dentro de la revista, los datos de las reseñas y los datos sobre la propia revista Índice. Este modelo de datos permite búsquedas cruzadas de gran interés como, por ejemplo, la de los medios de comunicación que más se interesaron por la obra literaria de mujeres de la Edad de Plata o las editoriales más importantes de la realidad cultural española de los años 30. Coordinadora: Juana María González",
            "name=Índice Literario&q=reseadaen:indice AND reseadaen:literario",
            "imagenes/4.%20Lit%20femen%20indice%20literario.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            5,
            "Literatura infantil",
            "La literatura infantil y juvenil va tomando cuerpo en el último cuarto del siglo XIX y conoce un amplio desarrollo en el XX. Ello es debido al progresivo asentamiento en la sociedad de la concepción de la infancia como una etapa específica del desarrollo humano que, como tal, requiere de una literatura propia, sin olvidar que algunas de las obras clásicas de este género fueron creadas por sus autores para un lector adulto y muchas otras, como los cuentos de hadas, fueron resultado del interés de ciertos estudiosos por registrar por escrito antiguos cuentos orales. Esta colección recoge una buena muestra de libros instructivos (Telémaco, los cuentos del canónigo Schmid, La buena Juanita), adaptaciones de cuentos de hadas (Andersen, Grimm), clásicos juveniles (Verne, Salgari) y una significativa muestra de las colecciones de cuentos de la editorial de Saturnino Calleja, su fundador, director y auténtico democratizador de la literatura infantil en España.  Coordinadora: Mª Jesús Fraga",
            "name=Literatura infantil&q=materia:%22literatura?infantil%22 OR coleccionenmnemosine:%22literatura?infantil%22",
            "imagenes/5.%20Lit-Infantil%20y%20J.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            6,
            "Cuentos de Calleja",
            "Cuentos de Calleja. Coordinador: Mª Jesús Fraga.",
            "name=Cuentos de Calleja&q=subcoleccion:calleja",
            "imagenes/6.%20Calleja.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            7,
            "Diálogos literarios",
            "El diálogo literario, un género practicado desde los orígenes de la literatura, tuvo en España su época más prolífica y brillante durante el Renacimiento. Gracias al auge que la prensa literaria experimentó a finales del siglo XIX, el diálogo breve se vivificó compitiendo con otros géneros periodísticos gracias a su versatilidad y su capacidad didáctica desde la perspectiva de la risa y de la ironía. Una buena parte de estos diálogos fueron recopilados en libros, de los que esta colección contiene todavía un número limitado. Por el contrario, la parte más numerosa está constituida por un conjunto de textos dialogados en prosa publicados en la prensa española del fin de siglo (procedentes de veintiuna publicaciones, dieciséis de las cuales se analizan en la totalidad de sus números). Una gran parte de los textos tienen carácter satírico, lo que parcialmente se debe al importante auge de las revistas festivas. Otro importante grupo de diálogos se consideran de perfil costumbrista, y un tercero, filosófico. Coordinadora: Mª Jesús Fraga",
            "name=Diálogos literarios&q=dialogos OR generoliterario:dialogo",
            "imagenes/7.Dialogos.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            8,
            "Protociencia-ficción",
            "La colección de protociencia-ficción de la biblioteca digital Mnemosine contiene 185 obras catalogadas y digitalizadas gracias a la biblioteca privada de Agustín Jaureguizar, quien cedió temporalmente sus fondos a la UCM. La literatura española de ciencia-ficción surge en el siglo XIX, concretamente, con la aparición de zarzuelas ambientadas en el espacio exterior, como sucede en Viaje somniaéreo a la luna, o Zulema y Lambert (1832), fruto, quizás, del exotismo romántico. Progresivamente, los elementos propios de la ciencia-ficción evolucionan hasta dirigir el eje argumental de las novelas. Este es el caso del Anacronópete (1887), de Enrique Gaspar, primera novela en la que aparece la máquina del tiempo. Asimismo, podemos encontrar una rica variedad de temas, entre los que destacan la distopía (“Mecanópolis” de Unamuno); la novela científica (Un viaje a Cerebrópolis, de Giné y Partagás) o la novela de espías que incluye elementos de la ciencia-ficción (Después del gas, de David Arias). Coordinadora: Marta Correa",
            "name=Protociencia-ficción&q=materia:protociencia AND materia:Ficci?n",
            "imagenes/8.%20Protocienciaficcion.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            9,
            "Literatura de Quiosco",
            "En el primer tercio del siglo XX el quiosco fue un nodo para la difusión de abundantes colecciones literarias de gran tirada que se vendían a precios asequibles para el entretenimiento de las masas. La Colección de Literatura de Quiosco ofrece metadatos correspondientes a un número considerable de las colecciones que se multiplicaron tras el éxito de El Cuento Semanal (1907-1912) y que llegaron a publicar una enorme cantidad de textos novelísticos, teatrales, eróticos, políticos y cinematográficos, escritos por hombres y mujeres. De momento, la Colección contiene información sobre aproximadamente 350 series, la mayoría de ellas con ejemplares físicos en la Colección Ricardo Donoso-Cortés y Mesonero-Romanos de Literatura de Quiosco, albergada desde 2011 en la Universidad de California-Los Ángeles. En un futuro próximo, se espera importar los metadatos de casi 9.500 títulos específicos pertenecientes a estas colecciones e impulsar la digitalización de más textos impresos. Se abre así un amplio panorama sobre la cultura popular de la Edad de Plata. Coordinador: Jeffrey Zamostny",
            "name=Literatura de Quiosco&q=tipodecoleccion:quiosco",
            "imagenes/9.%20Lit%20de%20Quiosco.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            10,
            "Literatura de compromiso político",
            "En una época de profundas transformaciones y de contrastes entre tradición y modernidad, de conciencia de crisis a nivel social e institucional, de agitaciones en la política, la economía y la cultura en España y en el resto de Europa, como lo fue el primer tercio del siglo XX, los escritores se ven impelidos a \“comprometerse\”, es decir, a tomar partido frente al nuevo orden sobre el cual se configura la sociedad. La literatura, hecho social por definición, se hará eco de tales circunstancias en una serie de obras con un mayor o menor grado de intencionalidad política, reflejo de la diversa personalidad e ideología de algunos de sus autores, y a través de colecciones literarias cuya inspiración política resulta uniforme y explícita. La presente colección muestra aquellos títulos recogidos en Mnemosine cuya temática o identidad ideológica queda catalogada bajo el término conceptual de \“político-social\”. COORDINADORES: Gonzalo Santonja y José Miguel González Soriano.",
            "name=Literatura de compromiso político&q=clavy_id:59600 OR clavy_id:59614 OR clavy_id:59601 OR clavy_id:59596",
            "imagenes/10.%20compromisopolitico.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            11,
            "Fondo Fernando Eguidazu ",
            "Este fondo de colecciones literarias publicadas entre 1900 y 1936 cuenta con 295 títulos diferentes. Considerada como literatura de quiosco, la colección Fernando Eguidazu de novela popular española está ubicada en el Instituto Iberoamericano de Berlín y lleva el nombre de quien durante muchos lustros coleccionó por afición ejemplares en su mayor parte publicados en Barcelona y en Madrid. Aquí solo se encuentran las referencias a los títulos de las colecciones, pero no a los ejemplares que integran cada una de ellas. Es un trabajo de catalogación y colaboración institucional en marcha con resultados prometedores. Entre los metadatos destacamos el lugar de publicación, el precio, los talleres y casas editoriales El género literario que predomina es el narrativo –cuentos, novelas cortas o novelas largas– y la temática está centrada en las aventuras, principalmente de detectives, espías, villanos, ladrones, del oeste…, pero también de viajes, ya sea reales, por mar o tierra, o fantásticos; no faltan novelas de aventuras sentimentales, amorosas, románticas o de intriga. Coordinadora: Dolores Romero López",
            "name=Fondo Fernando Eguidazu&q=subcoleccion:CFENPE",
            "imagenes/11.Fondo%20Eguidazu.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            12,
            "Instituto Iberoamericano de Berlín",
            "Esta colección pretende ser un reconocimiento a las instituciones que albergan legados culturales españoles fuera de nuestras fronteras y que los documentan, catalogan y digitalizan con el fin de ponerlos a disposición pública. En este caso, el Instituto Iberoamericano de Berlín es la sede de la Colección Fernando Eguidazu de novela popular española, un legado indispensable para investigar las colecciones literarias que se publicaron en España desde la segunda mitad del siglo XIX hasta los años 2000. Según información oficial esta colección cuenta con unos 50.000 títulos, la mayor parte pertenecientes al género de novela popular editada en España, pero también hay títulos procedentes de Argentina, México, Estados Unidos y Francia. De momento, en Mnemosine solo damos acceso a los datos recabados en la sede de dicha institución y que forman un corpus de títulos de colecciones literarias publicadas en quioscos entre 1900 y 1939. Coordinadora: Dolores Romero López",
            "name=Instituto Iberoamericano de Berlín&q=localizaciondelfondo:Berlin",
            "imagenes/12.Iberoamericano%20deBErlin.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            13,
            "Bohemia Literaria",
            "Esta colección cuenta con las obras de autores que pertenecieron o conocieron la bohemia, por tanto, con características propias del fenómeno sociocultural y literario bohemio. Con bohemia nos referimos a las formas de ser artista, al campo cultural no institucionalizado de los artistas modernos, forjado a lo largo del siglo XIX-XX desde París como enfrentamiento al espíritu burgués-utilitarista. Cuando los literatos comenzaban su andadura solían encontrarse con este humus urbano, heterodoxo, atento a las tendencias más novedosas tras el romanticismo. Estas obras se desarrollaron en los ‘entresijos’ de varios estilos, a lo largo de un amplio periodo y a través de diferentes géneros. Es por tanto una colección transversal. Destacan títulos unidos a lo biográfico, junto al ambiente socio-artístico. La bohemia podía ser pobre, de escritores sin éxito, también comprometida y revolucionaria, incluso galante, de aristócratas descarriados, extravagancia, placeres y fiesta. Las obras cuentan con las estrategias artísticas y vitales de los autores, muchas como contrarrespuesta al poder, mostrando por ello el ambiente nocturno celebratorio, lo popular, las drogas, las injusticias sociales, los bajos fondos, el sexo y el erotismo o los escritores y obras admirados, junto con identidades varias: homosexuales, dandis, raros, locos, desposeídos, estetas, decadentes, sablistas… Los paratextos: prologuistas, imprentas, editoriales, ilustradores o imágenes de las ediciones dan información sobre la red de prácticas bohemias que unían arte, política y vida. Coordinadora: Sofía Nicolás Díez",
            "name=Bohemia Literaria&q=subcoleccion:'Bohemia Literaria'",
            "imagenes/13.Bohemia.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            14,
            "Escritores muertos en tiempos de Guerra (1936-1939)",
            "Colección donde se incluyen todos aquellos autores presentes en Mnemosine que murieron durante la Guerra Civil por diversas causas; un conjunto especialmente numeroso, que da cuenta de la dimensión de la tragedia, explicitado con nombres y cifras. Se utiliza en ella la herramienta Google Maps para localizar los respectivos lugares de defunción. Unos murieron directamente a causa de la contienda, en el frente de batalla o fusilados; otros no, pero como dijo José Ortega y Gasset, tras la muerte de Miguel de Unamuno, el 31 de diciembre de 1936: \“Ignoro todavía cuáles sean los datos médicos de su acabamiento; pero, sean los que fueren, estoy seguro de que ha muerto de ‘mal de España’. [...] Ha inscrito su muerte individual en la muerte innumerable que es hoy la vida española\”. COORDINADORA: Antonella Russo",
            "name=Escritores muertos en tiempos de Guerra (1936-1939)&q=fechademuerte:/193[6789]/",
            "imagenes/14.muertos%20en%20conflicto.png"
        ),
        new CollectionElem(
            15,
            "Autores en exilio",
            "Esta colección reúne escritores y obras del exilio republicano español de 1939. Para estructurarla, se han propuesto una serie de filtros y metadatos orientados a abordar efectivamente las especificidades -geográficas, políticas, asociativas, etc.- de este exilio. Se propone, como filtro específico, el de \"Lugar de exilio\", pudiéndose filtrar por país y ciudad, y siendo asimismo posible rastrear en los perfiles de los autores sus trayectorias migratorias a través de un sistema de mapping o cartografía digital de geolocalización. Entre los metadatos relativos a la entidad \"persona\", algunos como \"Nacionalidad(es)\", \"Militancia política\", \"Paso por campos de concentración\" o \"Muerte en exilio\" ofrecen una visión panorámica sobre la compleja multiplicidad de experiencias de estos escritores. Nuevos metadatos relativos a las entidades \"obra\" ayudarán, progresivamente, a estructurar una serie de temas y estéticas particulares de esta escritura exiliar. Coordinadora: Lucía Cotarelo Esteban",
            "name=Autores en exilio&q=exilio:S?",
            "imagenes/15.Exilio.png"
        ),
        new CollectionElem(
            16,
            "Memorias de Exiliadas",
            "La recuperación de la historia del exilio republicano español ha pasado en los últimos años por una atención creciente hacia los llamados “géneros del yo”. Esta colección presenta un conjunto de datos y metadatos relacionados con textos memorialísticos escritos por mujeres en los que se recoge, en mayor o menor medida, un relato de las vivencias en el exilio. Se han seleccionado autoras nacidas entre 1898 y 1936, considerando tanto la Edad de Plata como su proyección posterior; abarca tres géneros principales (memorias, autobiografía y diarios), y consigna mujeres no pertenecientes en exclusiva al ámbito profesional de la literatura. A través de sus obras se puede reconstruir un relato fidedigno y en primera persona del exilio republicano español, además de observarse los diversos roles ejercidos por las mujeres de la época y su paulatina lucha por la emancipación y la participación en el espacio público. Coordinadora: Begoña Camblor Pandiella",
            "name=Memorias de Exiliadas&q=subcoleccion:exiliadas",
            "imagenes/16.MemoriasExiliadas.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            17,
            "Madrid en la Literatura de la Edad de Plata",
            "Madrid tuvo un lugar muy destacado en la producción literaria de la Edad de Plata, ya como escenario de múltiples narraciones novelescas y de tipo costumbrista, o de piezas dramáticas dentro del llamado género chico, ya como motivo de reflexión (de su ambiente, historia, tipos sociales...) en numerosos ensayos y crónicas de la época. La capital de España constituyó el principal lugar de encuentro para quienes perseguían una carrera literaria, la fama y el éxito en los últimos años del siglo XIX y comienzos del XX. La presente colección es resultado de discriminar una búsqueda general a partir del dato \“Madrid\” dentro del campo o metadato \“Materia: lugar geográfico\” en las fichas bibliográficas de obra, sin contar si aparece en otros campos de información de la misma ficha como (por ejemplo) lugar de edición o como lugar de nacimiento en el caso de los autores. COORDINADORA: Inmaculada Plaza",
            "name=Madrid en la Literatura de la Edad de Plata&q=lugardepublicacion:madrid",
            "imagenes/17.Madrid.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            18,
            "Autores Extremeños",
            "Junto a los núcleos tradicionales y habitualmente reconocidos confluyen otros espacios periféricos que aportan pluralidad y dinamismo al contexto literario del siglo XX. En esta colección se incluyen nombres, datos, metadatos y enlaces a obras escritas por autores y autoras que nacen en Extremadura o se relacionan con la región. Se reúnen en ella figuras con un reconocimiento previo a nivel general y se añaden nombres menos habituales cuya trascendencia resulta fundamental para el devenir cultural de este espacio. Se trata de un conjunto diverso que aglutina obras de todos los géneros y que abarca a escritores y a escritoras que desarrollan su trayectoria tanto desde Extremadura como fuera de ella. En estos años se asientan tanto las bases de una literatura extremeña como la de una literatura en Extremadura, atenta a las novedades que se generan en otros espacios y en consonancia con el panorama nacional. Coordinadora: Guadalupe Nieto Caballero",
            "name=Autores Extremeños&q=coleccionenmnemosine:%22extremenos%22",
            "imagenes/18.EscriExtremeños.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            19,
            "Carmen de Burgos",
            "Como mujer, fue pionera en la defensa pública de los derechos femeninos. Como escritora, supo llevar a sus novelas argumentos novedosos que retrataban la sociedad de su época. Esta colección de autora contiene una extensa red de datos biográficos que recogen tanto aquellos estandarizados (nombre, seudónimo y fechas de nacimiento y muerte) como los específicos que debe aportar una biblioteca especializada (lugares de residencia, estado civil, educación, actividades profesionales, géneros literarios que cultiva, aspectos financieros, asociaciones a las que pertenece, sus amistades, el movimiento artístico que le influye y ciertas curiosidades. Además, se pueden encontrar las referencias bibliográficas de más de treinta recursos con sus correspondientes metadatos y enlaces a los fondos digitalizados. Esta colección es el modelo sobre el que se han gestado otros datos de autores en Mnemosine. Coordinadores: Dolores Romero López y José Miguel González Soriano",
            "name=Carmen de Burgos&q=REL:62598",
            "imagenes/19.CarmenBurgos.png",
            "fechadepublicacion"
        ),
        new CollectionElem(
            20,
            "Luis Bello",
            "Como mujer, fue pionera en la defensa pública de los derechos femeninos. Como escritora, supo llevar a sus novelas argumentos novedosos que retrataban la sociedad de su época. Esta colección de autora contiene una extensa red de datos biográficos que recogen tanto aquellos estandarizados (nombre, seudónimo y fechas de nacimiento y muerte) como los específicos que debe aportar una biblioteca especializada (lugares de residencia, estado civil, educación, actividades profesionales, géneros literarios que cultiva, aspectos financieros, asociaciones a las que pertenece, sus amistades, el movimiento artístico que le influye y ciertas curiosidades. Además, se pueden encontrar las referencias bibliográficas de más de treinta recursos con sus correspondientes metadatos y enlaces a los fondos digitalizados. Esta colección es el modelo sobre el que se han gestado otros datos de autores en Mnemosine. Coordinadores: Dolores Romero López y José Miguel González Soriano",
            "name=Luis Bello&q=REL:61030",
            "imagenes/20LuisBello.png",
            "fechadepublicacion"
        )
	);
	

	$CollectionArrayA=new CollectionArray($CollectionArrayAL);

?>