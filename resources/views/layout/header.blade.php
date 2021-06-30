<style type="text/css">
	.active a{
		color:red;
		text-decoration: none;
	}	
</style>

<ul>
	<li class="{{ setActive('inicio') }}"><a href="{{ route('inicio') }}">Inicio</a></li>
	<li class="{{ setActive('nosotros') }}"><a href="{{ route('nosotros') }}">Nosotros</a></li>
	<li class="{{ setActive('usuarios') }}"><a href="{{ route('usuarios') }}">Usuarios</a></li>
	<li class="{{ setActive('catalogo') }}"><a href="{{ route('catalogo') }}">Catálogo</a></li>
	<li class="{{ setActive('prestamos') }}"><a href="{{ route('prestamos') }}">Préstamos</a></li>
	<li class="{{ setActive('contacto') }}"><a href="{{ route('contacto') }}">Contacto</a></li>
</ul>