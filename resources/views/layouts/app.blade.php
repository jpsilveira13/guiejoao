<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dolce Forno GmbH Italienische Bäckerei & Konditorei @show</title>
    @section('meta_keywords')
        <meta name="keywords" content="torten, messe, brotsortiment, dolce salato, snackbar, tübingen"/>
    @show @section('meta_author')
        <meta name="author" content="Guilherme Cortez"/>
    @show @section('meta_description')
        <meta name="description"
              content="Die italienische Backmanufaktur Dolce Forno ist ein mittelgroßes Familienunternehmen dass heute noch nach der antiken Tradition bäckt."/>
    @show

    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/bower_components/flexslider/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/jasny-bootstrap/css/jasny-bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lightbox-2/css/lightbox.min.css') }}" rel="stylesheet">
    <!--slider revolution-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/navigation.css') }}">
    <!--main css file-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">



    @yield('styles')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="{!! asset('assets/site/ico/favicon.ico')  !!} ">
</head>
<body>
@include('partials.nav')


@yield('content')



@include('partials.footer')

<!-- Scripts -->
@yield('scripts')
<script src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/flexslider/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/jasny-bootstrap/js/jasny-bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-hover-dropdown.min.js') }}"></script>
<script src="{{ asset('assets/js/template-custom.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/lightbox-2/js/lightbox.min.js') }}"></script>

<!--revolution slider-->
<script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script>
    jQuery(document).ready(function () {
        jQuery("#slider1").revolution({
            sliderType: "standard",
            jsFileLocation: "../../revolution/js/",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {
                arrows: {enable: true}
            },
            parallax: {
                type: "on",
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85],
                origo: "enterpoint",
                speed: 400,
                bgparallax: "on",
                disable_onmobile: "off"
            },
            gridwidth: 1170,
            gridheight: 600
        });
    });
</script>

<script src="{{ asset('assets/js/contact.js') }}" type="text/javascript"></script>
<!-- Google Maps -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBENlIxSKmTEK2fJeKjKo_JMxC9jE2IkL4"></script>
<script src="assets/js/jquery.gmaps.min.js"></script>
<script type="text/javascript">
    (function ($) {
        $(document).ready(function () {

            $('#googlemaps').gMap({
                maptype: 'ROADMAP',
                scrollwheel: false,
                zoom: 13,
                markers: [
                    {
                        address: 'Tübingen, 122 Bismarckstr.', // Your Adress Here
                        html: '<strong>Our Office</strong><br>45 Park Avenue, Apt. 303 </br>New York, NY 302012 ',
                        popup: false,
                        icon: {
                            image: "assets/images/marker.png",
                            iconsize: [28, 40],
                            iconanchor: [20, 40]
                        }
                    }
                ]
            });
        });
    })(this.jQuery);
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v2.8&appId=354523451392220";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>
    $(document).ready(function () {
        if ($('.menu-filter-items').length) {
            var $galleryFilter = $('.menu-filter-items').isotope({
                itemSelector: '.menu-item',
                masonry: {
                    columnWidth: '.menu-item'
                }
            });
            $('.menu-filter-list').on('click', 'li', function () {
                var filterValue = $(this).attr('data-filter');
                $('.menu-filter-list').find('.is-checked').removeClass('is-checked');
                $(this).addClass('is-checked');
                $galleryFilter.isotope({filter: filterValue});
            });

            $galleryFilter.imagesLoaded().progress(function () {
                $galleryFilter.isotope('layout');
            });
        }
    });
</script>

</body>
</html>
