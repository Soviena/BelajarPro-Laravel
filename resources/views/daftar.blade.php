@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center border">
        <div class="col-4 mt-5 border border-success">
            <form action="{{route('terdaftar')}}" class="needs-validation" novalidate>
                <h1 class="mt-3">Daftar</h1>
                <div class="mb-3 ms-3 me-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" name="email" class="form-control" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3 ms-3 me-3">
                    <label for="namapengguna" class="form-label">Nama Pengguna</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3 ms-3 me-3">
                    <label for="katasandi" class="form-label">Kata Sandi</label>
                    <input type="password" name="password" class="form-control" required pattern="[A-Za-z0-9]{3}">

                </div>
                <div class="mb-3 ms-3 me-3">
                    <label for="password2" class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="password" name="password1" class="form-control" required pattern="[A-Za-z0-9]{3}">
                    <div id="passwordHelpBlock" class="form-text">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </div>
                </div>
                <div class="mb-3 ms-3 me-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
                </div>
                <div class="text-center mb-3 ms-3 me-3">
                    <button type="submit" class="btn btn-success">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validations')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
@endsection