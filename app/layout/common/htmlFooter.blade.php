@livewireScripts
<script src="{{ mix('/js/manifest.js',"app") }}"></script>
<script src="{{ mix('/js/vendor.js',"app") }}"></script>
<script src="{{ mix('/js/app.js',"app") }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
    WebFont.load({
        google: {
            families: ['']
        }
    });
</script>
<script src="{{ mix('js/tarteaucitron.js', 'app') }}"></script>

<script type="text/javascript">
    var currentLanguage = document.documentElement.lang;
    window.tarteaucitronForceLanguage = currentLanguage;
    tarteaucitron.init({
        "privacyUrl": "",
        "orientation": "bottom",
        "removeCredit": true,
        "showIcon": false,
        "groupServices" : true,
        "moreInfoLink": false
    });
    //tarteaucitron.user.gtagUa = 'G-XXXXXXXX';
    //tarteaucitron.user.gtagMore = function () {};
    //(tarteaucitron.job = tarteaucitron.job || []).push('gtag');
</script>

@stack('scripts')
