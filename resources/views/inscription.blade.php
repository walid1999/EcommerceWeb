@extends('base')

@section('content')

<div class="container">
    <form class="form-signin" action="/inscription" method="post">
        {{ csrf_field() }}

        <h2 class="form-signin-heading">Inscription</h2>
        <br/>
        <p><input type="text" name="nom" placeholder="Nom"></p>

        <p><input type="text" name="prenom" placeholder="Prénom"></p>

        <p><input type="text" name="adresse" placeholder="Adresse"></p>

        <p><input type="date" name="date_naissance" placeholder="Date de naissance"></p>

        <p><input type="email" name="email" placeholder="Email" value="{{ old('email') }}"></p>
        @if ($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
        @endif

        <p><input type="password" name="password" placeholder="Mot de passe"></p> 
        @if ($errors->has('password'))
            <p>{{ $errors->first('password') }}</p>
        @endif

        <p><input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)"></p>
        @if ($errors->has('password_confirmation'))
            <p>{{ $errors->first('password_confirmation') }}</p>
        @endif

        <p><input class="btn btn-large btn-black " type="submit" value="M'inscrire"></p>

    </form>
</div>
@endsection