@extends('layout.layout')
@section('content')

<div class="container">
<?php
    // error_log($data['remember']);
    // error_log("22");
?>
    <div class="row justify-content-center border">
        <div class="col-4 mt-5 border border-success">
            <form class="form-floating needs-validation" action="{{route('submit')}}" method="POST">
            @csrf
                <h1 class="mt-3 text-center">Masuk</h1>
                <div class="mb-3 ms-3 me-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email" required 
                        value="<?php if ($data["remember"]){ echo $data["email"];}?>">
                </div>
                <div class="mb-3 ms-3 me-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" id="password" name="password" required
                        value="<?php if ($data["remember"]){echo $data["password"];}?>">

                    <div class="form-text">
                        Panjang Password harus 8-15 karakter, tidak mengandung spasi, karakter spesial,
                        atau emoji.
                    </div>
                </div>
                <div class="mb-3 ms-3 me-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember" @checked($data["remember"])>
                    <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
                </div>
                <div class="row">
                    <div class="col text-start mb-3 ms-3 me-3">
                        <button type="submit" class="btn btn-primary">Masuk</button>
                    </div>
                    <div class="col text-end mb-3 ms-3 me-3">
                        <a class="btn btn-success" href="{{route('daftar')}}" role="button">Daftar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection