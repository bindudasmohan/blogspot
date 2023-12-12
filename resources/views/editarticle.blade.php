@extends('layout.master')
@section('content')
<div class="card">
    <div class="card-header">
       <h2 class="card-title">Article</h2>
    </div>
    <div class="card-body">
    <form action="{{ route('updatearticle',$article->id) }}" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" id="" value="{{ csrf_token() }}">
    Title: <input type="text" name="txtName" id="" class="form-control" value="{{ $article->Title }}">
    Description: <textarea name="txtDescription" id="" class="form-control">{{ $article->Description }}</textarea>
    Image: <input type="file" name="image" id=""class="form-control">
    Caetgory: <select name="txtCategory" id="" class="form-control">
    @foreach($category as $cate)
        <option value="{{ $cate->id }}">{{ $cate->CategoryName }}</option>
        @endforeach
    </select>
    Tag1: <select name="txtTag1" id="" class="form-control">
        @foreach($tags as $t)
        <option value="{{ $t->id }}">{{ $t->TagName }}</option>
        @endforeach
    </select>
    Tag2: <select name="txtTag2" id="" class="form-control">
    @foreach($tags as $t)
        <option value="{{ $t->id }}">{{ $t->TagName }}</option>
        @endforeach
    </select>

    <br>
    <input type="Submit" name="btnSubmit" id="" value="Submit" class="btn btn-primary float-end">
    </form>
    </div>
</div>

@endsection