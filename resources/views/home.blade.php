@extends('layout.master')
@section('content')
<div class="container">
<div class="row">
@foreach($articles as $art)
<div class="col-md-2 col-lg-3">
    <div class="card">
        <img src="../upload/{{ $art->Image }}" alt="" srcset="" class="img-top">
        <div class="card-body"><h5>{{ $art->Title }}</h5>
            <p class="card-text">    {{ $art->Description }}</p>
            <p>Category:{{ $art->CategoryName }}</p>
            <p>{{ $art->TagName }},{{ $art->TagName}}</p>
        </div>
  

    </div>
</div>
@endforeach
</div>
</div>
@endsection