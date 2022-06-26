@extends('master')
@section('content')
<div class="container">
   <div class="row">
    <div class="col-sm-9">
        <img class="trending-img" src="{{$product['gallery']}}" alt="">
    </div>
    <div class="col-sm-3">
        <a href="/">Go Back</a>
        <br>
        <h2>{{$product['name']}}</h2>
        <h4>Price: {{$product['price']}} Rs</h4>
        <p>Description: <br>{{$product['description']}}</p>
        <p>Category: {{$product['category']}}</p>
        <br>
        <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{$product['id']}}">
            <button class="btn btn-primary">Add to Cart</button>
        </form>
        <br>
        <button class="btn btn-success">Buy Now</button>
    </div>
   </div>
</div>
@endsection