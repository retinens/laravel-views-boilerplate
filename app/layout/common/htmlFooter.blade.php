@livewireScripts
<script src="{{ mix('/js/manifest.js',"app") }}"></script>
<script src="{{ mix('/js/vendor.js',"app") }}"></script>
<script src="{{ mix('/js/app.js',"app") }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
    WebFont.load({
        google: {
            families: ['Poppins:300,400,700']
        }
    });
</script>
<script src="{{ mix('js/tarteaucitron.js', 'app') }}"></script>

@stack('scripts')
