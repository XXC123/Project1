@extends('layouts.menu')
@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>I Want to Buy</h1>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">
    <div class="card">
        <div class="card-body card-block">
            <form action="" method="post" class="">
                <div class="form-group">
                    <h1>{{$wtb->topic}}</h1>
                    <br>
                    <h4>by {{$wtb->customer->name}}</h1>
                    <h5>Created at: {{$wtb->created_at}}</h5>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <textarea type="text" class="form-control col-9" row="10" disabled>{{$wtb->context}}</textarea>
                    </div>
                </div>
                <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Submit</button></div>
            </form>
        </div>
    </div>
</div>
@endsection