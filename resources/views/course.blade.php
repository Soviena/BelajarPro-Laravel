@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row">
        @foreach($course as $c)
        <div class="col-sm-3">
            <div class="card" style="width: 17rem; height: 26rem">
                <img src="{{asset('storage/uploaded/Course/'.$c->img)}}" style="width:270px;height:184px;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$c->name?></h5>
                    <p class="card-text"><?=$c->deskripsi?></p>
                    <a href="{{route('article', $c->id)}}" class="btn btn-primary">ikuti</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection