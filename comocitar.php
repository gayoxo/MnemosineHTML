<?php include 'top.php'; ?>
<?php $LinkAtras="index.php"; ?>
<?php include 'cabecera.php'; ?>

<?php include 'form_buscador_Oculto.php'?>

<?php
	include 'config.php';
?>
	</br>

</div>		
<div class="ayuda">
	<p class="ayuda_texto_Cabecera">Ayuda</p>
	<hr class="linea_horizontal">
	<div class="ayuda_body">
		<div class="bloque">
				<p class="texto_bloque_cabecera">
					Resumen
				</p>
				<p class="texto-bloque_cuerpo">
				El sistema <a class="ayuda_link" href="index.php">Mnemosine</a> utiliza como fuente del conocimiento el sistema <a class="ayuda_link" target="_blank" href="http://clavy.fdi.ucm.es/">Clavy</a>. La colección <a class="ayuda_link" href="index.php">Mnemosine</a> está almacenada en esta plataforma, que se caracteriza por ser de almacenamiento de repositorios dinámicamente reconfigurable que puede exponer la información contenida mediante servicios. La web Mnemosine es un mecanismo de presentación de esta información que permite un entorno agradable para su consulta y acceso.<br/>
	
	El sistema de búsqueda esta almacenado en la plataforma <a class="ayuda_link" target="_blank" href="http://clavy.fdi.ucm.es/">Clavy</a> y se realiza mediante la creación de un índice sobre la librería <a class="ayuda_link" href="https://lucene.apache.org/">Lucene</a>. Esta librería permite el almacenamiento de la información de manera compacte e indexada, dando soporte a un potente servicio de búsqueda. <br/>
	
	En esta sección se presentará un breve resumen del mecanismo de consultas que soporta <a class="ayuda_link" href="https://lucene.apache.org/">Lucene</a> y cómo crearlas para la inspección del repositorio. Este manual de ayuda está basado en diferentes manuales de <a class="ayuda_link" href="https://lucene.apache.org/">Lucene</a> referenciados al final de esta página, donde puede encontrarse información adicional sobre el formato de las consultas.
				</p>
		</div>
		<hr class="linea_horizontal">
		
		<div class="bloque">
				<p class="texto_bloque_cabecera">
					Consulta Básica
				</p>
				<p class="texto-bloque_cuerpo">
				
				Las consultas en <a class="ayuda_link" href="https://lucene.apache.org/">Lucene</a> se tratan como una expresión lógica <i>booleana</i>, por lo que lo primero que hay que explicar es que hay ciertas palabras/símbolos reservados para la consulta. Estas palabras/símbolos son <code>AND OR && || + - ? *:</code>. <br/><br/>
				
				Una consulta básica constará de un conjunto de palabras a buscar y separadas por reservados, por ejemplo:<br/><br/>
				
				><code>Dialogos AND Teatro</code> - Esta consulta obtendrá todos aquellos elementos en cuya descripción esté la palabra Dialogo <strong>y</strong> Teatro simultáneamente.<br/><br/>
				
				><code>Dialogos OR Teatro</code> - Esta consulta obtendrá todas aquellos elementos en cuya descripción esté la palabra Dialogo <strong>ó</strong> Teatro simultáneamente.<br/><br/>
				
				><code>Dialogos AND -Teatro</code> - Esta consulta obtendra todas aquellos elementos en cuya descripción esté la palabra Dialogo <strong>y no</strong> Teatro simultaneamente.<br/><br/>
				
				><code>Dialogos OR -Teatro</code> - Esta consulta obtendrá todas aquellos elementos en cuya descripción esté la palabra Dialogo <strong>ó no </strong> Teatro simultáneamente.<br/><br/>
				
				Los simbolos <code>&&</code> y <code> || </code> equivalen a <code>AND</code> y <code>OR</code> respectivamente.<br/><br/>
				
				</p>
				
				<p class="texto_bloque_cabecera">
					Consulta por categoría
				</p>
				<p class="texto-bloque_cuerpo">
				
				Tal y como está configurada <a class="ayuda_link" href="https://lucene.apache.org/">Lucene</a>, se permite también la búsqueda más especifica por categoría. Para este objetivo, se debe incluir la categoría ( en minúsculas y sin caracteres no alfanuméricos) seguida del símbolo reservado <code>:</code><br/><br/>
				
				Unos ejemplos de consulta por categoría son:<br/><br/>
				
				><code>titulo:Dialogos AND autor:Unamuno</code> - Esta consulta obtendrá todos aquellos elementos en cuyas categoría Titulo/titulo esté contenido el concepto Dialogo <strong>y</strong> las categorías Autor/autor esté contenido el termino Unamuno simultáneamente.<br/><br/>
				
				><code>titulo:Dialogos OR autor:Unamuno</code> -  Esta consulta obtendrá todas aquellos elementos en cuyas categoría Titulo/titulo esté contenido el concepto Dialogo <strong>ó</strong> las categorías Autor/autor esté contenido el termino Unamuno simultáneamente.<br/><br/>
				
				><code>titulo:Dialogos AND -autor:Unamuno</code> - Esta consulta obtendrá todas aquellos elementos en cuyas categoría Titulo/titulo esté contenido el concepto Dialogo <strong>y no</strong> las categorías Autor/autor esté contenido el termino Unamuno simultáneamente.<br/><br/>
				
				><code>-titulo:Dialogos OR autor:Unamuno</code> -  Esta consulta obtendrá todas aquellos elementos en cuyas categoría Titulo/titulo <strong>no </strong> esté contenido el concepto Dialogo <strong>ó</strong> las categorías Autor/autor esté contenido el termino Unamumo simultáneamente.<br/><br/>
				
				
				La lista de concepto que están definidos en la colección <a class="ayuda_link" href="index.php">Mnemosine</a> son: <br/>
				
				<div class="comando_ayuda">
				
				<code class="ayuda_code">
				
				<?php 
				
				$ServerService='http://'.ClavyServer.':'.ClavyPort.'/'.ClavyDomine.'/rest/'.ClavyService.'/';
	//$service_url = $ServerService.'getConcepts';
	$service_url = $ServerService.'getConcepts?userclavy='.Clavyuser.'&passwordclavy='.Clavyuserkey.'&keyclavy='.Clavykey;
	$curl = curl_init($service_url);

	//echo ($service_url);
	
	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 60); // Setting the amount of time (in seconds) before the request times out
	curl_setopt($curl, CURLOPT_TIMEOUT, 180);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$curl_response = curl_exec($curl);
	if ($curl_response === false) {
		$info = curl_getinfo($curl);
		curl_close($curl);
		echo 'El sistema Clavy en http://'.ClavyServer.':'.ClavyPort.' no esta activo, por favor pruebe de nuevo y contacte con el administrador si persiste';
	}else
	{
		$status = curl_getinfo($curl);
		
		if ($status['http_code']=='200')
		{
			/*echo $curl_response;
			echo "</br>";*/
			
			$JObj=json_decode($curl_response, true);
			
			curl_close($curl);
			
			foreach($JObj as $k => $elem){
				echo $elem . ':<br/>';
			}
			
		}
	}
				
				
				?>
				
				</code>
				</div>
				</p>
				
				</div>
				
				
		<hr class="linea_horizontal">
		
		
		<div class="bloque">
				
				
				<p class="texto_bloque_cabecera">
					Elemento Comodín
				</p>
				<p class="texto-bloque_cuerpo">
				La consultas pueden ser flexibles, permitiendo que la búsqueda sea más permeable a variaciones de una palabra. Para este cometido es necesario usar los símbolos reservados <code>? *</code>. Estos símbolos permitirán la sustitución de este por una o varios caracteres respectivamente.
				
				Un ejemplo de su uso es el siguiente.<br/><br/>
				
				><code>Surc?</code> - Esta consulta obtendrá todas aquellos elementos en cuya descripción esté por ejemplo la palabra surc<strong>o</strong> o surc<strong>a</strong>.<br/><br/>
				
				><code>Trabaja*</code> - Esta consulta obtendrá todas aquellos elementos en cuya descripción esté por ejemplo la palabra Trabaja<strong>r</strong>, Trabaja<strong>dor</strong> o Trabaja<strong>dora</strong>.<br/><br/>

				</p>
				
				
		</div>		
		<hr class="linea_horizontal">
		
		
		<div class="bloque">
				
				
				<p class="texto_bloque_cabecera">
					Expresión Regular
				</p>
				<p class="texto-bloque_cuerpo">
				
				Las expresiones regulares están permitidas para la realización de consultas complejas dentro de <a class="ayuda_link" href="https://lucene.apache.org/">Lucene</a>. Una consulta basada en expresión regular empezará con el carácter <code>/</code> y terminará con el carácter <code>/</code>.
				
				Un ejemplo de una expresión válida son los siguientes:
				
				><code>/Surc[oa]/</code> - Esta consulta obtendrá todas aquellos elementos en cuya descripción esté la palabra surc<strong>o</strong> o surc<strong>a</strong>.<br/><br/>
				
				><code>/Trabaja*/</code> - Esta consulta obtendrá todas aquellos elementos en cuya descripción esté por ejemplo la palabra Trabaja<strong>r</strong>, Trabaja<strong>dor</strong> o Trabaja<strong>dora</strong>.<br/><br/>
				
				</p>
				
				
		</div>
		<hr class="linea_horizontal">
		
		
		<div class="bloque">
				<p class="texto_bloque_cabecera">
					<a class="quienes_somos_link" href="quienessomos.php">
					Otros Links de Interés
					</a>
				</p>
				<p class="texto-bloque_cuerpo">
				Esta manual ha sido diseñado a través de diferentes tutoriales más complejos. Para conocer más de las posibilidades de las consultas en <a class="ayuda_link" href="https://lucene.apache.org/">Lucene</a> se adjuntan como referencias las siguientes webs:<br>
><a class="ayuda_link" target="_blank" href="http://www.lucenetutorial.com/lucene-query-syntax.html">Lucene Tutorial</a><br>
><a class="ayuda_link" target="_blank" href="https://lucene.apache.org/core/2_9_4/queryparsersyntax.html">Apache Lucene Tutorial</a><br>
><a class="ayuda_link" target="_blank" href="https://www.ionos.es/digitalguide/servidores/configuracion/apache-lucene/">Ionos.es</a><br>
><a class="ayuda_link" target="_blank" href="https://es.wikipedia.org/wiki/Expresi%C3%B3n_regular">Expresión Regular</a><br>
				</p>
		</div>
		
	</div>

    Base de datos

    Biblioteca
    Mnemosine. Biblioteca Digital de La otra Edad de Plata [base de datos]. Enlace: http://repositorios.fdi.ucm.es/mnemosine_red/. [Fecha de consulta 00/00/0000].

    Colecciones en Mnemosine
    Colección Mujeres Intelectuales. En Mnemosine. Biblioteca Digital de La otra Edad de Plata [base de datos]. Enlace: http://repositorios.fdi.ucm.es/mnemosine_red/. [Fecha de consulta 00/00/0000].

    Contenidos de la base de datos

    1.- Autoridades
    Burgos, Carmen de. En Mnemosine: Biblioteca Digital de La otra Edad de Plata [base de datos]. Enlace: http://repositorios.fdi.ucm.es/mnemosine_red/.  [Fecha de consulta 00/00/0000].

    2.- Obras
    Burgos, Carmen de, (1901). Notas del alma. Cantares. Madrid: Imp. De Fernando Fe.  En Mnemosine. Biblioteca Digital de La otra Edad de Plata [base de datos]. Enlace: http://repositorios.fdi.ucm.es/mnemosine_red/.  [Fecha de consulta 00/00/0000].

    3.- Colecciones literarias
    Zamacois E., (1907-1908). El Cuento Semanal. Madrid: Imp. Artística de José Blass y Cía. En Mnemosine. Biblioteca Digital de La otra Edad de Plata [base de datos]. Enlace: http://repositorios.fdi.ucm.es/mnemosine_red/.  [Fecha de consulta 00/00/0000].

    4.- Obras en Colecciones literarias
    Ríos de Lampérez, Blanca de los (1907). Las hijas de don Juan. Colección El Cuento Semanal. Madrid: Imp. Artística de José Blass y Cía. En Mnemosine. Biblioteca Digital de La otra Edad de Plata [base de datos]. Enlace: http://repositorios.fdi.ucm.es/mnemosine_red/.  [Fecha de consulta 00/00/0000].


    Bibliografía sobre Mnemosine

    Cotarelo Esteban, L. (2018). “La colección ‘Poetas en el exilio’ en Mnemosine: Biblioteca Digital de La Otra Edad de Plata”. En Romero López, D. y Salamanca López, M. J. (coord.), Entornos digitales: Humanidades y Ciencias Sociales en la Universidad Complutense de Madrid, Ciudad de México: Red de Humanidades Digitales, 25-39.

    González Soriano, José Miguel, (2021). “Mnemosine: biblioteca digital de la otra Edad de Plata (orígenes, contenidos, perspectivas)”. En Romero López, D. (ed.), “Archivos, repositorios y bibliotecas digitales de la Edad de Plata”. Signa. Revista de la Asociación Española de Semiótica, 30, 31-58. Enlace: http://revistas.uned.es/index.php/signa/article/view/29297.[Fecha de consulta 01/01/2022].

    Pérez Gil, Pablo (2017). “La Biblioteca Digital Mnemosine”. Revista de Humanidades Digitales, 2, 180 -183.Enlace http://revistas.uned.es/index.php/RHD/article/view/22337.[Fecha de consulta 01/01/2022].

    Romero López, Dolores, (2014). “Hacia la Smart library: Mnemosine, una biblioteca digital de textos literarios raros y olvidados de la Edad de Plata (1868-1936)1. Fase I”. En López Poza, S. y Pena Sueiro, N. (eds.), “Humanidades Digitales: desafíos, logros y perspectivas de futuro”. Janus, Anejo 1, 411-422. Enlace: http://www.janusdigital.es/anexos/contribucion.htm?id=37. [Fecha de consulta 01/01/2022].

    _____, (2018). “La biblioteca digital Mnemosine y sus colecciones. Hacia una historia digital de la Edad de Plata”. Ibersid. Revista de Sistemas de Información y Documentación, 12. 2, 45-53. Enlace: https://www.ibersid.eu/ojs/index.php/ibersid/article/view/4486. [Fecha de consulta 01/01/2022].

    _____, (2018). “La Edad de Plata en la tarima digital. Hacia la transdisciplinariedad y la cultura Smart”. Artnodes. Journal on Art, Science and Technology, Universidat Oberta de Catalunya, 22, 110-117. Enlace: http://doi.org/10.7238/a.v0i22.3215. [Fecha de consulta 01/01/2022].

    _____, (2020). “La lectura smart. El acceso a la literatura a través de bibliotecas digitales -Mnemosine
    y Ciberia-”. En Ortuño, R. (ed.), “Humanidades digitales y estudios literarios: aproximaciones críticas”. 452F Revista de Teoría de la Literatura y Literatura Comparada, 23, 32-52. Enlace: https://revistes.ub.edu/index.php/452f/article/view/30666/32235. [Fecha de consulta 01/01/2022].
    Romero-López, Dolores. Bueren-Gómez-Acebo, José Luis, Galloso-Cabada, Joaquín (2017). “Modelling Colecciones de Literatura de Quioscos for Mnemosine Digital Library”. En Zamostny, J. y Larson, S. (eds.), Kiosk Literature in Silver Age Spain: Modernity and Mass Culture, Intellect Books: Reino Unido, 397-418.

    Romero-López, Dolores, Bueren Gómez-Acebo, José Luis, (2019). “La colección literatura de quiosco en Mnemosine, Biblioteca Digital de la Otra Edad de Plata (1868-1936). Hacia la redefinición del canon literario a través de metadatos”. Literatura: Teoría, Historia, Crítica, 21.1, 61-91. Enlace: http://dx.doi.org/10.15446/lthc.v21n1.74870. [Fecha de consulta 01/01/2022].


    Presentación de pósteres

    Cotarelo-Esteban, Lucía: “Mnemosine, Biblioteca Digital de La otra Edad de Plata (1868-1936)”. I Jornadas UCM “La investigación en ciencias sociales y humanidades: desafíos y perspectivas en entornos digitales”, Universidad Complutense de Madrid. Fecha: 12-13/01/2017.

    _____: “La otra Edad de Plata: proyección cultural y legado digital. Biblioteca Digital Mnemosine”. Workshop en línea Red INTELE. Fecha: 25/11/2020. Enlace: http://ixa2.si.ehu.eus/intele/?q=node/22

    Martínez Deyros, María, Reina Navarro, Alicia, Cotarelo Esteban, Lucía y González Soriano, José Miguel: “Networking Women Translators in Spain (1868-1936) and their presence in Mnemosyne Digital Library” DARIAH Annual Event 2019, Varsovia, Polonia, The Marketplace poster sesión. Fecha: 16/05/2019.

    _____: “Mnemosyne, Digital Library for Rare and Forgotten Texts (1868-1936): -Collections and digital editions-“ DARIAH Annual Event 2019, Varsovia, Polonia, The Marketplace poster sesión. Fecha: 16/05/2019.

    Reina Navarro, Alicia: “Interactive Reading in Digital Collections”, DARIAH Annual Event 2019, Varsovia, Polonia, The Marketplace poster sesión. Fecha: 16/05/2019.

    Romero López, Dolores y Cotarelo-Esteban, Lucía: “Mnemosyne, Digital Library for Rare and Forgotten Texts (1868-1936): Collections and digital editions”. Digital Humanities Congress, Montreal, Canadá. Fecha: 11/08/2017.

    Bibliografía sobre Clavy


    Fernández-Pampillón, A.; Gayoso, J.; Sarasa, A. y Sierra, J. L. (2018). “De OdA a Clavy, dos aplicaciones orientadas a la creación de repositorios de objetos digitales académicos”. En Romero López, D. y Salamanca López, M. J. (coord.), Entornos digitales: Humanidades y Ciencias Sociales en la Universidad Complutense de Madrid, Ciudad de México: Red de Humanidades Digitales, 61-83.

    Gayoso-Cabada, J., Rodríguez-Cerezo, D., & Sierra, J.-L. (2017). “Browsing Digital Collections with Reconfigurable Faceted Thesauri”. Complexity in Information Systems Development, 69–86. https://doi.org/10.1007/978-3-319-52593-8_5

    Gayoso-Cabada, J., Rodríguez-Cerezo, D., & Sierra, J.-L. (2016). “Multilevel Browsing of Folksonomy-Based Digital Collections”. Web Information Systems Engineering – WISE 2016, 43–51. https://doi.org/10.1007/978-3-319-48743-4_4

    Gayoso-Cabada, J., Rodriguez-Cerezo, D., & Sierra, J.-L. (2016). “Learning object repositories with dynamically reconfigurable metadata schemata”. 2016 International Symposium on Computers in Education (SIIE). https://doi.org/10.1109/siie.2016.7751848

    Gayoso-Cabada, J., Gomez-Albarran, M., & Sierra, J.-L. (2018). “Enhancing the Browsing Cache Management in the Clavy Platform”. 2018 International Symposium on Computers in Education (SIIE). https://doi.org/10.1109/siie.2018.8586778

    Sierra, J. L. Cigarrán-Recuero, Gayoso Cabada, J., Rodríguez-Artacho, M., Romero-Lopez, D. Sarasa-Cabezuelo, A. (2014). “Assessing Semantic Annotation Activities with Formal Concept Analysis”. Expert Systems with Applications, 41. 11. Enlace: https://doi.org/10.1016/j.eswa.2014.02.036 [Fecha de consulta 01/01/2022].




</div>	
	
<?php include 'botton.php'; ?>