@extends('layout.master')
@section('titulo', 'Registrar Libro')
@section('contenido')
	@lang('Catalogue')

	<form method="POST" action="{{ route('libros.store') }}">
		@csrf
		<input type="text" name="title" placeholder="Título" value="{{ old('title') }}"><br>
		{!! $errors->first('title', '<small>:message</small><br>') !!}

		<input type="text" name="autor" placeholder="Autor" value="{{ old('autor') }}"><br>
		{!! $errors->first('autor', '<small>:message</small><br>') !!}

		<input type="text" name="editorial" placeholder="Editorial" value="{{ old('editorial') }}"><br>
		{!! $errors->first('editorial', '<small>:message</small><br>') !!}

		<input type="text" name="year_edition" placeholder="Año de edición" value="{{ old('year_edition') }}"><br>
		{!! $errors->first('year_edition', '<small>:message</small><br>') !!}

		<input type="text" name="numero_paginas" placeholder="# Páginas" value="{{ old('numero_paginas') }}"><br>
		{!! $errors->first('numero_paginas', '<small>:message</small><br>') !!}
		<button>Enviar</button>
	</form>
@endsection