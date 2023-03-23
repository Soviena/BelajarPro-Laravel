@extends('layout.layout')
@section('content')

@if (session('loggedin',FALSE))
<section id="dashboard">
    <div class="container row-dash-bel mt-3 pt-2">
        <div class="card mb-3">
            <div class="card-body ">
                <h1 class="text-info fw-bold" style="text-align: center; ">
                    Selamat Datang Di Website BelajarPro
                </h1>
                <p class="card-text fs-5" style="text-align: center;">
                    Ingin belajar codingan tapi dapat referensi bahasa Inggris semua, yuk belajar disini aja.
                    Di Website ini aja, disini anda dapat menemukan referensi dengan bahasa Indonesia
                    dan jika kamu bingung disini menyediakan beberapa fitur, seperti komunitas diskusi dan mentoring
                </p>
            </div>
        </div>

        <br>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($courses as $c)
            <div class="col">
                <div class="card text-white card-dash-bel">
                    <img src="{{asset('storage/uploaded/Course/'.$c->img)}}" style="height:20vh; object-fit: cover; object-position: 25% 25%;" class="card-img-top" alt="Pemroragrman HTML">
                    <div class="card-body">
                        <h2 class="card-dash-bel fw-bold">{{$c->name}}</h2>
                        <p class="card-dash-bel fs-5">
                            {{$c->deskripsi}}
                        </p>
                        <div class="text-center">
                            <a href="{{route('article',$c->id)}}" class="btn btn-primary">Pelajari</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card text-white card-dash-bel">
                    <img src="{{asset('storage/uploaded/Course/'.$c->img)}}" style="height:20vh; object-fit: cover; object-position: 25% 25%;" class="card-img-top" alt="Pemroragrman HTML">
                    <div class="card-body">
                        <h2 class="card-dash-bel fw-bold">{{$c->name}}</h2>
                        <p class="card-dash-bel fs-5">
                            {{$c->deskripsi}}
                        </p>
                        <div class="text-center">
                            <a href="{{route('article',$c->id)}}" class="btn btn-primary">Pelajari</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card text-white  card-dash-bel">
                    <img src="{{asset('storage/uploaded/Course/'.$c->img)}}" style="height:20vh; object-fit: cover; object-position: 25% 25%;" class="card-img-top" alt="Pemroragrman HTML">
                    <div class="card-body">
                        <h2 class="card-dash-bel fw-bold">{{$c->name}}</h2>
                        <p class="card-dash-bel fs-5">
                            {{$c->deskripsi}}
                        </p>
                        <div class="text-center">
                            <a href="{{route('article',$c->id)}}" class="btn btn-primary">Pelajari</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card text-white  card-dash-bel">
                    <img src="{{asset('storage/uploaded/Course/'.$c->img)}}" style="height:20vh; object-fit: cover; object-position: 25% 25%;" class="card-img-top" alt="Pemroragrman HTML">
                    <div class="card-body">
                        <h2 class="card-dash-bel fw-bold">{{$c->name}}</h2>
                        <p class="card-dash-bel fs-5">
                            {{$c->deskripsi}}
                        </p>
                        <div class="text-center">
                            <a href="{{route('article',$c->id)}}" class="btn btn-primary">Pelajari</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>


    </div>
</section>


@else
<section id="dashboard_landing">
    <div class="container row-bel">
        <div class="card mb-3">
            <img src="{{asset('storage/assets/programmer.jpg')}}" class="card-img-top" alt="programmer">
            <div class="card-body">
                <h1 class="text-info fw-bold" style="text-align: center;">
                    Selamat Datang Di Website BelajarPro
                </h1>
                <p class="card-text fs-5" style="text-align: center;">
                    BelajarPro memudahkan anda dalam mengeksplorasi bahasa pemrograman,
                    Disini materi bahasa pemrograman yang ingin anda pelajari disusun secara lengkap dan tepat
                </p>
            </div>
        </div>

        <br>

        <div class="card text-dark bg-light mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('storage/assets/bahasa.jpg')}}" class="img-fluid rounded-start" alt="bahasa">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title fw-bold">Apa Itu Bahasa Pemrogaman ? </h2>
                        <br>
                        <p class="card-text fs-5">
                            Bahasa pemrograman merupakan merupakan suatu himpunan dari aturan sintaks dan semantik
                            yang dipakai untuk mendefinisikan program komputer.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <br>


        <div class="card text-dark bg-light mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('storage/assets/jenis.jpg')}}" class="img-fluid rounded-start" alt="bahasa">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title fw-bold">Apa Saja Macam-Macam Bahasa Pemrogaman ? </h2>
                        <br>
                        <p class="card-text fs-5">
                            Macam-macam bahasa pemrograman itu sangat banyak dan beragam diantaranya bahasa pemrograman yang sangat relevan
                            untuk dipelajari ialah seperti berikut ini: HTML, JavaScript, Python, C++, Java, PHP, GO, Ruby, Kotlin, C#, C, Visual Basic.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="card text-dark bg-light mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('storage/assets/manfaat.jpg')}}" class="img-fluid rounded-start" alt="bahasa">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title fw-bold">Apa Manfaat Dari Belajar Bahasa Pemrogaman ? </h2>
                        <br>
                        <p class="card-text fs-5">
                            Sangat banyak manfaat dari belajar bahasa pemroraman diantaranya ialah seperti berikut ini:
                            Mendorong kreativitas, mengatasi masalah sendiri, menciptakan aplikasi sendiri, mengajarkan tentang ketekunan,
                            dan melatih skill komunikasi.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endif


@endsection