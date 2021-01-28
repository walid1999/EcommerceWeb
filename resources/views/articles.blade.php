@extends('base')

@section('content')


      <!-- Three columns of text below the carousel -->
      <div class="row">
       @foreach($products as $product)
       <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140" src="{{ $product->image }}">
          <h2>{{ $product->title }} </h2>
          <h3> {{$product->price}} € </h3>
          <p><a class="btn" href="{{ route('article', $product->id) }}">Voir Produit </a></p>
        </div><!-- /.span4 -->
       @endforeach     
 

  
      </div><!-- /.row -->

        
@endsection