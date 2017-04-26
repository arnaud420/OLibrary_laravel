@extends('commons.default')

@section('title', 'Exemplaires')

@section('styles')
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
@endsection

@section('content')
    <div class="row">
        <div class="col s12 m2">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator responsive-img" src="http://lelivrequifaitdireoui.quebec/resources/livre.png">
                </div>
                <div class="card-content">
                    <span class="card-title activator center-align" id="titre-livre">Titre</span>
                </div>
                <div class="card-reveal">
                    <span class="card-title">Titre<i class="material-icons right">close</i></span>
                    <p class="center-align">Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
@endsection
