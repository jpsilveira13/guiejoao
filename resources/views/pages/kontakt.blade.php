@extends('layouts.app')
@section('title') Kontakt :: @parent @endsection
@section('content')
<!--==============page header============-->
    <div class="page-breadcrumb" data-stellar-background-ratio="0.5">
        <div class="container text-center">
            <h1>Kontakt Uns</h1>
        </div>
    </div>
    <!--==============end page header============-->

    <div class="container-fluid no-padd contact-wrapper">
        <div class="row vertical-align-child no-margin">
            <div class="col-md-8 no-padd">
                <!--Google Maps-->
                <div class="google-map-container">
                    <div id="googlemaps" style="width: 100%;height: 400px;"></div>
                </div>
                <!--/Google Maps-->
            </div>
            <div class="col-md-4 no-padd address-bg">
                <h3>Unsere Position</h3>
                <ul class="list-unstyled">
                  <li>Dolce Forno GmbH</li>
                  <li>Italienische Bäckerei</li>
                  <li>Bismarckstr. 122</li>
                  <li>72072 Tübingen</li>
                  <li>Telefon: +49 7071 5497800 </li>
                  <li>Fax: +49 7071 5497819</li>
                  <li>E-Mail: info@dolceforno.de</li>
                </ul>
            </div>
        </div>
    </div><!--/map wrap-->
    <div class="space-80"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h3 class="text-capitalize text-center margin-b-20">Haben Sie Anregungen, Wünsche oder Fragen? Bitte nehmen Sie Kontakt mit uns auf!</h3>

                <form method="post" action="#" class="resto-contact">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12 margin-b-20">
                                    <input type="text" name="name" class="form-control" placeholder="Full Name...." />
                                </div>
                                <div class="col-sm-12 margin-b-20">
                                    <input type="text" name="email" class="form-control" placeholder="Email Address...." />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 margin-b-20">
                            <textarea name="message" class="form-control" rows="5" placeholder="Message...."></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="data-status"></div> <!-- data submit status -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" name="submit" class="btn btn-rounded btn-primary">Senden</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="space-80"></div>

@endsection
