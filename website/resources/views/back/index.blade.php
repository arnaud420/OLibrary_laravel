@extends('commons.default')

@section('title', 'Back Admin')

@section('styles')
    <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
    <div class="container" id="content-wrapper">
        <div class="row">
            <div class="col s12">
                <h2 class="center indigo darken-2 white-text">Espace Admin</h2>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <h3 class="left adminTitle">Gestion des utilisateurs</h3>
            </div>
        </div>

        <div class="row">
            <div class="divider"></div>
        </div>

        <div class="row">
            <div class="col s12 m4 l2">
                <li class="collection-item valign-wrapper">
                    <a href="{{route('adminusers.index')}}"><i class="indigo-text darken-1 material-icons large valign">person</i></a>
                    <span>Utilisateurs</span>
                </li>
            </div>

            <div class="col s12 m4 l2">
                <li class="collection-item valign-wrapper">
                    <a href="{{route('adminusers.create')}}"><i class="indigo-text darken-1 material-icons large valign">person_add</i></a>
                    <span>Ajout d'utilisateur</span>
                </li>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <h3 class="left adminTitle">Gestion des oeuvres</h3>
            </div>
        </div>

        <div class="row">
            <div class="divider"></div>
        </div>

        <div class="row">
            <div class="col s12 m4 l2">
                <li class="collection-item valign-wrapper">
                    <a href="{{route('adminartworks.index')}}"><i class="indigo-text darken-1 material-icons large valign">book</i></a>
                    <span>Oeuvres</span>
                </li>
            </div>

            <div class="col s12 m4 l2">
                <li class="collection-item valign-wrapper">
                    <a class='dropdown-button' data-activates='dropdown1' href="#"><i class="indigo-text darken-1 material-icons large valign">add</i></a>
                    <span>Ajouter une oeuvre</span>
                    <ul id='dropdown1' class='dropdown-content'>
                        <li><a class="indigo-text darken-1" href="{{route('adminauthor.create')}}">Nouvel auteur</a></li>
                        <li class="divider"></li>
                        <li><a class="indigo-text darken-1" href="{{route('adminartworks.create')}}">Auteur existant</a></li>
                    </ul>
                </li>
            </div>

            <div class="col s12 m4 l2">
                <li class="collection-item valign-wrapper">
                    <a href="{{route('admintype.create')}}"><i class="indigo-text darken-1 material-icons large valign">add_to_photos</i></a>
                    <span>Ajouter un genre d'oeuvre</span>
                </li>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <h3 class="left adminTitle">Gestion des autorités</h3>
            </div>
        </div>

        <div class="row">
            <div class="divider"></div>
        </div>

        <div class="row">
            <div class="col s12 m4 l2">
                <li class="collection-item valign-wrapper">
                    <a href="{{route('adminauthorities.index')}}"><i class="indigo-text darken-1 material-icons large valign">group</i></a>
                    <span>Autorités</span>
                </li>
            </div>

            <div class="col s12 m4 l2">
                <li class="collection-item valign-wrapper">
                    <a class='dropdown-button' data-activates='dropdown2' href="#"><i class="indigo-text darken-1 material-icons large valign">group_add</i></a>
                    <span>Ajout d'autorités</span>
                    <ul id='dropdown2' class='dropdown-content'>
                        <li><a class="indigo-text darken-1" href="{{route('adminfamilyauthoritie.create')}}">Nouvelle famille d'autorité</a></li>
                        <li class="divider"></li>
                        <li><a class="indigo-text darken-1" href="{{route('adminauthorities.create')}}">Famille d'autorité existante</a></li>
                    </ul>
                </li>
            </div>
        </div>

    </div>

@endsection