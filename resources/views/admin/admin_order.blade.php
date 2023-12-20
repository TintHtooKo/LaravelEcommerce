@extends('admin.admin')
@section('admBlade')
    <div class="mt-5"><center><h3>Order Page</h3></center></div>
    <br><br>
    @if (session('delete'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      {{session('delete')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="mt-5">
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Product</th>
                <th scope="col">Qty</th>
                <th scope="col">Total Price</th>
                <th scope="col">Order Date</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($order as $o)
                    <tr>
                        <th scope="row">{{$o['name']}}</th>
                        <td>{{$o['email']}}</td>
                        <td>{{$o['phone']}}</td>
                        <td>{{$o['address']}}</td>
                        <td>{{$o['product']}}</td>
                        <td>{{$o['qty']}}</td>
                        <td>{{$o['price']}}</td>
                        <td>{{$o['created_at']}}</td>
                        <td><a href="{{url('/admin/delete_order/'.$o['id'])}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                @endforeach             
            </tbody>
          </table>
    </div>
@endsection