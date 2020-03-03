<br><div class="card card-primary">
	<div class="card-header py-2">Menú</div>

	<div class="card-body">
	@if (auth() -> check())
		<ul class="nav nav-pills nav-stacked">
			<li><a href="{{route('config')}}">Configuracion Perfil</a></li>
			<li><a href="{{route('incidencias_create')}}">Crear Incidencias</a></li>
			<li><a href="{{route('config')}}"> Esta es la 4 opcion</a></li>
			<li><a href="{{route('config')}}">Perdido que estoy</a></li>
			</ul> 
			@else
			<ul class="nav nav-pills nav-stacked">
			<li><a href="{{route('config')}}"> Bienvenido </a></li>
			<li><a href="{{route('config')}}"> Reportar Incidencia </a></li>
			</ul> 
			@endif
	</div>
</div>
