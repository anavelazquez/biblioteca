@extends('layout.master')
@section('titulo', 'Catálogo')
@section('contenido')
	<h1>Catálogo</h1>

	<p><a href="{{ route('libros.create') }}">Registrar Libro</a></p>

	<br>
	@if( count($libros) > 0)
		<ul>
			@foreach ($libros as $libro)
				<li><a href="{{ route('libros.show', $libro->id_libro) }}">{{ $libro['titulo'] }} - {{ $libro['autor'] }}</a></li>
			@endforeach	
		</ul>
	@else
		<p>No hay libros en el catálogo</p>
	@endif
@endsection





