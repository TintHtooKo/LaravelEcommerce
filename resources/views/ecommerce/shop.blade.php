@extends('layouts.base')
@section('content')
<div class="collection">
    <div>
        <center><h1>Our Collections</h1></center>
    </div>
    
    <div class="gridCol">

            <div>
                <img src="{{asset('assets/img/Mens Button Down Long Sleeve - WHITE _ XS.jfif')}}" alt="">
                <p>Men'Collections</p>
            </div>
            <div>
                <img src="{{asset('assets/img/Calvin Klein Straight Leg Black Pants.jfif')}}" alt="">
                <p>Women's Collections</p>
            </div>
            <div>
                <img src="{{asset('assets/img/An Error Has Occured.jfif')}}" alt="">
                <p>Shoe Collections</p>
            </div>
        
    </div>   
</div>
<div><center><h1 style="margin-top: 5%;">Product Collections</h1></center></div>
<br><br>
    @if(session('cartSuccess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('cartSuccess') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
<div class="product">
    @foreach ($product as $item)
    <div class="thing">
        <img src="{{asset('storage/'.$item['image'])}}" alt="">
        <h2>{{$item['p_name']}}</h2>
        <p>{{$item['price']}} Ks</p>
        <div class="atc">
        <a href="{{url('checkout/'.$item['id'])}}" class="bn632-hover bn27">Quick Buy</a>            
        </div>
    </div> 
    @endforeach    
</div>
@endsection