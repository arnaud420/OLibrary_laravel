@extends('commons.default')

@section('title', 'Back Admin - authorities')

@section('styles')
    <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
    <div class="row">
        <div class="col s12">
            <h2 class="center indigo darken-2 white-text">Liste des autorités</h2>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12 col m3">
            <select>
                <option value="" disabled selected>Trier par</option>
                <option value="1">ID</option>
                <option value="2">Nom</option>
                <option value="4">Email</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <table class="striped centered responsive-table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                </thead>

                <tbody>
                @foreach($authorities as $authoritie)
                    <tr>
                        <td>{{$authoritie->id}}</td>
                        <td>{{$authoritie->authority_name}}</td>
                        <td>{{$authoritie->authority_email}}</td>
                        <td>{{$authoritie->authority_phone}}</td>
                        <td><a class="waves-effect waves-light btn orange" href="{{route('adminauthorities.edit', $authoritie->id)}}">Modifier</a></td>
                        <td>{!! Form::open(['method' => 'DELETE', 'route' => ['adminauthorities.destroy', $authoritie->id]]) !!}
                                {!! Form::submit('Supprimer', ['class' => 'waves-effect waves-light btn red', 'onclick' => 'return confirm(\'Voulez-vous vraiment supprimer cette autorité ?\')']) !!}
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
            {!! $authorities->links() !!}
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