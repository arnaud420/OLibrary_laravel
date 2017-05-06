@extends('commons.default')

@section('title', 'Back Admin - Artwork show')

@section('styles')
    <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
    <h2 class="center indigo darken-1 white-text">Oeuvre</h2>

    <div class="row">
        <div class="col s12 grey darken-3 white-text valign-wrapper">
            <div class="row col s12">
                <h3 class="center white-text">{{$artwork->artwork_title}}</h3>
                <div id="divShowUser">
                    <img src="" class="hide-on-med-and-up valign center" style="height: 200px; width: 200px;">

                    <img src="" class="left hide-on-small-and-down" style="height: 250px; width: 200px; margin-right: 15px">
                    <p>Auteur : {{$artwork->author->last_name}}, {{$artwork->author->first_name}} </p>
                    <p>Date : {{$artwork->artwork_date}}</p>
                    <p>Editeur : {{$artwork->authority->authority_name}}</p>
                    <p>Genre : {{$artwork->type->type_name}}</p>
                    <p>Collection : {{$artwork->collection}}</p>

                    <div class="row">
                        <div class="col s12 center">
                            <p>Quantité disponible : x </p>
                            <p>Emprunté par : <span>Emprunteur</span> </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 center">
                            <p><a class="waves-effect waves-light btn red" href="{{route('adminartworks.edit', $artwork->id)}}">Modifier</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection