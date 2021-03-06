@extends('layouts.master')

@section('content')
  <div class="col-md-12">
    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-primary">Catégorie 1</strong>
        <h5 class="mb-0">{{ $product->title}}</h5>
        <p class="card-text mb-auto">{{ $product->description }}</p>
        <strong class="card-text mb-auto">{{ $product->getPrice() }}</strong>
        <form action="{{ route('cart.store') }}" method='POST'>
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
          <button type="submit" class="btn btn-dark">Ajouter au panier</button>
        </form>
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="{{asset('products/'.$product->image)}}" alt="" width="300" height="250">
      </div>
    </div>
  </div>
@endsection