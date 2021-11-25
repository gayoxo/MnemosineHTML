<?php include 'top.php'; ?>
<?php $LinkAtras="index.php"; ?>
<?php include 'cabecera.php'; ?>
	</br>

<?php include 'form_buscador.php'?>
	
<div class="Colecciones">
	<p class="Colecciones_texto_Cabecera">Constelaciones Culturales</p>
	<hr class="linea_horizontal">
    <p class="colecciones_desc">Para desafiar la visión hegemónica del canon, las constelaciones culturales ofrecen una mezcla intuitiva de literatura y plasticidad, de sociología y praxis en la que se deja espacio a aspectos innovadores y heterodoxos entre los que destacan nuevas identidades, géneros, temas, traducciones y el gran público.</p>

    <ul>


	<?php
	
	include 'coleccionesListaCulturales.php';
	
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