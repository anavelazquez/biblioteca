@extends('layout.master')
@section('contenido')

<h1> {{ $libro->titulo }}</h1>

<p><b>Autor:</b> {{ $libro ->autor }}</p>
<p><b>Editorial:</b> {{ $libro->editorial }}</p>
<p><b>Año de edición:</b> {{ $libro->anio_edicion }}</p>


@endsection