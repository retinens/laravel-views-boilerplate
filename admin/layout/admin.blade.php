<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('admin.layout.common.htmlHeader')
<body class="">
@include('admin.layout.header')
@include('admin.layout.sidebar')
<main class="content">
    @include('admin.layout.content-header')
    @yield('content')
    @include('admin.layout.footer')
</main>
@include('admin.layout.common.htmlFooter')
</body>
</html>
