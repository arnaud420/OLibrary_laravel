@extends('commons.default')

@section('title', 'Back Admin - users')

@section('styles')
    <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
    <div class="row">
        <div class="col s12">
            <h2 class="center">Liste des utilisateurs</h2>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <table class="striped centered responsive-table">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                </thead>

                <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a class="waves-effect waves-light btn orange">modifier</a></td>
                    <td>{!! Form::open(['method' => 'DELETE', 'route' => ['adminusers.destroy', $user->id]]) !!}
                            {!! Form::submit('Supprimer', ['class' => 'waves-effect waves-light btn red', 'onclick' => 'return confirm(\'Voulez-vous vraiment supprimer cet utilisateur ?\')']) !!}
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
            {!! $users->links() !!}
        </div>
    </div>
@endsection