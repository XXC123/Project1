@extends('layouts.default')
@section('content')
 <div class="jumbotron">
    <h1>Home Page</h1>
    <p class="lead">
      Now you are seen <a href="https://learnku.com/courses/laravel-essential-training">Laravel </a> sample Home Page
    </p>
    <p>
      Everything will begin from here
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('product')}} "  role="button">Sell</a>
    </p>
  </div>
@stop
