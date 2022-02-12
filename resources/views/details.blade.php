@extends('master')

@section("content")

<div class="container details-margin">
  <div class="row">
    <div class="col-sm-6">
      <div>
        <img class = "link-img"src="{{$products['gallery']}}" alt="">
      </div>
    </div>  
    <div class="col-sm-6">
      <div>
        <a href="/">GO BACK</a>
      </div>
      <h3>Price : {{$products['price']}}</h3>
      <h5>category : {{$products['category']}}</h5>
      <h6>details : {{$products['description']}}</h6>
      <div>
        <form action="/add_to_cart" method="POST">
          @csrf
          <input type="hidden" name="product_id" value="{{$products['id']}}">
          <button class="btn btn-primary">Add To Cart</button>
          <br><br>

        </form>
          
          <button class="btn btn-success">BUY NOW</button>
      </div>
    
  </div>
    </div>

 
</div>


@endsection
