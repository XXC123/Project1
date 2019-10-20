@extends('layouts.managerMenu')
@section('css')
@endsection

@section('content')<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Want to Buy</h1>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Want to Buy List</strong>
                    </div>
                    <div class="card-body">
                        <table id="wtb-list" class="table table-striped table-bwtbed" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Topic</th>
                                    <th>User</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($wtbs as $wtb)
                                <tr>
                                    <td><a href="./{{$wtb->id}}">{{$wtb->topic}}</a></td>
                                    <td>{{$wtb->customer->name}}</td>
                                    <td>{{$wtb->created_at}}</td>
                                    <td>{{$wtb->updated_at}}</td>
                                    <td><a href="./delete{{$wtb->id}}"><button id="delete-btn">Delete</button></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function() {
    $('#wtb-list').DataTable();
} );
</script>
@endsection
