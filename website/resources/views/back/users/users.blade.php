@extends('commons.default')

@section('title', 'Back Admin - users')

@section('styles')
    <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
    <div class="container" id="content-wrapper">
        <div class="row">
            <div class="col s12">
                <h2 class="center indigo darken-2 white-text">Liste des utilisateurs</h2>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <table class="striped centered responsive-table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Profil</th>
                        <th>Supprimer</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->email}}</td>
                            <td><a class="waves-effect waves-light btn orange" href="{{route('adminusers.show', $user->id)}}">profil</a></td>
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
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('select').material_select();
        });
    </script>
@endsection