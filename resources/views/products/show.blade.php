@extends('layouts.menu')
@section('css')
@endsection

@section('content')
<h2>Add Successful</h2>
<br>
<strong><p>{{ $product->brandname }} - {{ $product->color }} - {{ $product->size }}- {{ $product->price }}- {{ $product->year }}- {{ $product->series }}</p></strong>
@stop
