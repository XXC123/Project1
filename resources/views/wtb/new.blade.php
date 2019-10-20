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
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                        <input type="text" name="topic" placeholder="Enter Topic" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                        <textarea type="text" name="context" class="form-control" row="10" required>What do you want to buy?</textarea>
                    </div>
                </div>
                <div class="form-actions form-group"><button id="submit-btn" type="submit" class="btn btn-success btn-sm">Submit</button></div>
            </form>
        </div>
    </div>
</div>
@endsection