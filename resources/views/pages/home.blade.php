@extends('layouts.app')
@section('title') Home :: @parent @endsection
@section('content')
<!--pre-loader-->
<div id="preloader"></div>
        <!--pre-loader-->

        <!--slider revolution start-->
        <div class="rev_slider_wrapper">
            <div id="slider1" class="rev_slider fullwidthabanner"  data-version="5.0">
                <ul>
                    <li data-transition="random">
                        <!-- MAIN IMAGE -->

                        <img src="assets/images/bk4.png"  alt=""  width="1920" height="1000" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme slider-title"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-fontsize="['80','80','80','45']"
                             data-lineheight="['80','80','80','50']"
                             data-width="none"
                             data-height="none"
                             font-weight: bold;

                             data-transform_idle="o:1;"
                             data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="auto:auto;s:300;"
                             data-start="500">Dolce Forno</div>
                        <div class="tp-caption tp-resizeme slider-caption"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['90','90','90','70']"
                             data-fontsize="['20','20','20','15']"
                             data-lineheight="['25','25','25','20']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="auto:auto;s:300;"
                             data-start="1000">Seit über 25 Jahren Italienische Back Manufaktur</div>
                        <div class="tp-caption tp-resizeme slider-button"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['160','160','160','120']"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="auto:auto;s:300;"
                             data-start="1500"><a href="#" class="btn btn-xl btn-primary">Jetzt entdecken</a></div>
                    </li>
                    <li data-transition="random">
                        <!-- MAIN IMAGE -->

                        <img src="assets/images/bk3.png"  alt=""  width="1920" height="1000" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme slider-title"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-fontsize="['80','80','80','45']"
                             data-lineheight="['80','80','80','50']"
                             data-width="none"
                             data-height="none"

                             data-transform_idle="o:1;"
                             data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="auto:auto;s:300;"
                             data-start="500">Paninoteca</div>
                        <div class="tp-caption tp-resizeme slider-caption"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['90','90','90','70']"
                             data-fontsize="['20','20','20','15']"
                             data-lineheight="['25','25','25','20']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="auto:auto;s:300;"
                             data-start="1000">Täglich frisches italienisches Brot aus unseren Steinöfen und ohne chemischen Zusatzstoffen.</div>
                        <div class="tp-caption tp-resizeme slider-button"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['160','160','160','120']"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="auto:auto;s:300;"
                             data-start="1500"><a href="#" class="btn btn-xl btn-primary">Jetzt entdecken</a></div>
                    </li>
                    <li data-transition="random">
                        <!-- MAIN IMAGE -->

                        <img src="assets/images/bk2.png"  alt=""  width="1920" height="1000" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme slider-title"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-fontsize="['80','80','80','45']"
                             data-lineheight="['80','80','80','50']"
                             data-width="none"
                             data-height="none"

                             data-transform_idle="o:1;"
                             data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="auto:auto;s:300;"
                             data-start="500">Pasticcini</div>
                        <div class="tp-caption tp-resizeme slider-caption"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['90','90','90','70']"
                             data-fontsize="['20','20','20','15']"
                             data-lineheight="['25','25','25','20']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="auto:auto;s:300;"
                             data-start="1000">Ausgewählte Qualitsprodukte mit Geschmack !</div>
                        <div class="tp-caption tp-resizeme slider-button"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['160','160','160','120']"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="auto:auto;s:300;"
                             data-start="1500"><a href="#" class="btn btn-xl btn-primary">Jetzt entdecken</a></div>
                    </li>
                </ul>
            </div><!-- END REVOLUTION SLIDER -->
        </div><!-- END OF SLIDER WRAPPER -->
        <!--end slider revolution-->

        <div class="space-70"></div>
        <div class="overflow-hidden">
            <div class="container">
                <div class="row vertical-align-child">
                    <div class="col-md-6 text-center">
                        <h1 class="title-1">Willkommen zu <span class="text-color ">Dolce Forno</span></h1>
                        <h5 class="subtitle">Philosophie</h5>
                        <div class="space-30"></div>
                        <p>
                          Wir backen unsere Backwaren ohne Backmischungen und chem. Backtriebmittel, sondern mit unserem Natursauerteig in dem sich unsere Qualität auszeichnet.
                          Ausgesuchte Mehle , die richtige Teigruhezeiten und die richtige Backzeiten, gibt unseren Broten " die Bekömmlichkeit und die Haltbarkeit".
                        </p>
                        <blockquote>
                          Noi produciamo il nostro pane solo con lievito madre naturale e non con l´aiuto di miscele pronte.
Farine selezionate, lievitazione lunga e cottura a pietra, rendono il nostro pane genuino e permettono di conservarlo anche per più giorni senza perdere il suo sapore e la sua fragranza.

                        </blockquote>
                        <!-- <img src="assets/images/sign.png" alt=""> -->
                        <div class="space-30"></div>
                    </div>
                    <div class="col-md-6">
                        <img src="assets/images/combine2.png" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <div class="space-70"></div>
        <div class="cta-background-3 parallax-background" data-stellar-background-ratio="0.3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-4 text-left">
                        <p class="lead ">
                            " Täglich frisches italienisches Brot aus unseren Steinöfen, ohne chemische Zusatzstoffe und von Hand zubereitet. "
                        </p>
                        <!-- <span class="lead">Rolf Baumann</span> -->
                    </div>
                </div>
            </div>
        </div><!--end call to action-->
        <div class="space-70"></div>

        <div class="container">
            <div class="text-center">
                <h1 class="title-1">besonderes am<span class="text-color "> Mittwoch´s</span></h1>
                <h5 class="subtitle">Arancini (Reiskugeln) und Panzerotti mit Tomaten und Mozzarella.</h5>
                <div class="space-30"></div>
            </div>
            <div class="row vertical-align-child">
                <div class="col-md-6">
                    <div>

                        <!-- Nav tabs -->
                        <ul class="list-inline menu-tabs margin-b-30" role="tablist">
                            <li role="presentation" class="active"><a href="#drink" aria-controls="drink" role="tab" data-toggle="tab">Drinks</a></li>
                            <li role="presentation"><a href="#lunch" aria-controls="lunch" role="tab" data-toggle="tab">Lunch</a></li>
                            <li role="presentation"><a href="#dinner" aria-controls="dinner" role="tab" data-toggle="tab">Dinner</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="drink">
                                <ul class="list-unstyled">
                                    <li class="menu-box clearfix margin-b-20">
                                        <div class="thumb">
                                            <img src="assets/images/a2.jpg" width="70" class="img-responsive" alt="">
                                        </div>
                                        <div class="menu-content">
                                            <h4><a href="#">Special Coffee</a> <span>$7.79</span></h4>
                                            <p>pellentesque enim. Aliquam tempor</p>
                                        </div>
                                    </li><!--end menu box-->
                                    <li class="menu-box clearfix margin-b-20">
                                        <div class="thumb">
                                            <img src="assets/images/a3.jpg" width="70" class="img-responsive" alt="">
                                        </div>
                                        <div class="menu-content">
                                            <h4><a href="#">Beers</a> <span>$12.79</span></h4>
                                            <p>pellentesque enim. Aliquam tempor</p>
                                        </div>
                                    </li><!--end menu box-->
                                    <li class="menu-box clearfix margin-b-20">
                                        <div class="thumb">
                                            <img src="assets/images/a2.jpg" width="70" class="img-responsive" alt="">
                                        </div>
                                        <div class="menu-content">
                                            <h4><a href="#">Milk Tea</a> <span>$16.79</span></h4>
                                            <p>pellentesque enim. Aliquam tempor</p>
                                        </div>
                                    </li><!--end menu box-->
                                    <li class="menu-box clearfix margin-b-20">
                                        <div class="thumb">
                                            <img src="assets/images/img-6.jpg" width="70" class="img-responsive" alt="">
                                        </div>
                                        <div class="menu-content">
                                            <h4><a href="#">Juice</a> <span>$14.79</span></h4>
                                            <p>pellentesque enim. Aliquam tempor</p>
                                        </div>
                                    </li><!--end menu box-->
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="lunch">
                                <ul class="list-unstyled">
                                    <li class="menu-box clearfix margin-b-20">
                                        <div class="thumb">
                                            <img src="assets/images/img-6.jpg" width="70" class="img-responsive" alt="">
                                        </div>
                                        <div class="menu-content">
                                            <h4><a href="#">Salad</a> <span>$7.79</span></h4>
                                            <p>pellentesque enim. Aliquam tempor</p>
                                        </div>
                                    </li><!--end menu box-->
                                    <li class="menu-box clearfix margin-b-20">
                                        <div class="thumb">
                                            <img src="assets/images/img-3.jpg" width="70" class="img-responsive" alt="">
                                        </div>
                                        <div class="menu-content">
                                            <h4><a href="#">Sandwiches</a> <span>$14.79</span></h4>
                                            <p>pellentesque enim. Aliquam tempor</p>
                                        </div>
                                    </li><!--end menu box-->
                                    <li class="menu-box clearfix margin-b-20">
                                        <div class="thumb">
                                            <img src="assets/images/img-1.jpg" width="70" class="img-responsive" alt="">
                                        </div>
                                        <div class="menu-content">
                                            <h4><a href="#">Cakes</a> <span>$9.79</span></h4>
                                            <p>pellentesque enim. Aliquam tempor</p>
                                        </div>
                                    </li><!--end menu box-->
                                    <li class="menu-box clearfix margin-b-20">
                                        <div class="thumb">
                                            <img src="assets/images/img-8.jpg" width="70" class="img-responsive" alt="">
                                        </div>
                                        <div class="menu-content">
                                            <h4><a href="#">Appetizers</a> <span>$4.79</span></h4>
                                            <p>pellentesque enim. Aliquam tempor</p>
                                        </div>
                                    </li><!--end menu box-->
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="dinner">
                                <ul class="list-unstyled">
                                    <li class="menu-box clearfix margin-b-20">
                                        <div class="thumb">
                                            <img src="assets/images/img-9.jpg" width="70" class="img-responsive" alt="">
                                        </div>
                                        <div class="menu-content">
                                            <h4><a href="#">Rice & Flesh</a> <span>$8.79</span></h4>
                                            <p>pellentesque enim. Aliquam tempor</p>
                                        </div>
                                    </li><!--end menu box-->
                                    <li class="menu-box clearfix margin-b-20">
                                        <div class="thumb">
                                            <img src="assets/images/img-6.jpg" width="70" class="img-responsive" alt="">
                                        </div>
                                        <div class="menu-content">
                                            <h4><a href="#">Seafood</a> <span>$11.79</span></h4>
                                            <p>pellentesque enim. Aliquam tempor</p>
                                        </div>
                                    </li><!--end menu box-->
                                    <li class="menu-box clearfix margin-b-20">
                                        <div class="thumb">
                                            <img src="assets/images/img-5.jpg" width="70" class="img-responsive" alt="">
                                        </div>
                                        <div class="menu-content">
                                            <h4><a href="#">Chicken</a> <span>$6.79</span></h4>
                                            <p>pellentesque enim. Aliquam tempor</p>
                                        </div>
                                    </li><!--end menu box-->
                                    <li class="menu-box clearfix margin-b-20">
                                        <div class="thumb">
                                            <img src="assets/images/img-4.jpg" width="70" class="img-responsive" alt="">
                                        </div>
                                        <div class="menu-content">
                                            <h4><a href="#">Veal & Beef</a> <span>$9.79</span></h4>
                                            <p>pellentesque enim. Aliquam tempor</p>
                                        </div>
                                    </li><!--end menu box-->
                                </ul>
                            </div>

                        </div>

                    </div><!--end tabs-->
                </div>
                <div class="col-md-6 text-center">

                    <div class="abso-img">
                        <!-- <a href="menu-tiles.html" class="btn btn-dark btn-xl">View Full Menu</a> -->
                        <img src="assets/images/mittwoch.jpg" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <div class="space-70"></div>
        <div class="about-chefs" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h1 class="text-uppercase"> award winning chefs </h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                        </p>
                    </div>

                </div>
            </div>
        </div><!--about chef cta-->
        <div class="testimonials" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="text-center">
                            <h1 class="title-1">Kundenbewertungen & <span class="text-color "> Meinungen</span></h1>
                            <h5 class="subtitle">Was sie sagen</h5>
                            <div class="space-30"></div>
                        </div>
                        <div class="testi-slider">
                            <ul class="slides">
                                <li>
                                    <p>
                                        Complimenti per il Sito, veramente bello e il profumo si sente per davvero...
                                    </p>

                                    <div class="testi-info">
                                        <!-- <img src="assets/images/avtar-1.jpg" alt="" width="50" class="img-circle"> -->
                                        <h4>Alessio <small> - Dolce Forno Kunden</small></h4>

                                    </div>
                                </li><!--slide item-->
                                <li>
                                    <p>
                                      Ich bin gerade zufaellig auf Ihrer Homepage gelandet (war eigentlich auf der Suche nach einer anderen Websiete). Ich moechte diese Seite nicht verlassen, ohne Euch ein Lob zu dieser klar
                                      strukturierten und schick designten Seite zu hinterlassen!
                                    </p>

                                    <div class="testi-info">
                                        <!-- <img src="assets/images/avtar-2.jpg" alt="" width="50" class="img-circle"> -->
                                        <h4>Alessio <small> - Dolce Forno Kunden</small></h4>

                                        <!-- <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-star"></i>
                                        <i class="ion-ios-star-half"></i> -->
                                    </div>
                                </li><!--slide item-->

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--testimonials end-->

        <div class="cta-background-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 text-center">
                        <h1 class="text-uppercase">Book a table now</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                        </p>
                        <a href="#" class="btn btn-white btn-rounded">Make a reservation</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-skin contact-info">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 margin-b-30">
                        <i class="ion-email"></i>
                        <div class="overflow-hidden">
                            <h4>Email</h4>
                            <p class="lead">
                                info@dolceforno.de
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4 margin-b-30">
                        <i class="ion-email"></i>
                        <div class="overflow-hidden">
                            <h4>Telefon</h4>
                            <p class="lead">
                                +49 7071 5497800
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4 margin-b-30">
                        <i class="ion-map"></i>
                        <div class="overflow-hidden">
                            <h4>Location</h4>
                            <p class="lead">
                                Bismarckstr. 122, Tübingen
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
