@extends('layout.layout')
@section('content')
    
<div class="container border rounded shadow-sm my-2 p-4 mb-4">
    <h3 class="border-bottom mb-3">Buat Post Baru</h3>
    <form action="#community" method="post">
        @csrf
        <div class="row">
            <label for="questionBox" class="form-label">Pertanyaan</label>
            <input class="form-control mb-3" aria-label="With textarea" name="title">
        </div>
        <div class="row">
            <label for="questionBox" class="form-label">Deskripsi</label>
            <textarea class="form-control mb-3" aria-label="With textarea" name="desc" rows="3"></textarea>
        </div>
        <div class="row">
            {{-- <label for="formFile" class="form-label">Upload gambar</label>
            <input class="form-control col me-5" type="file" id="formFile" accept=".jpg,.png,.jpeg"> --}}
            <input type="hidden" value="" name="uid">
            <input class="btn btn-primary col"type="submit" value="Buat post">
        </div>
    </form>
</div>

<div class="container" id="community">
    for
    <div class="container border rounded shadow-sm my-2 p-4 mb-4" id="">
        <div id="question" class="border p-3 rounded">
            <div class="d-flex border-bottom mb-3">
                <a class="nav-link flex-grow-1" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                    Soviena
                </a>
                <p class="fw-light" style="font-size: small;">27 November 2022, 10:43 AM</p>
            </div>
            <p>Kenapa 3 itu Ganjil ?</p>
        </div>
        <div id="jawaban" class="border rounded my-4 ms-4 p-3">
            <div class="d-flex border-bottom mb-3">
                <a class="nav-link flex-grow-1" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                    Donkuray
                </a>
                <p class="fw-light" style="font-size: small;">28 November 2022, 11:43 AM</p>
            </div>
            <p>Karena kalau 2 itu ginjal</p>
        </div>

        <div class="ms-4 my-5">
            <h6 class="border-bottom mb-3">Jawab pertanyaan ini</h6>
            <form action="#" method="POST">
                @csrf
                <div class="row">
                    <label for="questionBox" class="form-label">Jawaban</label>
                    <textarea class="form-control mb-3" aria-label="With textarea" name="comment" rows="3"></textarea>
                </div>
                <div class="row">
                    {{-- <label for="formFile" class="form-label">Upload gambar</label>
                    <input class="form-control col me-5" type="file" id="formFile" accept=".jpg,.png,.jpeg"> --}}
                    <input type="hidden" value="" name="pid">
                    <input type="hidden" value="" name="uid">
                    <input class="btn btn-primary col"type="submit" value="Jawab">
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
