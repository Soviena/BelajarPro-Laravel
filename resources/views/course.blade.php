@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row">
        @foreach($course as $c)
        <div class="col-sm-3">
            <div class="card" style="width: 17rem; height: 26rem">
                <img src="<?=$c->img?>" style="width:270px;height:184px;" class="card-img-top" alt="...">
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

<!-- 
<main>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-2">
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Input Course">
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-outline-dark">Search</button>
            </div>
        </div>
        <div class="Search-Course">
            <tr>
                <td><input type="search" style="cursor:text" name="search_course" class="text-field"
                id="search_id" placeholder="Cari Kursus"/></td>
            </tr>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-3">
                <div class="card" style="width: 17rem; height: 26rem">
                    <img src="https://idcloudhost.com/wp-content/uploads/2020/02/python.jpg" style="width:270px;height:184px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Python</h5>
                        <p class="card-text">Python adalah sebuah bahasa pemrograman yang digunakan untuk membuat aplikasi dan melakukan analisis data.</p>
                        <a href="{{route('article', $c->id)}}" class="btn btn-primary">ikuti</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 17rem; height: 26rem">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLT-tokZRRt5PLZI0khm0BfcbhmSL8FL5qrQ&usqp=CAU" style="width:270px;height:184px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Java</h5>
                        <p class="card-text">Java adalah bahasa pemrograman tingkat tinggi yang berorientasi objek dan program java tersusun dari bagian yang disebut kelas.</p>
                        <a href="#" class="btn btn-primary">ikuti</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 17rem; height: 26rem">
                    <img src="https://www.gamelab.id/uploads/news/berita-213-belajar-mengenal-dasar-html-20200716-163110.png" style="width:270px;height:184px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">HTML</h5>
                        <p class="card-text">HTML adalah bahasa standar pemrogaman yang digunakan untuk membuat halaman website, yang dapat diakses melalui internet.</p>
                        <a href="#" class="btn btn-primary">ikuti</a>
                    </div>
                </div>
            </div>
        </div>
        </section>

</main>
<br>
<br>

<footer>

</footer>

</div> -->

@endsection