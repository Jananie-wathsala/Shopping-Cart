@extends('layouts.master')
@section('title')
Laravel Shopping Cart
@stop
@section('content')
@if(Session::has('cart'))
<div class='row'>
    <div class="col-sm-6 col-md-6 offset-3">
        <ul class='list-group'>
            @foreach($products as $product)
            <li class='col-sm-12 list-group-item'>
                <span class="col-sm-5"><strong>{{$product['item']['title']}}</strong></span>
               
                    <span class="col-sm-2 label label-success">${{$product['price']}}</span>
                    <span class='col-sm-1 badge badge-pill badge-secondary'>{{$product['qty']}}</span>
                
                
                    <span class="col-sm-2 removebyone"><a href="{{route('product.reduceByOne',['id'=>$product['item']['id']])}}" role='button'>&#8722;
                        </a></span>
                    <span class="col-sm-2"><a href="{{route('product.removeItem',['id'=>$product['item']['id']])}}">X</a></span>
              
            </li>
            @endforeach
        </ul>
    </div>
</div>
<div class='row'>
    <div class='col-sm-6 col-md-6 offset-3'>
        <strong>Total : ${{$totalPrice}}</strong>
    </div>
</div>
<hr/>
<div class='row'>
    <div class='col-sm-6 col-md-6 offset-3 right'>
        <a type='button' href="{{route('checkout')}}" class='btn form-button'>Checkout</a>
    </div>
</div>
@else
<div class='row'>
    <div class='col-sm-6 col-md-6 offset-3'>
        <h2>No items in the cart yet..!</h2>
    </div>
</div>
@endif

@stop