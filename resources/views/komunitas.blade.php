@extends('layout.layout')
@section('content')
    
<div class="container rounded shadow-sm my-2 p-4 mt-3 mb-4 bg-color-bel">
    <h3 class="border-bottom mb-3">Buat Post Baru</h3>
    <form action="{{route('addPost')}}" method="post">
        @csrf
        <div class="row">
            <label for="questionBox" class="form-label">Pertanyaan</label>
            <input class="form-control mb-3" required aria-label="With textarea" name="title">
        </div>
        <div class="row">
            <label for="questionBox" class="form-label">Deskripsi</label>
            <textarea class="form-control mb-3" required aria-label="With textarea" name="desc" rows="3"></textarea>
        </div>
        <div class="row">
            <label for="questionBox" class="form-label">Tag</label>
            <textarea class="form-control mb-3" required aria-label="With textarea" name="tag" rows="3"></textarea>
        </div>
        <div class="row">
            {{-- <label for="formFile" class="form-label">Upload gambar</label>
            <input class="form-control col me-5" type="file" id="formFile" accept=".jpg,.png,.jpeg"> --}}
            <input type="hidden" value="{{session('uid')}}" name="uid">
            <input class="btn btn-primary col"type="submit" value="Buat post">
        </div>
    </form>
</div>

<div class="container rounded shadow-sm my-2 p-4 mt-3 mb-4 bg-color-bel">
    <form action="">
        @csrf
        <div class="col">
            <label for="questionBox" class="form-label">Filter</label>
            <input class="form-control mb-3" required aria-label="With textarea" name="title">
        </div>
        <div class="col">
            <input class="btn btn-primary col"type="submit" value="Filter">
        </div>
    </form>
</div>

<div class="container" id="community">
    @foreach ($posts as $post)
        <div class="container border rounded shadow-sm my-2 p-4 mb-4 bg-color-bel">
            <h4 class="text-center">{{$post->title}}</h4>
            <div id="question" class="border p-3 rounded">
                <div class="d-flex border-bottom mb-3">
                    <a class="nav-link flex-grow-1" href="{{route('profil',$post->members->id)}}">
                        @if($post->members->profilePic == "")
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                        @else
                            <img src="{{asset('storage/uploaded/profile/'.$post->members->profilePic)}}" style="max-height:24px;" class="rounded-circle" alt="user" />
                        @endif
                        {{$post->members->name}}
                    </a>
                    <p class="fw-light" style="font-size: small;">{{$post->created_at->diffForHumans()}}</p>
                </div>
                <p>{{$post->deskripsi}}</p>
            </div>
            @foreach ($post->comments as $comment)
                <div id="jawaban" class="border rounded my-4 ms-4 p-3">
                    <div class="d-flex border-bottom mb-3">
                        <a class="nav-link flex-grow-1" href="{{route('profil',$comment->members->id)}}">
                            @if($comment->members->profilePic == "")
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                            @else
                                <img src="{{asset('storage/uploaded/profile/'.$comment->members->profilePic)}}" style="max-height:24px;" class="rounded-circle" alt="user" />
                            @endif
                            {{$comment->members->name}}
                        </a>
                        <p class="fw-light" style="font-size: small;">{{$comment->created_at->diffForHumans()}}</p>
                    </div>
                    <p>{{$comment->comment}}</p>
                </div>
            @endforeach

            <div class="ms-4 my-5">
                <h6 class="border-bottom mb-3">Jawab pertanyaan ini</h6>
                <form action="{{route('addComment')}}" method="POST">
                    @csrf
                    <div class="row">
                        <label for="questionBox" class="form-label">Jawaban</label>
                        <textarea class="form-control mb-3" required aria-label="With textarea" name="comment" rows="3"></textarea>
                    </div>
                    <div class="row">
                        {{-- <label for="formFile" class="form-label">Upload gambar</label>
                        <input class="form-control col me-5" type="file" id="formFile" accept=".jpg,.png,.jpeg"> --}}
                        <input type="hidden" value="{{$post->id}}" name="pid">
                        <input type="hidden" value="{{session('uid')}}" name="uid">
                        <input class="btn btn-outline-primary col"type="submit" value="Jawab">
                    </div>
                </form>
            </div>
        </div>
    @endforeach

</div>

@endsection
