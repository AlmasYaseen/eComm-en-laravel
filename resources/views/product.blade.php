@extends('master')
@section('content')
<div class="container custome-products">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" data-bs-interval="true">
        <div class="carousel-indicators">
            @foreach ($products as $key => $item)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$key}}" class="{{$key == 0 ? 'active':''}}" {{$key == 0 ? 'aria-current="true"':''}} aria-label="Slide {{$key+1}}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($products as $key => $item)
                <div class="carousel-item{{$key == 0 ? ' active':''}}" data-bs-interval="3000">
                    <a href="detail/{{$item['id']}}">
                        <img src="{{$item['gallery']}}" class="d-block w-100 slider-img" alt="...">
                        <div class="carousel-caption slider-text d-none d-md-block">
                            <h3>{{$item['name']}}</h3>
                            <p>{{$item['description']}}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>
<div class="container">
    <h3>Trending Products</h3>
    @foreach ($products as $key => $item)
        <div class="trending-item">
            <a href="detail/{{$item['id']}}">
                <img src="{{$item['gallery']}}" class="trending-image" alt="...">
                <div class="">
                    <h3>{{$item['name']}}</h3>
                </div>
            </a>
        </div>
    @endforeach
</div>
@endsection