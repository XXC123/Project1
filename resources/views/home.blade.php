@extends('layouts.menu')
@section('css')
@endsection

@section('content')
home
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('product')}} "  role="button">Sell</a>
      <a class="btn btn-lg btn-success" href="{{ route('search')}} "  role="button">Match</a>
    </p>
@endsection

@section('script')
@endsection
