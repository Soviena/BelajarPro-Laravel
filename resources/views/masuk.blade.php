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
                    <input type="email" class="form-control @if(session('login-failed')) <?= "is-invalid" ?> @endif)" id="email" name="email" aria-describedby="email" required placeholder="nama@gmail.com" 
                    value="@if($data['remember'])<?=$data['email']?>@endif @if(session('login-failed'))<?=session('login-failed.email')?>@endif">
                    {{-- pattern="[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" --}}
                    <div class="invalid-feedback">
                        {{session('login-failed.msg1')}}
                    </div>
                </div>
                
                <div class="mb-3 ms-3 me-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <div class="input-group" id="show_hide_password">
                        <input type="password" class="form-control @if(session('login-failed')) <?= "is-invalid" ?> @endif" id="password" name="password" required value="@if($data['remember'])<?=$data['password'];?>@endif">
                        {{-- pattern="^(?=\S*\d)(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[a-zA-Z])\S{7,}\S$" --}}
                        <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="bi bi-eye-slash" aria-hidden="true"></i></button>
                        <div class="invalid-feedback">
                            {{session('login-failed.msg2')}}
                        </div>
                    </div>
                    <div class="form-text">
                        Password harus mengandung kapital dan angka dengan panjang 8-15 karakter, tidak mengandung spasi, karakter spesial,
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