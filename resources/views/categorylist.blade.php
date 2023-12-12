@extends('layout.master')
@section('content')
<h1 class="text-primary text-center">Category List</h1>
<br>
<a href="{{ route('newcategory') }}"><h6>Add new Category</h6></a><br>
    <table class="table table-stripped table-primary">
        <tr>
            <th>Name & Remarks</th><th></th><th></th>
        </tr>
        @foreach($categories as $cate)
        <tr>
            <td><h5>{{ $cate->CategoryName }}</h5>
                {{ $cate->Remarks }}
            </td>
            <td><a href="{{ route('editcategory',$cate->id) }}"><i class="fa fa-edit"></i></a></td>
            <td>
            <form action="{{ route('destroycategory',$cate->id) }}" method="POST" id="f1">
            <input type="hidden" name="_token" id="" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection