@extends('base')

@section('content')

    <form action="/inscription" method="post">
        {{ csrf_field() }}

        <p><input type="email" name="email" placeholder="Email" value="{{ old('email') }}"></p>
        @if ($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
        @endif

        <p><input type="password" name="password" placeholder="Mot de passe"></p> /** Un message d'erreur apparait dès que l'utilisateur ne respecte pas les conditions d'inscription */
        @if ($errors->has('password'))
            <p>{{ $errors->first('password') }}</p>
        @endif

        <p><input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)"></p>
        @if ($errors->has('password_confirmation'))
            <p>{{ $errors->first('password_confirmation') }}</p>
        @endif

        <p><input type="submit" value="Se connecter"></p>

    </form>

@endsection