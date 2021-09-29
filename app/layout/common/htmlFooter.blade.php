@livewireScripts

<script src="{{mix('/app/js/manifest.js')}}"></script>
<script src="{{mix('/app/js/vendor.js')}}"></script>
<script src="{{mix('/app/js/app.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
    WebFont.load({
        google: {
            families: ['Poppins:300,400,700']
        }
    });
</script>
@stack('scripts')
</body>
</html>
