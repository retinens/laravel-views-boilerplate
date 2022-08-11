<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('app.layout.common.htmlHeader')
<body class="bg-gray-100">
@include('app.layout.header')
<div class="container my-3 h-100">
    @yield('content')
</div>
@include('app.layout.common.htmlFooter')
</body>
</html>

