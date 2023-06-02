@extends('layout.layout')
@section('content')
    <style>
        code {
            display: block;
            padding: 9.5px;
            margin: 0 0 10px;
            font-size: 13px;
            line-height: 1.42857143;
            color: #333;
            word-break: break-all;
            word-wrap: break-word;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th, td {
            text-align: left;
            padding: 16px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:nth-child(odd) {
            background-color: #ffffff;
        }

        .tab-content {
            padding-top: 10px;
            margin-left:30px;
            max-width: 1200px;
            background-color:rgb(255, 241, 241) ;
            border-radius: 10px
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <h1 style="margin-bottom: 30px; text-align: center;">{{$course->name}} Course</h1>
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    @foreach($course->articles as $article)                    
                        <button class="nav-link @if($loop->first) active @endif" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#idArticle-{{$article->id}}" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">{{$article->chapter}}</button>
                    @endforeach
                </div>
                <div class="tab-content container mb-3" id="v-pills-tabContent">
                    @if ($course->articles != "[]")
                        @foreach ($course->articles as $article)                                        
                            <div class="tab-pane fade show @if($loop->first) active @endif" id="idArticle-{{$article->id}}" role="tabpanel" aria-labelledby="v-pills-home-tab">                            
                            </div>
                            <script>
                                document.getElementById('idArticle-{{$article->id}}').innerHTML = marked.parse(`{!! $article->deskripsi !!}`);
                            </script>
                        @endforeach                    
                    @else
                        <h1>OOPS, COURSE MASIH KOSONG</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection