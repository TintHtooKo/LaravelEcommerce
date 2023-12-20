@extends('layouts.base')
@section('content')
    <div class="mt-5">
        <center><h3>My Order</h3></center>
        <table class="table table-success mt-5">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Product</th>
                <th scope="col">Qty</th>
                <th scope="col">Price</th>
                <th scope="col">OrderDate</th>
                
              </tr>
            </thead>
            <tbody>
               
               @if ($orders && count($orders) > 0)
               @foreach ($orders as $oru)
               <tr>
                   <th scope="row">{{$oru['name']}}</th>
                   <td>{{$oru['phone']}}</td>
                   <td>{{$oru['address']}}</td>
                   <td>{{$oru['product']}}</td>
                   <td>{{$oru['qty']}}</td>
                   <td>{{$oru['price']}}</td>
                   <td>{{$oru['created_at']}}</td>
               </tr>
           @endforeach
               @else
                   <tr>
                    <td colspan="7"><center><h4 class="mt-5 pb-5">You haven't order list</h4></center></td>
                   </tr>
               @endif
               
              
            </tbody>
          </table>
    </div>
@endsection