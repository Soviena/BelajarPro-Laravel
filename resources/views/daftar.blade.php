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
                    <input type="email" class="form-control @if(session('daftar-failed')) <?= "is-invalid" ?> @endif)" id="email" name="email" aria-describedby="emailHelp" placeholder="nama@gmail.com" required value="@if(session('daftar-failed')){{session('daftar-failed.email')}}@endif">
                    <div class="invalid-feedback">
                        {{session('daftar-failed.msg1')}}
                    </div>
                </div>
                <div class="mb-3 ms-3 me-3">
                    <label for="name" class="form-label">Nama Pengguna</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                </div>
                <div class="mb-3 ms-3 me-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <div class="input-group" id="show_hide_password">
                        <input pattern="^(?=\S*\d)(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[a-zA-Z])\S{7,}\S$" type="password" class="form-control @if(session('daftar-failed')) <?= "is-invalid" ?> @endif)" id="password" name="password" required value="@if (session('daftar-failed.pw')){{session('daftar-failed.pw')}}@endif">
                        
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="bi bi-eye-slash" aria-hidden="true"></i></button>
                    </div>
                    <div id="passwordHelpBlock" class="form-text">
                        Panjang Password harus minimal 7 karakter, menggunakan symbol, huruf kecil dan besar, dan angka, tidak mengandung spasi atau emoji.
                    </div>
                </div>
                <div class="mb-3 ms-3 me-3">
                    <label for="password2" class="form-label">Konfirmasi Kata Sandi</label>
                    <div class="input-group" id="show_hide_password">
                        <input pattern="^(?=\S*\d)(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[a-zA-Z])\S{7,}\S$" type="password" name="password2" class="form-control @if(session('daftar-failed')) is-invalid @endif)" required>                        
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="bi bi-eye-slash" aria-hidden="true"></i></button>
                        <div class="invalid-feedback">
                            {{session('daftar-failed.msg2')}}
                        </div>
                    </div>
                </div>
                <div class="text-center mb-3 ms-3 me-3">
                    <button type="submit" class="btn btn-success">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#show_hide_password button").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bi bi-eye-slash");
                $('#show_hide_password i').removeClass("bi bi-eye");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bi bi-eye-slash");
                $('#show_hide_password i').addClass("bi bi-eye");
            }
        });
    });
</script>
@endsection