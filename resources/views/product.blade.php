@extends('master')

@section("content")
<div class="custom-products">
  <div id="myCarousel" class="carousel slide custom-products" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    @foreach($products as $item)
    <div class="item {{$item['id']==1? 'active':''}}">
      <a href="details/{{$item['id']}}">
        <img class="slider-img" src="{{$item['gallery']}}">
      <div class="carousel-caption">
        <h3>{{$item['name']}}</h3>
        <p>{{$item['description']}}</p>
      </div>
      </a>
      
    </div>
    @endforeach

     <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  </div>

 
</div>

<div class="trending-wrapper">
  <h3>Trending Products</h3>
  <div class="carousel-inner">
    @foreach($products as $item)
    <div class="trending-products ">
      <a href="details/{{$item['id']}}"><img class="trending-items" src="{{$item['gallery']}}" alt=""></a>
    </div>
    @endforeach
  </div>
</div>

@endsection
