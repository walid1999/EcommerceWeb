@extends('base')

@section('content')



<div class="container">

    <form class="form-signin" action="/connexion" method="post">
        {{ csrf_field() }}
        <h2 class="form-signin-heading">Connexion</h2>
        <br/>
        <p><input type="email" name="email" placeholder="Email" value="{{ old('email') }}"></p>
        @if ($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
        @endif

        <p><input type="password" name="password" placeholder="Mot de passe"></p>
        @if ($errors->has('password'))
            <p>{{ $errors->first('password') }}</p>
        @endif

        <p><input class="btn btn-large btn-black " type="submit" value="Se connecter"></p>

    </form>

    </div>

@endsection