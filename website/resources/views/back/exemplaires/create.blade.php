@extends('commons.default')

@section('title', 'Back Admin - Exemplaire create')

@section('styles')
    <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
    <div class="container" id="content-wrapper">
        <h2 class="center indigo darken-1 white-text">Ajouter un exemplaire</h2>

        <div class="row">
            <form class="col s12 m8 offset-m2" method="post" action="{{route('adminartworks.exemplaires.store', $artwork)}}" enctype="multipart/form-data">

                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                <input type="hidden" name="artworks_id" value="{{$artwork->id}}">

                <div class="input-field col s12">
                    <input type="text" class="validate" name="exemplaire_name">
                    <label for="exemplaire_name">Titre de l'exemplaire</label>
                </div>

                <div class="input-field col s12">
                    <input type="number" class="validate materialize-textarea" name="exemplaire_quantity">
                    <label for="exemplaire_quantity">Quantité d'exemplaire</label>
                </div>

                <div class="col s12">
                    <input type="submit" value="Ajouter" class="waves-effect waves-light btn-large green accent-3 right">
                </div>

            </form>
        </div>

    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('select').material_select();
        });
    </script>
@endsection