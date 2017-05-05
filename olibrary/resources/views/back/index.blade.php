@extends('commons.default')

@section('title', 'Back Admin')

@section('styles')
    <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
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
                <a href="{{route('adminusers.index')}}"><i class="material-icons large valign">person</i></a>
                <span>Utilisateurs</span>
            </li>
        </div>

        <div class="col s12 m4 l2">
            <li class="collection-item valign-wrapper">
                <a href="{{route('adminusers.create')}}"><i class="material-icons large valign">person_add</i></a>
                <span>Ajout d'utilisateur</span>
            </li>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <h3 class="left adminTitle">Gestion des emprunts</h3>
        </div>
    </div>

    <div class="row">
        <div class="divider"></div>
    </div>

    <div class="row">
        <li class="collection-item valign-wrapper">
            <a href="#"><i class="material-icons large valign">book</i></a>
            <span>Oeuvres</span>
        </li>
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
        <li class="collection-item valign-wrapper">
            <a href="#"><i class="material-icons large valign">group</i></a>
            <span>Autorités</span>
        </li>
    </div>


@endsection