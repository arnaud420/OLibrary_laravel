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
                            <p>Genre : {{$artwork->type->type_name}}</p>
                            <p class="paddingBot">Collection : {{$artwork->collection}}</p>

                            <div class="divider"></div>
                            <div class="section">
                                @if(count($artwork->exemplaires) > 1)
                                <p class="center paddingBot" style="text-decoration: underline;">L'oeuvre possède {{count($artwork->exemplaires)}} exemplaires.</p>
                                @elseif(count($artwork->exemplaires) == 1)
                                    <p class="center paddingBot" style="text-decoration: underline;">L'oeuvre possède {{count($artwork->exemplaires)}} exemplaire.</p>
                                @else
                                    <p class="center paddingBot">L'oeuvre n'a pas d'exemplaire disponible.</p>
                                @endif
                                    <p>
                                        Ajouter un exemplaire<a href="{{route('adminartworks.exemplaires.create', $artwork->id)}}"><i class="material-icons green-text">add</i></a>
                                    </p>

                            @foreach($artwork->exemplaires as $exemplaire)
                                    <p>{{$exemplaire->exemplaire_name}} |
                                        <span>Quantité restante : {{$exemplaire->exemplaire_quantity}}</span>
                                    </p>
                                @endforeach
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection