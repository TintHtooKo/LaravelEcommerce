@extends('admin.admin')
@section('admBlade')
    <div class="mt-5"><center><h3>Admin Home Page</h3></center></div>
    @if(session('success'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if(session('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('delete') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="row">
        <div class="col-5 mt-5">
            <form action="{{route('adminCreate')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div>
                    <input type="text" name="product" placeholder="Product" class="form-control"><br>
                    <input type="text" name="price" placeholder="Price" class="form-control"><br>
                    <input type="file" name="image"  class="form-control"><br><br>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
        <div class="col-6  mt-5">
            @foreach ($posts as $item)
            <div class="card" style="width: 18rem;">
                <img src="{{asset('storage/'.$item['image'])}}" style="width:200px; height:220px" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$item['p_name']}}</h5>
                  <p class="card-text">{{$item['price']}} Ks</p>
                  <a href="{{url('admin/delete/'.$item['id'])}}" class="btn btn-danger">Delete</a>
                </div>
              </div>
              @endforeach
        </div>
        {{$posts->links()}}
    </div>
@endsection