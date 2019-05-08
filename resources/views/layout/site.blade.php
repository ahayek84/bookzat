<!DOCTYPE html>
<html lang="en" class="">
<head>
    <title>BookZat</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        WebFontConfig = {
            google: {
                families: [ 'Fira+Sans', 'Karla' ]
            },
            active: function() {
                document.cookie ='webfont=1; expires='+(new Date(new Date().getTime() + 86400000)).toGMTString()+'; path=/'
            }
        };
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js" async defer></script>
    <link rel="prefetch" href="https://fonts.googleapis.com/css?family=Fira+Sans%7CKarla">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>
        //<![CDATA[
        window.gon={};gon.countryCodes=["HK","SG","MY","AE","ES","IT","NL","GB","PT","FR","GB"];gon.countrySelected="AE";gon.locale="en";gon.localeCity="dubai";gon.googleMapsKey="AIzaSyBkfRYGUOxn-ZWwHNw7Tgw1EDUUVRqIpcI";gon.turnOffCalculatorPopupCookie="turn_off_calculator_popup";gon.cloudinaryCloudName="guestready-website";gon.cloudinaryApiKey="896266439681948";
        //]]>
    </script>

    <!-- alternate links -->

    <link rel="alternate" hreflang="en" href="index.html" />
    <link rel="alternate" hreflang="fr" href="../../../fr/dubai/airbnb-management/index.html" />

    <!-- for Facebook/Linkedin -->
    <meta property="og:title" content="Airbnb Management Service in Dubai | Dubai | United Arab Emirates | GuestReady" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="/og.png" />
    <meta property="og:url" content="../../../fr/dubai/airbnb-management/index.html" />
    <meta property="og:description" content="&quot;Boost your Airbnb income with GuestReady&#39;s Airbnb Management service in Dubai: concierge, cleaning, luxury linen, personal check-ins, and more.&quot;
" />
    <!-- for Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Airbnb Management Service in Dubai | Dubai | United Arab Emirates | GuestReady" />
    <meta name="twitter:description" content="&quot;Boost your Airbnb income with GuestReady&#39;s Airbnb Management service in Dubai: concierge, cleaning, luxury linen, personal check-ins, and more.&quot;
" />
    <meta name="twitter:image" content="/og.png" />


    <link rel="stylesheet" media="all" href="../../../assets/public.css" />
    <script src="../../../assets/public.js" async="async"></script>
    <meta name="csrf-param" content="authenticity_token" />
    <meta name="csrf-token" content="THmCNoSvntvYInEsBieZ4nhAuWYamlWsJKmO1gwj7+g1QlKersFm7KQR9XebFdD8nIZfSrbDtoVdd2bTjH892g==" />


    <!-- TrustBox script -->
    <script type="text/javascript" src="https://widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async defer></script>
    <!-- End Trustbox script -->
@yield('scripts', '')

<!-- Global Spark Object -->
    <script>
        window.Spark = <?php echo json_encode(array_merge(
            Spark::scriptVariables(), []
        )); ?>;
    </script>

</head>
<body class="controller-pages action-landing  locale-en-dubai">
<script data-turbolinks-eval="false">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-80055390-1', 'auto');
    ga('set', 'location', location.href.split('#')[0]);
    ga('send', 'pageview', { "title": document.title });
</script>

<!-- End Google Tag Manager (noscript) -->

<!-- header -->

@include('common.header')

@yield('content')

@include('common.footer')

</body>
</html>






