@extends('master')

@section("content")

<div class="container details-margin">
  <div class="row">
    <div class="col-sm-6">
      <div>
        <img class = "link-img"src="{{$links['gallery']}}" alt="">
      </div>
    </div>  
    <div class="col-sm-6">
      <div>
        <a href="/">GO BACK</a>
      </div>
      <h3>Price : {{$links['price']}}</h3>
      <h5>category : {{$links['category']}}</h5>
      <h6>details : {{$links['description']}}</h6>
      <div>
          <button class="btn btn-primary">Add To Cart</button>
          <button class="btn btn-success">BUY NOW</button>
      </div>
    
  </div>
    </div>

 
</div>


@endsection
