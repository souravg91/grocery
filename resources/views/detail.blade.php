@extends('master')
@section('content')
<div class="container custom-product">
  <div class="row">
    <div class="col-sm-6">
      <img class="detail-img" src="{{$product['gallery']}}">
    </div>
    <div class="col-sm-6">
      <a href="/"> Go Back </a>
      <h2>{{$product['name']}}</h2>
      <h2>Price : {{$product['price']}}</h2>
      <h2>Detail :{{$product['description']}}</h2>
      <h2>Category : {{$product['category']}}</h2>
      <form action="/add_to_cart" method="POST">
        @csrf
        <input type="hidden" name="product_id" value={{$product['id']}}>
      <button class="btn btn-primary">Add to Cart</button>  
      </form>
      <br>
      <button class="btn btn-success">Buy</button>
    </div>
    
  </div>
	
</div>

@endsection