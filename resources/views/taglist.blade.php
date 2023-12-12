@extends('layout.master')
@section('content')
<h1 class="text-primary text-center">Tags</h1>
<br>
<a href="{{ route('newtag') }}"><h6>Add new Tag</h6></a><br>
    <table class="table table-stripped table-primary">
        <tr>
            <th>Name & Remarks</th><th></th><th></th>
        </tr>
        @foreach($tags as $t)
        <tr>
            <td><h5>{{ $t->TagName }}</h5>
                {{ $t->Remarks }}
            </td>
            <td><a href="{{ route('edittag',$t->id) }}"><i class="fa fa-edit"></i></a></td>
            <td>
            <form action="{{ route('destroytag',$t->id) }}" method="POST" id="f1">
            <input type="hidden" name="_token" id="" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection