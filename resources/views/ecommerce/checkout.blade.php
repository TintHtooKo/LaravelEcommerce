@extends('layouts.base')
@section('content')
<div class="co"><center><h1>Checkout</h1></center></div>

<div class="check">
    <div>
        <img src="{{asset('storage/'.$check['image'])}}" alt="">
    </div>
    <div class="checkForm">
        <center><h3>Checkout</h3></center>
        <form action="{{route('checkoutOrder')}}" method="POST">
            @csrf
        <div class="ne">
            <div>
                
                <input name="name" type="hidden" value="{{Auth::user()->name}}" required>
            </div>
            &nbsp; &nbsp;
            <div>
                
                <input name="email" type="hidden"  value="{{Auth::user()->email}}" required>
            </div>
        </div>
        <br>
            <label for="">Phone</label><br>
            <input type="number" name="phone"  required><br><br>

            <label for="">Address</label><br>
            <textarea name="address" id="" cols="30" rows="10" required></textarea><br><br>


            <label for="">Product</label><br>
            <input type="text" name="product" class="p" value="{{$check['p_name']}}" readonly><br><br>

        <div class="ne">
            <div>
                <label for="">Quantity</label><br>
                <input type="number" name="qty" id="qty" onchange="change()" value="1" min="1" >
            </div>
            &nbsp; &nbsp;
            <div>
                <label for="">Total Price</label><br>   
                <input type="text" name="price" value="{{$check['price']}}" readonly id="total1">
                <input type="hidden" value="{{$check['price']}}" id="total2">
            </div>
        </div><br><br>
        <label for="">Payment</label><br>
        <select name="" id="">
            <option value="">Cash on Delivery</option>
            <option value="" disabled>Mobile Banking</option>
        </select>
<br><br>
            <button class="bn632-hover bn27" href="success.html" type="submit">Pay Now</button>

        </form>
    </div>
</div>

@endsection