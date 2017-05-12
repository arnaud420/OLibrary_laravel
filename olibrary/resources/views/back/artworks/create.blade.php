@extends('commons.default')

@section('title', 'Back Admin - Artwork create')

@section('styles')
    <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
    <div class="container" id="content-wrapper">
        <h2 class="center indigo darken-1 white-text">Ajouter une oeuvre</h2>

        <div class="row">
            <form class="col s12 m8 offset-m2" method="post" action="{{route('adminartworks.store')}}" enctype="multipart/form-data">

                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                <div class="input-field col s12">
                    <input type="text" class="validate" name="artwork_title">
                    <label for="artwork_title">Titre de l'oeuvre</label>
                </div>

                <div class="input-field col s12">
                    <textarea type="text" class="validate materialize-textarea" name="resume"></textarea>
                    <label for="resume">Résumé de l'oeuvre</label>
                </div>

                <div class="input-field col s12 m12 l6">
                    <input type="text" class="validate" name="collection">
                    <label for="collection">Collection de l'oeuvre</label>
                </div>

                <div class="input-field col s12 m12 l6">
                    <input type="text" class="validate" name="artwork_date">
                    <label for="artwork_date">Date de parution de l'oeuvre (format '2012-05-14')</label>
                </div>

                <div class="input-field col s12">
                    <select name="authors_id">
                        @foreach($authors as $author)
                            <option value="{{$author->id}}">{{$author->last_name}}, {{$author->first_name}}</option>
                        @endforeach
                    </select>
                    <label for="authors_id">Auteur de l'oeuvre</label>
                </div>

                <div class="input-field col s6">
                    <select name="types_id">
                        @foreach($types as $type)
                            <option value="{{$type->id}}">{{$type->type_name}}</option>
                        @endforeach
                    </select>
                    <label>Type d'oeuvre</label>
                </div>

                <div class="input-field col s6">
                    <select name="authorities_id">
                        @foreach($authorities as $authoritie)
                            <option value="{{$authoritie->id}}">{{$authoritie->authority_name}}</option>
                        @endforeach
                    </select>
                    <label>Editeur</label>
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