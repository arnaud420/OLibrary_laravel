@extends('commons.default')

@section('title', 'Back Admin - users')

@section('styles')
    <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
    <div class="row">
        <div class="col s12">
            <h2 class="center indigo darken-2 white-text">Liste des oeuvres</h2>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12 col m3">
            <select>
                <option value="" disabled selected>Trier par</option>
                <option value="1">Date</option>
                <option value="2">Nom</option>
                <option value="3">Prenom</option>
                <option value="4">Titre</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <table class="striped centered responsive-table">
                <thead>
                <tr>
                    <th>Couverture</th>
                    <th>Nom auteur</th>
                    <th>Prénom</th>
                    <th>Titre de l'oeuvre</th>
                    <th>Date de parution</th>
                    <th>Editer</th>
                    <th>Supprimer</th>
                </tr>
                </thead>

                <tbody>
                @foreach($artworks as $artwork)
                    <tr>
                        <td><img src="" style="height: 100px; width: 100px"></td>
                        <td>{{$artwork->author->last_name}}</td>
                        <td>{{$artwork->author->first_name}}</td>
                        <td>{{$artwork->artwork_title}}</td>
                        <td>{{$artwork->artwork_date}}</td>
                        <td><a class="waves-effect waves-light btn orange" href="{{route('adminartworks.show', $artwork->id)}}">Editer</a></td>
                        <td>{!! Form::open(['method' => 'DELETE', 'route' => ['adminartworks.destroy', $artwork->id]]) !!}
                                {!! Form::submit('Supprimer', ['class' => 'waves-effect waves-light btn red', 'onclick' => 'return confirm(\'Voulez-vous vraiment supprimer cette oeuvre ?\')']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="center-align">
            {!! $artworks->render() !!}
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