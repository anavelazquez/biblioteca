@extends('layout.master')
@section('titulo', 'Registrar Libro')
@section('contenido')
	@if($errors->any())
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	@endif

	<form method="POST" action="{{ route('libros.store') }}">
		@csrf
		<input type="text" name="titulo" placeholder="Título"><br>
		<input type="text" name="autor" placeholder="Autor"><br>
		<input type="text" name="editorial" placeholder="Editorial"><br>
		<input type="text" name="anio_edicion" placeholder="Año de edición"><br>
		<input type="text" name="numero_paginas" placeholder="# Páginas"><br>
		<button>Enviar</button>
	</form>
@endsection