@extends('layouts.default')
@section('title', 'NewProduct')

@section('content')
<div class="offset-md-2 col-md-8">
  <div class="card ">
    <div class="card-header">
      <h5>To Sell</h5>
    </div>
    <div class="card-body">
      @include('shared._errors')

      <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
          <div class="form-group">
            <label for="brandname">Brandname：</label>
            <input type="text" name="brandname" class="form-control" value="">
          </div>

          <div class="form-group">
            <label for="color">Color：</label>
            <input type="text" name="color" class="form-control" value="">
          </div>

          <div class="form-group">
            <label for="size">Size：</label>
            <input type="text" name="size" class="form-control" value="">
          </div>

          <div class="form-group">
            <label for="price">Price：</label>
            <input type="text" name="price" class="form-control" value="">
          </div>

          <div class="form-group">
            <label for="series">Series Name：</label>
            <input type="text" name="series" class="form-control" value="">
          </div>

          <div class="form-group">
            <label for="year">Year：</label>
            <input type="text" name="year" class="form-control" value="">
          </div>

          <div class="form-group">
            <label >Image：</label>
            <input type="file" name="cover" id="">
          </div>


          <button type="submit" class="btn btn-primary">Post</button>
      </form>

  </div>
</div>
@stop
