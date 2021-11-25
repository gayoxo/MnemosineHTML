<?php include 'top.php'; ?>
<?php $LinkAtras="index.php"; ?>
<?php include 'cabecera.php'; ?>
	</br>

<?php include 'form_buscador.php'?>
	
<div class="Colecciones">
	<p class="Colecciones_texto_Cabecera">Colecciones</p>
	<hr class="linea_horizontal">
    <p class="colecciones_desc">La Edad de Plata es un periodo de la cultura que coincide con el desarrollo tecnológico, industrial y educativo de la España de finales del siglo XIX y primer tercio del siglo XX. Su riqueza y diversidad de manifestaciones artísticas siguen las tendencias de la Modernidad europea a la que se suman peculiaridades autóctonas. Su estudio ha estado ligado al concepto de generación literaria, a grandes nombres y títulos de proyección internacional.</p>
    <p class="colecciones_desc">La Biblioteca Digital de La otra Edad de Plata tiene como objetivo recuperar autores, obras, temas, géneros, publicaciones periódicas, etc. que han venido siendo excluidos del canon de la historia de la literatura. La digitalización de contenidos permite ver más, mejor y de forma diferente un corpus al que se puede acceder por tres vías: Una cartografía digital, en diálogo con el cartel literario que Ernesto Giménez Caballero publicara la Gaceta Literaria (15/07/1927), esta cartografía es un mapa interactivo y didáctico, sintético y visual, en el que se representa la transición de las investigaciones filológicas e históricas hacia la apertura de los Estudios Culturales y las Humanidades Digitales; bajo una mirada más histórica y filológica que han organizado el conocimiento a través de aspectos biográficos, temáticos y formales que evolucionan en el tiempo. Escritores, escritoras, géneros literarios, publicaciones periódicas, coleccionistas, instituciones, etc. ofrecen una aproximación sistemática, ordenada y objetiva de los datos; y una vía de constelaciones culturales para desafiar la visión hegemónica del canon, las constelaciones culturales ofrecen una mezcla intuitiva de literatura y plasticidad, de sociología y praxis en la que se deja espacio a aspectos innovadores y heterodoxos entre los que destacan nuevas identidades, géneros, temas, traducciones y el gran público.</p>

	<ul class="centered">
        <li class="centered">
            <img  src="imagenes/iconomapa.png" width="240" height="230" border="0" alt="1">
            <div class="collection_test"> <p>Cartografía Digital</p></div>
        </li>
        <li class="centered">
            <img  src="imagenes/iconohistoriafilol.png" width="240" height="230" border="0" alt="1">
            <div class="collection_test"> <p>Historia y Filología</div>
        </li>
        <li class="centered">
            <img  src="imagenes/iconoculturales.png" width="240" height="230" border="0" alt="1">
            <div class="collection_test"> <p>Constelaciones Culturales</p></div>
        </li>

    </ul>

    <hr class="linea_horizontal">

    <ul>


	<?php
	
	include 'coleccionesLista.php';
	
	foreach($CollectionArrayAL as $elembase)
	{
		
	?>
	
		<li>
		<div>
		<a class="coleccion_vinculo" href="buscadorColeccion.php?<?php echo $elembase->Datos; ?>" onmouseover="nhpup.popup('<?php echo $elembase->Descripcion; ?>');">
		<img  src=<?php echo $elembase->Imagen; ?> width="150" height="150" border="0" alt="1"> 
		<div class="collection_test"> <p><?php echo $elembase->Nombre; ?></p></div>
        </a>
        </div>
		</li>
	
	
	<?php
	}
	
	?>
	
		
		
		
	</ul>
</div>	
	
<?php include 'botton.php'; ?>