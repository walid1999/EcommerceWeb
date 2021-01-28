@extends('base')

@section('content')
    

    <div style="text-align: center" >
        <h1>Mon compte</h1>

        <p>Vous êtes bien connecté.</p>

        <br/>
    </div>

    <div class="container">
    
    
    <section class="contact-form">
        <form class="form-signin" action="/inscription" method="post">
        {{ csrf_field() }}

        <h2 class="form-signin-heading">Modifier mon compte</h2>

        <br/>

        <p><input type="email" name="email" placeholder="Nouvelle email"></p>
        @if ($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
        @endif

        <p><input type="password" name="password" placeholder="Nouveau mot de passe"></p> 
        @if ($errors->has('password'))
            <p>{{ $errors->first('password') }}</p>
        @endif

        <p><input type="password" name="password_confirmation" placeholder="Nouveau mot de passe (confirmation)"></p>
        @if ($errors->has('password_confirmation'))
            <p>{{ $errors->first('password_confirmation') }}</p>
        @endif

        <p><input class="btn btn-large btn-black " type="submit" value="Modifier"></p>
        </form>
    </section>
    
    </div>
@endsection