@extends('commons.default')

@section('title', 'Back Admin - ajout autoritée')

@section('styles')
    <link rel="stylesheet" href="/css/admin.css">
@endsection

@section('content')
    <h2 class="center grey white-text">Ajout d'autorité</h2>

    <div class="row">
        <form class="col s12 m8 offset-m2" method="post" action="{{route('adminauthorities.store')}}">

            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

            <div class="input-field col s12">
                <input type="text" class="validate" name="authority_name">
                <label for="authority_name">Nom de l'autorité</label>
            </div>

            <div class="input-field col s12">
                <input type="email" class="validate" name="authority_email">
                <label for="authority_email">Email de l'autorité</label>
            </div>

            <div class="input-field col s12 m12 l6">
                <input type="number" class="validate" name="authority_phone">
                <label for="authority_phone">Téléphone de l'autorité</label>
            </div>

            <div class="input-field col s6">
                <select name="families_id">
                    @foreach($families as $familie)
                        <option value="{{$familie->id}}">{{$familie->family_name}}</option>
                    @endforeach
                </select>
                <label for="families_id">Nom famille d'autorité</label>
            </div>

            <div class="col s12">
                <input type="submit" value="Ajouter" class="waves-effect waves-light btn-large green accent-3 right">
            </div>

        </form>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('select').material_select();
        });
    </script>
@endsection