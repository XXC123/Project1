@extends('layouts.menu')
@section('css')
@endsection

@section('content')
home
    <p>
      <a id="sell-btn" class="btn btn-lg btn-success" href="{{ route('product')}} "  role="button">Sell</a>
      <a id="match-btn" class="btn btn-lg btn-success" href="{{ route('search')}} "  role="button">Match</a>
    </p>
@endsection

@section('script')
@endsection
