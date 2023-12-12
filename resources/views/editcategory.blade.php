@extends('layout.master')
@section('content')
<div class="card">
    <div class="card-header">
       <h2 class="card-title">Category</h2>
    </div>
    <div class="card-body">
    <form action="{{ route('updatecategory',$category->id) }}" method="POST">
    <input type="hidden" name="_token" id="" value="{{ csrf_token() }}">
    Category Name: <input type="text" name="txtName" id="" class="form-control" value="{{ $category->CategoryName }}">
    Remarks: <textarea name="txtRemarks" id="" class="form-control">{{ $category->Remarks }}</textarea>
    <br>
    <input type="Submit" name="btnSubmit" id="" value="Submit" class="btn btn-primary float-end">
    </form>
    </div>
</div>

@endsection