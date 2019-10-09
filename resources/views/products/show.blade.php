@extends('layouts.menu')
@section('css')
@endsection

@section('content')
<strong><p>{{ $product->brandname }} - {{ $product->color }} - {{ $product->size }}- {{ $product->price }}- {{ $product->year }}- {{ $product->series }}</p></strong>
@stop
