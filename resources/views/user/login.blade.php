@extends('layouts.master')
@section('content')
<div class="row">
<div class="col-sm-6 col-md-6 offset-3 cus-boarder">
    <h1 class="center">Log In</h1>
    @if(count($errors)>0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <p>{{$error}}</p>
        @endforeach
    </div>
    @endif
    <form action="{{route('user.login')}}" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class='form-control'/>
        </div>
           <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class='form-control'/>
        </div>
        <button type="submit" name="submit" class="btn btn-default float-right form-button">Log in</button>
        {{csrf_field()}}
    </form>
    <p class="float-left">Don't have an account? <a href="{{route('user.signup')}}">Sign up</a></p>
</div>
</div>
@stop
