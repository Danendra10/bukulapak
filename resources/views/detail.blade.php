@extends('master')
@section('title', 'Details-products')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="details-img" src="{{ $details['gallary'] }}">
            </div>
            <div class="col-sm-6">
                <a href="/"> go back</a>
                <h1>{{ $details['name'] }}</h1>
                <h3>price : {{ $details['price'] }}$</h3>
                <h4>Details : {{ $details['description'] }}</h4>
                <h5>category : {{ $details['category'] }}</h5>
                <br><br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="products_id" value="{{ $details['id'] }}">
                    <button class="btn btn-primary">Add to Cart</button>
                </form>
                <br><br>
                <button class="btn btn-success">Buy Now</button>
                <br><br>
            </div>
        </div>
    </div>
@endsection
