@extends('commons.default')

@section('title', 'Back Admin - profil utilisateur')

@section('styles')
    <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
    <div class="container" id="content-wrapper">
        <h2 class="center indigo darken-1 white-text">Profil utilisateur</h2>

        @if (Session::has('flash_user'))
            <div class="row">
                <div class="col s12 m8 offset-m2 grey lighten-2 green-text div-alert z-depth-4">
                    <p>{{Session::get('flash_user')}}</p>
                </div>
            </div>
        @endif

    <div class="row">
        <div class="col s12 m6 offset-m3">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title center">{{$user->first_name}}, {{$user->first_name}}</span>
                    <div class="divider"></div>
                    <div class="section">
                        <p>Email : {{$user->email}}</p>
                        <p>Téléphone :
                            @if($user->phone == null)
                                <span>Pas de téléphone</span>
                             @else {{$user->phone}}
                            @endif
                        </p>
                        <p>Adresse : {{$user->address}} {{$user->postal_code}} {{$user->city}}</p>
                        <p>Admin :
                            @if($user->admin == 0)
                                <span>L'utilisateur n'est pas admin</span>
                            @else
                                <span>L'utilisateur est admin</span>
                            @endif
                        </p>
                    </div>
                    <p><a class="waves-effect waves-light btn red" href="{{route('adminusers.edit', $user->id)}}">Modifier</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('.div-alert').delay(3000).slideUp(300);
        })
    </script>
@endsection