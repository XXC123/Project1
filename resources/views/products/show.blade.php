@extends('layouts.default')
@section('title', $product->id)

@section('content')
<strong><p>{{ $product->brandname }} - {{ $product->color }} - {{ $product->size }}</p></strong>
@stop
