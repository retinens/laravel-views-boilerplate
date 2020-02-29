<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    {!! app('seotools')->generate() !!}

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="/images/logos/favicon.png">
    <link rel="stylesheet" href="{{ mix('/app/css/app.css') }}">
</head>

<body class="">
<div class="justify-content-center d-flex w-100">
    @include('cookieConsent::index')
</div>
{{-- NAV --}}
@include('layouts.header')
@yield('content')
{{-- CONTENT --}}

@include('layouts.footer')
<script src="{{mix('/app/js/manifest.js')}}"></script>
<script src="{{mix('/app/js/vendor.js')}}"></script>
<script src="{{mix('/app/js/app.js')}}"></script>
@yield('scripts')
</body>
</html>
