<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.6.0/dist/alpine.min.js" defer></script>
<script src="https://unpkg.com/moment@2.22.1/min/moment.min.js"></script>
<script src="https://kit.fontawesome.com/5573a6d434.js" crossorigin="anonymous"></script>
<script src="{{ mix('/js/manifest.js','backend') }}" ></script>
<script src="{{ mix('/js/vendor.js','backend') }}" ></script>
<script src="{{ mix('/js/admin.js','backend') }}" ></script>
@livewireScripts
@stack('scripts')
@yield('footer')
