@extends('layout.layout')
@section('content')
    
<div class="container border rounded shadow-sm my-2 p-4 mb-4">
    <h3 class="border-bottom mb-3">Buat Post Baru</h3>
    <form onsubmit="newPost()" action="#community">
        <div class="row">
            <label for="questionBox" class="form-label">Pertanyaan</label>
            <textarea class="form-control mb-3" aria-label="With textarea" id="questionBox" rows="3"></textarea>
        </div>
        <div class="row">
            <label for="formFile" class="form-label">Upload gambar</label>
            <input class="form-control col me-5" type="file" id="formFile" accept=".jpg,.png,.jpeg">
            <input class="btn btn-primary col"type="submit" value="Buat post">
        </div>
    </form>
</div>

<div class="container" id="community">

    <div class="container border rounded shadow-sm my-2 p-4 mb-4" id="first">
        <div class="d-flex border-bottom mb-3">
            <a class="nav-link flex-grow-1" href="#">
                <img class="me-3 rounded-circle" src="https://avatars.githubusercontent.com/u/40521471?v=4" alt="soviena" width="24" height="24">
                Soviena
            </a>
            <p class="fw-light" style="font-size: small;">27 November 2022, 10:43 AM</p>
        </div>
        <p>Kenapa 3 itu Ganjil ?</p>
        <div id="jawaban">
            <div class="container border rounded shadow-sm my-2 p-4 mb-4">
                <div class="d-flex border-bottom mb-3">
                    <a class="nav-link flex-grow-1" href="#">
                        <img class="me-3 rounded-circle" src="https://cdn.discordapp.com/avatars/347756970369089566/7708f115310da5dd51fe36f0e626aaf5.png" alt="soviena" width="24" height="24">
                        Donkuray
                    </a>
                    <p class="fw-light" style="font-size: small;">28 November 2022, 11:43 AM</p>
                </div>
                <p>Karena kalau 2 itu ginjal</p>
            </div>
        </div>

        <div class="container border rounded shadow-sm my-2 p-4 mb-4">
            <h6 class="border-bottom mb-3">Jawab pertanyaan ini, dapatkan XP</h6>
            <form onsubmit="answer()" action="#">
                <div class="row">
                    <label for="questionBox" class="form-label">Jawaban</label>
                    <textarea class="form-control mb-3" aria-label="With textarea" id="answerBox" rows="3"></textarea>
                </div>
                <div class="row">
                    <label for="formFile" class="form-label">Upload gambar</label>
                    <input class="form-control col me-5" type="file" id="formFile" accept=".jpg,.png,.jpeg">
                    <input class="btn btn-primary col"type="submit" value="Jawab">
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
