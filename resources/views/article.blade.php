@extends('layout.layout')
@section('content')


    <div class="container-fluid">
        <div class="row">
            <h1 style="margin-bottom: 30px; text-align: center;">{{$course->name}} Course</h1>
        <div class="d-flex align-items-start">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                @foreach($course->articles as $article)                    
                    <button class="nav-link @if($loop->first) active @endif" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#idArticle-{{$article->id}}" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">{{$article->chapter}}</button>
                @endforeach
            </div>
            <div class="tab-content" id="v-pills-tabContent" style="padding-left: 30px;">
                @if ($course->articles != "[]")
                    @foreach ($course->articles as $article)                    
                        <div class="tab-pane fade show @if($loop->first) active @endif" id="idArticle-{{$article->id}}" role="tabpanel" aria-labelledby="v-pills-home-tab">                            
                        </div>
                        <script>
                            document.getElementById('idArticle-{{$article->id}}').innerHTML = marked.parse(atob(`{!! $article->deskripsi !!}`));
                        </script>
                    @endforeach                    
                @else
                    <h1>OOPS, COURSE MASIH KOSONG</h1>
                @endif
            </div>
        </div>
    </div>

@endsection