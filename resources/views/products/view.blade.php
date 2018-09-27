@extends('layouts.app')


@section('content')
  <div class="container">
    
    <!-- Content here -->
        <h1>All Products</h1>
        <table class="table">
          <tbody>
              <tr>
                <th scope="col">Picture</th>
                <td><img style='width: 100px' src='{{ url('/storage/' . $product->picture) }}' /></td>
              </tr><tr>
                <th scope="col">Name</th>
                <td>{{ $product->name }}</td>
              </tr><tr>
                <th scope="col">Price</th>
                <td>{{ $product->price }}</td>
              </tr><tr>
                <th scope="col">Description</th>
                <td>{{ $product->description }}</td>
              </tr>
          </tbody>
        </table>
    <!-- Content here -->
    
  </div>
@endsection