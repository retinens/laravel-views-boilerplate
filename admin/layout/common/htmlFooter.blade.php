<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.min.js" defer></script>
<script src="https://unpkg.com/react@16.8.6/umd/react.production.min.js"></script>
<script src="https://unpkg.com/react-dom@16.8.6/umd/react-dom.production.min.js"></script>
<script src="https://unpkg.com/moment@2.22.1/min/moment.min.js"></script>
<script src="https://kit.fontawesome.com/5573a6d434.js" crossorigin="anonymous"></script>
<script src="{{ mix('/js/manifest.js','backend') }}" ></script>
<script src="{{ mix('/js/vendor.js','backend') }}" ></script>
<script src="{{ mix('/js/admin.js','backend') }}" ></script>
<script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>
@livewireScripts
@toastr_render
@stack('scripts')
@yield('footer')
