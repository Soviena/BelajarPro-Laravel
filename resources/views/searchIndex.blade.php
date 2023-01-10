@extends('layout.layout')
@section('content')

<div class="container-fluid">
    <div class="row">
        <h1 style="margin-bottom: 30px; text-align: center;">Search result</h1>
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#courses" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Courses</button>
            <button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#articles" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Articles</button>
            <button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#users" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Users</button>
        </div>
        <div class="tab-content" id="v-pills-tabContent" style="padding-left: 30px;">
            
            <div class="tab-pane fade show active" id="courses" role="tabpanel" aria-labelledby="v-pills-home-tab">
                @if ($data['courses'] == "[]")
                    Not Found
                @else
                    @foreach ($data['courses'] as $c)
                        <a href="{{route('article',$c->id)}}">{{$c->name}}</a>
                    @endforeach                    
                @endif
            </div>

            <div class="tab-pane fade show" id="articles" role="tabpanel" aria-labelledby="v-pills-home-tab">
                @if ($data['articles'] == "[]")
                    Not Found
                @else
                    @foreach ($data['articles'] as $a)
                        <a href="{{route('article',$a->id)}}">{{$a->chapter}}</a>
                    @endforeach  
                @endif
            </div>

            <div class="tab-pane fade show" id="users" role="tabpanel" aria-labelledby="v-pills-home-tab">
                @if ($data['users'] == "[]")
                    Not Found
                @else
                    @foreach ($data['users'] as $u)
                        <a href="{{route('profil',$u->id)}}">{{$u->name}}</a>
                    @endforeach  
                @endif
            </div>

        </div>
    </div>
</div>
                        
                            
@endsection