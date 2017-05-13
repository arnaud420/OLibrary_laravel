@extends('commons.default')

@section('title', 'Back Admin - Artwork show')

@section('styles')
    <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
<div class="container" id="content-wrapper">
    <h2 class="center indigo darken-1 white-text">Oeuvre</h2>

    <div class="row">
        <div class="col s12 m6 offset-m3">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title center">{{$artwork->artwork_title}}</span>
                    <div class="divider"></div>
                        <div class="section">
                            <p>Auteur : {{$artwork->author->last_name}}, {{$artwork->author->first_name}} </p>
                            <p>Date : {{$artwork->artwork_date}}</p>
                            <p>Editeur : {{$artwork->authority->authority_name}}</p>
                            <p>Genre : {{$artwork->type->type_name}}, {{$artwork->type->type_theme}}</p>
                            <p>Collection : {{$artwork->collection}}</p>
                        </div>
                    <div class="row">
                        <div class="col s12">
                            <p><a class="waves-effect waves-light btn red left" href="{{route('adminartworks.edit', $artwork->id)}}">Modifier</a></p>
                            <p><a class="waves-effect waves-light btn green right" href="##">Exemplaires</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection