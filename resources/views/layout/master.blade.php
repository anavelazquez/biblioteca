<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo', 'Biblioteca')</title>
</head>
<body>
	@include('layout.header')
	@yield('contenido')
	@include('layout.footer')
</body>
</html>