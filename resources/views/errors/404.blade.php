@extends('layouts.app')
@section('title') Fehler 404 - Seite nicht gefunden :: @parent @endsection
@section('content')
<!--==============page header============-->
    <div class="page-breadcrumb" data-stellar-background-ratio="0.5">
        <div class="container text-center">
            <h1>Fehler 404 - Seite nicht gefunden</h1>
        </div>
    </div>
    <!--==============end page header============-->
    <div class="space-80"></div>
    <div class="container text-center">
            <h1 class="error-digit">
                404
            </h1>
            <p class="lead">Es tut uns leid, aber die Seite, die Sie suchen existiert nicht.</p>
        </div>

    <div class="space-80"></div>

@endsection
