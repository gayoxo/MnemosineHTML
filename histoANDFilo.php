<?php include 'top.php'; ?>
<?php $LinkAtras="index.php"; ?>
<?php include 'cabecera.php'; ?>
	</br>

<?php include 'form_buscador.php'?>
	
<div class="Colecciones">
	<p class="Colecciones_texto_Cabecera">Historia y Filología</p>
	<hr class="linea_horizontal">
    <p class="colecciones_desc">Historia y Filología han organizado el conocimiento a través de aspectos biográficos, temáticos y formales que evolucionan en el tiempo. Escritores, escritoras, géneros literarios, publicaciones periódicas, coleccionistas, instituciones, etc. ofrecen una aproximación sistemática, ordenada y objetiva de los datos.</p>

    <ul>


	<?php
	
	include 'coleccionesListaHist.php';
	
	foreach($CollectionArrayAL as $elembase)
	{
		
	?>
	
		<li>
		<div>
		<a class="coleccion_vinculo" href="buscadorColeccion.php?<?php echo $elembase->Datos;echo "&idc=hf_";echo $elembase->Numer;echo "&ord=";echo $elembase->Order; ?>" onmouseover="nhpup.popup('<?php echo $elembase->Descripcion; ?>');">
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