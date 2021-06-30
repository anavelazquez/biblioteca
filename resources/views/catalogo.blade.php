@extends('layout.master')
@section('titulo', 'Catálogo')
@section('contenido')
	<h1>Catálogo</h1>
	<br>
	@if( count($libros) > 0)
		<ul>
			@foreach ($libros as $libro)
				<li>{{ $libro['titulo'] }} - {{ $libro['autor'] }}</li>
			@endforeach	
		</ul>
	@else
		<p>No hay libros en el catálogo</p>
	@endif
@endsection





