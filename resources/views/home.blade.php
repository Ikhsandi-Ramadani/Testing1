@extends('layouts.app')

@section('content')
<div class="container text-center">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <h2>Products</h2>
    <div class="row">
        @foreach ($allproducts as $product)
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('tes.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{ $product->name }}</h4>
                        <p class="card-text">{{ $product->description }}</p>
                        <h3>Rp. {{ $product->price }}</h3>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('cart.add', $product->id) }}" class="card-link">Buy</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
