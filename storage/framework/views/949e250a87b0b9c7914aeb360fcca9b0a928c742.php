<br><div class="card card-primary">
	<div class="card-header py-2">Menú</div>

	<div class="card-body">
	<?php if(auth() -> check()): ?>
		<ul class="nav nav-pills nav-stacked">
			<li><a href="<?php echo e(route('config')); ?>">Configuracion Perfil</a></li>
			<li><a href="<?php echo e(route('incidencias_create')); ?>">Crear Incidencias</a></li>
			<li><a href="<?php echo e(route('config')); ?>"> Esta es la 4 opcion</a></li>
			<li><a href="<?php echo e(route('config')); ?>">Perdido que estoy</a></li>
			</ul> 
			<?php else: ?>
			<ul class="nav nav-pills nav-stacked">
			<li><a href="<?php echo e(route('config')); ?>"> Bienvenido </a></li>
			<li><a href="<?php echo e(route('config')); ?>"> Reportar Incidencia </a></li>
			</ul> 
			<?php endif; ?>
	</div>
</div>
<?php /**PATH C:\wamp64\www\gestionlaravel\resources\views/includes/menu.blade.php ENDPATH**/ ?>