@extends('master')
@section('content')
<div class="custom-product">
	<div class="col-sm-9">
    <div class="tending-wapper">
    <h4>Result for Products</h4>
    <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
    @foreach($products as $item)
      <div class="row searched-item cart-list-divider">
        <div class="col-sm-3">
         <a href="detail/{{$item->id}}">
          <img class="trending-image" src="{{$item->gallery}}">
          </a>        
      </div>
      <div class="col-sm-4">
         
          
          <div class="">
            <h3>{{$item->name}}</h3>
            <h3>{{$item->description}}</h3>
            <h3>${{$item->price}}</h3>
          </div>
                  
      </div>
      <div class="col-sm-3">
         <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove To Cart</a>        
      </div>
    </div>
    @endforeach
  </div>
  <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
  </div>
</div>
@endsection