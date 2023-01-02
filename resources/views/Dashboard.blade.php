@extends('layout.layout')
@section('content')

        @if (session('loggedin',FALSE))
            <section id="dashboard">
                <div class="container">
                    <div class="row">
                        <h1 class="text-info fw-bold" style="text-align: center; ">
                            Selamat Datang Di Website Belajar Pro
                        </h1>
                            <div class="container-fluid">
                                <div class="row">
                                <div class="col "  style="text-align: center;">
                                    Ingin belajar codingan tapi dapat referensi bahasa Inggris semua, yuk belajar disini aja.
                                    Di Website ini aja, disini anda dapat menemukan referensi dengan bahasa Indonesia 
                                    dan jika kamu bingung disini menyediakan  beberapa fitur, seperti komunitas diskusi dan mentoring
                                </div>
                                </div>
                            </div>
                    </div>        
                    
                    <br>

                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                        <div class="card text-white bg-info" >
                            <img src="{{asset('storage/assets/HTML.jpg')}}" class="card-img-top" alt="Pemroragrman HTML" height="500px">
                            <div class="card-body">
                                <h2 class="card-title fw-bold">Bahasa Pemrograman HTML</h2>   
                                <p class="card-text fs-5">
                                    HTML adalah bahasa standar pemrogaman yang digunakan untuk membuat halaman website,
                                    yang diakses melalui internet. 
                                </p>
                            <div class="text-center">
                                <a href="Course_Page1.html" class="btn btn-light">Pelajari</a>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="col">
                        <div class="card  text-white bg-info">
                            <img src="{{asset('storage/assets/JAVA.jpg')}}" class="card-img-top" alt="Pemrograman JAVA" height="500px">
                            <div class="card-body">
                            <h2 class="card-title fw-bold">Bahasa Pemrograman JAVA</h2>
                                <p class="card-text fs-5">
                                Java adalah bahasa pemrograman tingkat tinggi yang berorientasi objek dan program java 
                                tersusun dari bagian yang disebut kelas.
                                </p>
                            <div class="text-center">
                                <a href="Course_Page1.html" class="btn btn-light">Pelajari</a>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="col">
                        <div class="card text-white bg-info">
                            <img src="{{asset('storage/assets/python.jpg')}}" class="card-img-top" alt="Pemrograman Python" height="500px">
                            <div class="card-body">
                            <h2 class="card-title fw-bold">Bahasa Pemrograman Python</h2>
                                <p class="card-text fs-5">
                                Python adalah sebuah bahasa pemrograman yang digunakan untuk membuat aplikasi dan
                                melakukan analisis data.
                                </p>
                            <div class="text-center">
                                <a href="Course_Page1.html" class="btn btn-light">Pelajari</a>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="col">
                        <div class="card text-white bg-info">
                            <img src="{{asset('storage/assets/Javascript.jpg')}}" class="card-img-top" alt="Pemrograman Java Scripit" height="500px">
                            <div class="card-body">
                            <h2 class="card-title fw-bold">Bahasa Pemrograman Javascript</h2>
                                <p class="card-text fs-5">
                                JavaScript adalah bahasa pemrograman yang digunakan dalam pengembangan website 
                                agar lebih dinamis dan interaktif. 
                                </p>
                            <div class="text-center">
                                <a href="Course_Page1.html" class="btn btn-light" >Pelajari</a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    
                </div>
            </section>                       
        

        @else
            <section id="dashboard_landing">
                <div class="container">
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
