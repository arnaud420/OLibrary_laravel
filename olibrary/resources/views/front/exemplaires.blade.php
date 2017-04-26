@extends('commons.template')

@section('titre')
    Exemplaires
@endsection

@section('content')
    <div class="row">
        <div class="col s12 m2">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" style="height: 150px; width: 150px; margin: 0 auto" src="http://lelivrequifaitdireoui.quebec/resources/livre.png">
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