@extends('base')


@section('content')


      <div class="featurette">
        <img style="height: 380px; " class="featurette-image pull-right" src="{{ $product->image }}">
        <h2 class="featurette-heading">{{ $product->titre }} </h2>
        <h2>{{ $product->prix }} € </h2>
        <p style="overflow-wrap: break-word; " class="lead">{{ $product->description }}</p>
         <form action="{{ route('panier') }}" method="POST">
           @csrf
           <input type="hidden" name="id_article" value="{{ $product->id_article }}">
    
           <button type="submit" class="btn btn-dark">Ajouter au panier</button>   
        </form>

@endsection
