@extends('master')
@section('content')
<div class="custom-product">
	<div class="col-sm-4">
    <a href="">Filter</a>
  </div>
  <div class="col-sm-4">
    <div class="tending-wapper">
    <h4>Result for Products</h4>
    @foreach($products as $item)
    <div class="searched-item">
      <a href="detail/{{$item['id']}}">
      <img class="trending-image" src="{{$item['gallery']}}">
      <div>
        <h3>{{$item['name']}}</h3>
        <h3>{{$item['description']}}</h3>
        
      </div>
      </a>
    </div>
    @endforeach
  </div>
  </div>
</div>
@endsection