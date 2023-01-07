@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center border">
        <div class="col-4 mt-5 border border-success">
            <form class="" action="{{route('terdaftar')}}" method="POST">
                @csrf
                <h1 class="mt-3 text-center">Daftar</h1>
                <div class="ms-3 mb-3 me-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="email@email.com" required>
                </div>
                <div class="mb-3 ms-3 me-3">
                    <label for="name" class="form-label">Nama Pengguna</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                </div>
                <div class="mb-3 ms-3 me-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3 ms-3 me-3">
                    <label for="password2" class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="password" name="password2" class="form-control" required>
                    <div id="passwordHelpBlock" class="form-text">
                    Panjang Password harus 8-15 karakter, tidak mengandung spasi, karakter spesial,
                        atau emoji.
                    </div>
                </div>
                <div class="text-center mb-3 ms-3 me-3">
                    <button type="submit" class="btn btn-success">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection