@extends('layouts.master')
@section('title')
Laravel Shopping Cart
@stop
@section('content')
@if(Session::has('success'))
<div class="row">
    <div id="charge-message" class="alert alert-sussess">
        {{Session::get('success')}}
    </div>
</div>
@endif
@foreach($products->chunk(3) as $productChunk)
<div class='row'>
    @foreach($productChunk as $product)
<div class = "col-sm-6 col-md-4">
      <div class = "img-thumbnail image-auto">
          <img src = "{{$product->imagePath}}" alt = "book image" class='img-fluid'>
          <div class='captions'>
              <h3>{{$product->title}}</h3>
              <p class='description'>{{$product->description}} </p>
              <div class='clearfix'> <div class='price float-left'>${{$product->price}}</div><a href="{{route('product.addToCart',['id'=>$product->id])}}" class='btn btn-success float-right' role='button'>Add to cart</a></div>
      
          </div>
      </div>
   </div>
    @endforeach
</div>
@endforeach
@stop