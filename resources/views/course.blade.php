@extends('layout.layout')
@section('content')
<div class="container mt-3">
    <h1 class="text-center">Daftar Course</h1>
    <div class="row">
        @foreach($course as $c)
        <div class="col-sm-4 p-4">
            <div class="card border shadow p-3 rounded-5" style="max-width:20vw;max-height:370px;width:20vw;height:370px;overflow:hidden;">
                <img src="{{asset('storage/uploaded/Course/'.$c->img)}}" style="height:50%; object-fit: cover; object-position: 25% 25%;">
                <div class="card-body text-center">
                    <h5 class="card-title text-center"><?=$c->name?></h5>
                    <p class="text-muted" style="max-height:50px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;"><?=$c->deskripsi?></p>
                    <a href="{{route('article', $c->id)}}" class="btn btn-primary">ikuti</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection