@extends('layout.master')
@section('content')
<h1 class="text-primary text-center">Articles</h1>
<br>
<a href="{{ route('newarticle') }}"><h6>Add new Article</h6></a><br>
    <table class="table table-stripped table-primary">
        <tr>
            <th>Title & Description</th><th>Image</th><th>Category</th><th>Tags</th><th></th><th></th>
        </tr>
        @foreach($articles as $art)
        <tr>
            <td><h5>{{ $art->Title }}</h5>
                {{ $art->Description }}
            </td>
            <td><img src="../upload/{{ $art->Image }}" alt="" width="100" height="100"></img></td>
            <td>{{ $art->CategoryName }}</td>
            <td>{{ $art->TagName }},{{ $art->TagName}}</td>
            <td><a href="{{ route('editarticle',$art->id) }}"><i class="fa fa-edit"></i></a>
            <td>
            <form action="{{ route('destroyarticle',$art->id) }}" method="POST" id="f1">
            <input type="hidden" name="_token" id="" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection