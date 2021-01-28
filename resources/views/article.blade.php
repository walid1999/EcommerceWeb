@extends('base')


@section('content')


      <div class="featurette">
        <img style="height: 380px; " class="featurette-image pull-right" src="{{ $product->image }}">
        <h2 class="featurette-heading">{{ $product->title }}</h2>
        <h2>{{ $product->price }} € </h2>
        <p style="overflow-wrap: break-word; " class="lead">{{ $product->description }}</p>
         <form action="{{ route('store') }}" method="POST">
            @csrf
           <input type="hidden" name="product_id" value="{{ $product->id }}">
          
        
           <button type="submit" class="btn btn-dark">Ajouter au panier</button>   
        </form>

@endsection
