<?php include 'top.php'; ?>
<?php $LinkAtras="index.php"; ?>
<?php include 'cabecera.php'; ?>
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
				El sistema <a class="ayuda_link" href="index.php">Mnemosine</a> utiliza como fuente del conocimiento el sistema <a class="ayuda_link" target="_blank" href="http://clavy.fdi.ucm.es/">Clavy</a>, la coleccion <a class="ayuda_link" href="index.php">Mnemosine</a> esta almacenada en esta plataforma, que se caracteriza por ser una plataforma de almacenamiento de repositorios dinamicamente reconfigurable que puede exponer la informacion contenida mediante servicios, la web Mnemosine es una mecanismo de presentacion de esta informacion que permite un entorno agradable para su consulta y acceso.<br/>
	
	El sistema de busqueda esta almacenado en la plataforma <a class="ayuda_link" target="_blank" href="http://clavy.fdi.ucm.es/">Clavy</a> y se realiza mediante la creacion de un indice sobre la libreria <a class="ayuda_link" href="https://lucene.apache.org/">Lucene</a>, esta libreria permite el almacenamiento de la informacion de manera compacte e indexada, dando soporte a un potente servicio de busqueda. <br/>
	
	En esta seccion se presentara un breve resumen de el mecanismo de consultas que soporta <a class="ayuda_link" href="https://lucene.apache.org/">Lucene</a> y como crearlas para la inspeccion del repositorio. Este manual de ayuda esta basado en diferntes manuales de Lucene referenciados al final de esta pagina, donde puede encontrarse informacion adicional sobre el formato de las consultas.
				</p>
		</div>
		<hr class="linea_horizontal">
		
		<div class="bloque">
				<p class="texto_bloque_cabecera">
					Consulta Basica
				</p>
				<p class="texto-bloque_cuerpo">
				
				Las consultas en <a class="ayuda_link" href="https://lucene.apache.org/">Lucene</a> se tratan como una expresion logica <i>booleana</i> por lo que lo primero que hay que explicar es que hay ciertas palabras/simbolos reservados para la consulta, estas palabras/simbolos son <code>AND OR && || + - ? *:</code>. <br/><br/>
				
				Una conslta basica constara de un conjunto de palabras a buscar y separadas por reservados, por ejemplo:<br/><br/>
				
				><code>Dialogos AND Teatro</code> - Esta consulta obtendra todas aquellos elementos en cuya descripcion este la palabra Dialogo <strong>y</strong> Teatro simultaneamente.<br/><br/>
				
				><code>Dialogos OR Teatro</code> - Esta consulta obtendra todas aquellos elementos en cuya descripcion este la palabra Dialogo <strong>ó</strong> Teatro simultaneamente.<br/><br/>
				
				><code>Dialogos AND -Teatro</code> - Esta consulta obtendra todas aquellos elementos en cuya descripcion este la palabra Dialogo <strong>y no</strong> Teatro simultaneamente.<br/><br/>
				
				><code>Dialogos OR -Teatro</code> - Esta consulta obtendra todas aquellos elementos en cuya descripcion este la palabra Dialogo <strong>ó no </strong> Teatro simultaneamente.<br/><br/>
				
				Los simbolos <code>&&</code> y <code> || </code> equivalen a <code>AND</code> y <code>OR</code> respectivamente.<br/><br/>
				
				</p>
				
				<p class="texto_bloque_cabecera">
					Consulta por categoria
				</p>
				<p class="texto-bloque_cuerpo">
				
				Tal y como esta configurada <a class="ayuda_link" href="https://lucene.apache.org/">Lucene</a>, se permite tambien la busqueda mas especifica por categoria, para este objetivo, se debe incluir la categoria ( en minusculas y sin caracteres no alfanumericos) seguida del simbolo reservado <code>:</code><br/><br/>
				
				Unos ejemplos de consulta por categoria son:
				
				><code>titulo:Dialogos AND autor:Unamuno</code> - Esta consulta obtendra todas aquellos elementos en cuyas categoria Titulo/titulo este contenido el concepto Dialogo <strong>y</strong> las categorias Autor/autor este contenido el termino Unamumo simultaneamente.<br/><br/>
				
				><code>titulo:Dialogos OR autor:Unamuno</code> -  Esta consulta obtendra todas aquellos elementos en cuyas categoria Titulo/titulo este contenido el concepto Dialogo <strong>ó</strong> las categorias Autor/autor este contenido el termino Unamumo simultaneamente.<br/><br/>
				
				><code>titulo:Dialogos AND -autor:Unamuno</code> - Esta consulta obtendra todas aquellos elementos en cuyas categoria Titulo/titulo este contenido el concepto Dialogo <strong>y no</strong> las categorias Autor/autor este contenido el termino Unamumo simultaneamente.<br/><br/>
				
				><code>-titulo:Dialogos OR autor:Unamuno</code> -  Esta consulta obtendra todas aquellos elementos en cuyas categoria Titulo/titulo <strong>no </strong> este contenido el concepto Dialogo <strong>ó</strong> las categorias Autor/autor este contenido el termino Unamumo simultaneamente.<br/><br/>
				
				
				La lista de concepto que estan definidos en la coleccion <a class="ayuda_link" href="index.php">Mnemosine</a> son: <br/>
				
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
					Elemento Comodin
				</p>
				<p class="texto-bloque_cuerpo">
				La consultas pueden ser flexibles, permitiendo que la busqueda sea mas permeable a variaciones de una palabra, para este cometido es necesario usar los simbolos reservadas <code>? *</code>. Estos simbolos permitiran la sustitucion de este por una o varios caracteres respectivamente.
				
				Un ejemplo de su uso es el siguiente.<br/><br/>
				
				><code>Surc?</code> - Esta consulta obtendra todas aquellos elementos en cuya descripcion este por ejemplo la palabra surc<strong>o</strong> o surc<strong>a</strong>.<br/><br/>
				
				><code>Trabaja*</code> - Esta consulta obtendra todas aquellos elementos en cuya descripcion este por ejemplo la palabra Trabaja<strong>r</strong>,Trabaja<strong>dor</strong> o Trabaja<strong>dora</strong>.<br/><br/>

				</p>
				
				
		</div>		
		<hr class="linea_horizontal">
		
		
		<div class="bloque">
				
				
				<p class="texto_bloque_cabecera">
					Expresion Regular
				</p>
				<p class="texto-bloque_cuerpo">
				
				Las expresiones regulares estan permitidas para la realizacion de consultas complejas dentro de <a class="ayuda_link" href="https://lucene.apache.org/">Lucene</a>, una cpnsulta basada en expresion regular empezara con el caracter <code>/</code> y terminara con el caracter <code>/</code>.
				
				Un ejemplo de una expresion valida son los siguientes:
				
				><code>/Surc[oa]/</code> - Esta consulta obtendra todas aquellos elementos en cuya descripcion este la palabra surc<strong>o</strong> o surc<strong>a</strong>.<br/><br/>
				
				><code>/Trabaja*/</code> - Esta consulta obtendra todas aquellos elementos en cuya descripcion este por ejemplo la palabra Trabaja<strong>r</strong>,Trabaja<strong>dor</strong> o Trabaja<strong>dora</strong>.<br/><br/>
				
				</p>
				
				
		</div>
		<hr class="linea_horizontal">
		
		
		<div class="bloque">
				<p class="texto_bloque_cabecera">
					<a class="quienes_somos_link" href="quienessomos.php">
					Otros Links de Interes
					</a>
				</p>
				<p class="texto-bloque_cuerpo">
				Esta manual ha sido diseñado a traves de diferentes tutoriales mas complejos, para conocer mas de las posiblidades de las consultas en <a class="ayuda_link" href="https://lucene.apache.org/">Lucene</a> se adjuntan como referencias las siguientes webs :<br>
><a class="ayuda_link" target="_blank" href="http://www.lucenetutorial.com/lucene-query-syntax.html">Lucene Tutorial</a><br>
><a class="ayuda_link" target="_blank" href="https://lucene.apache.org/core/2_9_4/queryparsersyntax.html">Apache Lucene Tutorial</a><br>
><a class="ayuda_link" target="_blank" href="https://www.ionos.es/digitalguide/servidores/configuracion/apache-lucene/">Ionos.es</a><br>
><a class="ayuda_link" target="_blank" href="https://es.wikipedia.org/wiki/Expresi%C3%B3n_regular">Expresion Regular</a><br>
				</p>
		</div>
		
	</div>
</div>	
	
<?php include 'botton.php'; ?>