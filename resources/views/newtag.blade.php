@extends('layout.master')
@section('content')
<div class="card">
    <div class="card-header">
       <h2 class="card-title">New Tag</h2>
    </div>
    <div class="card-body">
    <form action="{{ route('storetag') }}" method="POST">
    <input type="hidden" name="_token" id="" value="{{ csrf_token() }}">
    Name: <input type="text" name="txtName" id="" class="form-control">
    Remarks: <textarea name="txtRemarks" id="" class="form-control"></textarea>
    <br>
    <input type="Submit" name="btnSubmit" id="" value="Submit" class="btn btn-primary float-end">
    </form>
    </div>
</div>

@endsection