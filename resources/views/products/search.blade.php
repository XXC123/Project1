@extends('layouts.default')
@section('title', 'Search')

@section('content')
<div class="offset-md-2 col-md-8">
  <div class="card ">
    <div class="card-header">
      <h5>To Match</h5>
    </div>
    <div class="card-body">
      @include('shared._errors')

      <form method="POST" action="{{ route('products.searchproduct') }}">
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

          <button type="submit" class="btn btn-primary">Search</button>
      </form>
    </div>
  </div>
</div>
@stop
