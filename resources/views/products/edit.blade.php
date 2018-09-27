@extends('layouts.app')


@section('content')
  <div class="container">
    
    <!-- Content here -->
        <h1>{{ $page_heading }}</h1>
        <form method="POST" class="form-horizontal"  enctype="multipart/form-data">
            {{ csrf_field() }}
            
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">picture</span>
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" name='picture' id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
              </div>
            </div>
            
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">name</span>
              </div>
              <input type="text" class="form-control" name='name' value="{{ $product->name }}"  placeholder="Username" aria-label="product name" aria-describedby="basic-addon1">
            </div>
            
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">price $</span>
              </div>
              <input type="text" class="form-control" name='price' value="{{ $product->price }}" aria-label="Price">
              <div class="input-group-append">
                <span class="input-group-text">.00</span>
              </div>
            </div>
            
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">Description</span>
              </div>
              <textarea class="form-control" name='description' aria-label="With textarea">{{$product->description}}</textarea>
            </div>
            
            <br />
            <div class="input-group">
              <button type="submit" class="btn btn-primary btn-lg">Save</button>
            </div>
        </form>
    <!-- Content here -->
    
  </div>
  <script>
       $('#inputGroupFile01').on('change',function(){
           //get the file name
           var fileName = $(this).val();
           //replace the "Choose a file" label
           $(this).next('.custom-file-label').html(fileName);
       })
   </script>
@endsection