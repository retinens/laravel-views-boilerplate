<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    {!! app('seotools')->generate() !!}

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png.webp">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png.webp">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png.webp">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="{{ mix('/css/admin.css','backend') }}">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">
    @livewireStyles
    @yield('header')
</head>
