@extends('layouts.base')
@section('content')
<div class="success">
    <img src="{{asset('assets/img/shopping-cart.png')}}" alt="">
    <h2>Thank You!</h2>
    <h6>Your order was successfully completed</h6>
    <a class="bn632-hover bn27" href="{{route('shopPage')}}">Back to Shop</a>
</div>
@endsection