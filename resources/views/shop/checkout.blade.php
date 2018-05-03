
@extends('layouts.master')
@section('title')
Laravel Shopping Cart
@stop
@section('content')
<div class="row">
    <div class="col-sm-6 col-md-6 offset-3 outer-border">
        <h1 class="center">Checkout</h1>
        <h3 class="green">Your Total : ${{$total}}</h3>
        <div id='charge-error' class="alert alert-danger {{!Session::has('error') ? 'invisible' : '' }}">
            {{Session::get('error')}}
        </div>
        <form action="{{route('checkout')}}" method="post" id="checkout-form">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control is-empty" id="name" placeholder="Name" required="required">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control field is-empty" id="address" placeholder="Address" required="required">
                </div>
            </div>
            <hr/>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="card-name">Card Holder's Name </label>
                    <input type="text" class="form-control field is-empty" name="card-name" placeholder="Card Holder's Name" required="required">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="card-number">Credit Card Number </label>
                    <div class=" field is-empty" id="card-number" required="required"></div>
                </div>

            </div>
            <!--            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="expiration-date">Expiration Month </label>
                                    <input type="text" class="form-control field is-empty" id="exp-month" placeholder="Expiration Month" required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="expiration-year">Expiration Year </label>
                                    <input type="text" class="form-control field is-empty" id="exp-year" placeholder="Expiration Year" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="card-cvc">CVC </label>
                                <input type="text" class="form-control field is-empty" id="card-cvc" placeholder="CVC" required="required">
                            </div>
                        </div>-->
            <div class="outcome">
                <div class="error" role="alert"></div>
                <div class="success">
                    Success! Your Stripe token is <span class="token"></span>
                </div>
        </form>
    </div>
    {{csrf_field()}}
    <button type="submit" class="btn form-button float-right"> Buy Now</button>


</div>
@stop
@section('scripts')
<!--<script type="text/javascript"  src="https://js.stripe.com/v3/"></script>
<script type="text/javascript"  src="{{URL::to('src/js/checkout.js')}}"></script>-->
@endsection