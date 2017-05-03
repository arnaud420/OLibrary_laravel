@extends('commons.default')

@section('title', 'Artwork')

@section('styles')
    <link rel="stylesheet" href="/css/artworks.css">
@endsection

@section('content')
    <div class="row" id="artDiv">
        <div class="col s12">
            <img id="artImg" href="" style="height: 200px; width: 200px; float: left;">
            <h4 id="artTitle">{{$artwork->artwork_title}}</h4>
                <p>{{$artwork->resume}}</p>

            <div class="stars" data-stars="1">
                <svg height="25" width="23" class="star rating" data-rating="1">
                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                </svg>
                <svg height="25" width="23" class="star rating" data-rating="2">
                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                </svg>
                <svg height="25" width="23" class="star rating" data-rating="3">
                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                </svg>
                <svg height="25" width="23" class="star rating" data-rating="4">
                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                </svg>
                <svg height="25" width="23" class="star rating" data-rating="5">
                    <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
                </svg>
            </div>
        </div>

        <div class="col m6 s12" id="artInfo">
            <p>Exemplaires disponibles : x</p>
            <p>Fournisseur : ezzefefzefzef</p>
            <p>URL : zefzefzefzefzefzezefezdfzefzefzefzefzefze</p>
            <p>Auteur : {{$artwork->author->last_name}}, {{$artwork->author->first_name}}</p>
            <p>Date de parution : zefzefzefzefzefze</p>
            <p>Genre : ezfzefzefzefzefzef</p>
        </div>

        <div class="col m4 offset-m1 s12">
            <p>Disponibilité :</p>
            <div class="col s12" id="artDispo">1</div>
            <div class="input-field col s12">
                <select>
                    <option value="" disabled selected>Quantité désirée</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
                <label>Quantité</label>
            </div>
            <a class="waves-effect waves-light btn-large">Emprunter</a>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('.star.rating').click(function(){
                console.log( $(this).parent().data('stars') + ", " + $(this).data('rating'));
                $(this).parent().attr('data-stars', $(this).data('rating'));
            });

            $('select').material_select();
        });


    </script>
@endsection

