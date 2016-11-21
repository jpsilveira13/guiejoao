<!--===============main navigation + top bar==========================-->
<header class="header header-top-transparent">
    <!--top bar-->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 hidden-xs">
                    <ul class="list-inline">
                        <li><a href="javascript:void(0)"><i class="ion-ios-telephone"></i> +49 7071 54978-00</a></li>
                        <li><a href="mailto:info@dolceforno.de"><i class="ion-email"></i> info@dolceforno.de</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end top bar-->

    <!--main navigation-->
    <nav class="navbar navbar-default navbar-static-top sticky-header">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">

                    <img src="assets/images/logo-light.png" alt="logo" class="logo-default">
                    <img src="assets/images/logo-dark.png" alt="logo" class="logo-scroll">

                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li class="{{ (Request::is('/') ? 'active' : '') }}">
                      <a href="{{ url('') }}"><i class="fa fa-home"></i> Home</a>
                  </li>
                  <li class="{{ (Request::is('history') ? 'active' : '') }}">
                      <a href="{{ url('history') }}">History</a>
                  </li>
                  <li class="{{ (Request::is('produkte') ? 'active' : '') }}">
                      <a href="{{ url('produkte') }}">Produkte</a>
                  </li>
                  <li class="dropdown {{ (Request::is('produktsundservices') ? 'active' : '') }}">
                      <a href="#" class="dropdown-toggle js-activated"
                       data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                       Dienstleistungen <span class="caret"></span></a>
                       <ul class="dropdown-menu">
                         <li class="{{ (Request::is('brotsortiment') ? 'active' : '') }}">
                             <a href="{{ url('brotsortiment') }}">Brotsortiment</a>
                         </li>
                                    <li><a href="{{ url('dolcesalato') }}">Dolce Salato Sortiment</a></li>
                                    <li><a href="{{ url('paneria') }}">Paneria Snackbar Tübingen</a></li>
                                    <li><a href="{{ url('partyservice') }}">Partyservice</a></li>
                                    <li><a href="{{ url('torten') }}">Torten</a></li>
                      </ul>
                  </li>
                  <li class="{{ (Request::is('impressum') ? 'active' : '') }}">
                      <a href="{{ url('impressum') }}">Impressum</a>
                  </li>
                  <li class="{{ (Request::is('kontakt') ? 'active' : '') }}">
                      <a href="{{ url('kontakt') }}">Kontakt</a>
                  </li>
                  <li class="{{ (Request::is('aktuell') ? 'active' : '') }}">
                      <a href="{{ url('aktuell') }}">Aktuell</a>
                  </li>

                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
</header>

<!--===============end main navigation + top bar =====================-->
