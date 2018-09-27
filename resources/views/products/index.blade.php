@extends('layouts.app')


@section('content')
  <div class="container">
    
    <!-- Content here -->
        <h1>All Products</h1>
        <div class="input-group">
          <a href="{{ url('product/add') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create Product</a>
        </div>
        <br /><br />
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Picture</th>
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
              <tr>
                <td><a href='{{ url('/product/view/' . $product->id) }}'><img style='width: 100px' src='{{ url('/storage/' . $product->picture) }}' /></a></td>
                <td><a href='{{ url('/product/view/' . $product->id) }}'>{{ $product->name }}</a></td>
                <td>{{ $product->price }}</td>
                <td>
                  <a href='{{ url('/product/edit/' . $product->id) }}'>Edit</a> | 
                  <a class="delete-item" href='{{ url('/product/delete/' . $product->id) }}'>Delete</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{ $products->links() }}
    <!-- Content here -->
    
  </div>
  <script>
  $('.delete-item').click(function () {
    if (confirm("Are you sure?")) {
      txt = "OK!";
    } else {
      txt = "Cancel!";
      return false;
    }
  });
  </script>
@endsection