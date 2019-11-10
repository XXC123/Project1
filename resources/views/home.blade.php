@extends('layouts.menu')
@section('css')
@endsection

@section('content')
<h2 style=" margin: auto;
  width: 50%;
  padding: 10px;">Welcome to our store!!!</h2>
<br>
<img style="display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;" src="{{asset('resources/images/shoes.jpg')}}" width=50%" alt="Logo">

<p style=" margin: auto;
  width: 30%;
  padding-left: 50px;">
      <a id="sell-btn" class="btn btn-lg btn-success" href="{{ route('product')}} "  role="button">Sell</a>
      <a id="match-btn" class="btn btn-lg btn-success" href="{{ route('search')}} "  role="button">Match</a>
  </p>>
@endsection

@section('script')
@endsection
