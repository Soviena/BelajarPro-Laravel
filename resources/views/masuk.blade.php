@extends('layout.layout')
@section('content')

<div class="container">
<?php
    // error_log($data['remember']);
    // error_log("22");
?>
    <div class="row justify-content-center border">
        <div class="col-4 mt-5 border border-success">
            <form class="form-floating needs-validation" novalidate action="{{route('submit')}}" method="POST">
            @csrf
                <h1 class="mt-3">Masuk</h1>
                <div class="mb-3 ms-3 me-3">
                    <label for="uname" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" aria-describedby="uname" required 
                        value="<?php if ($data["remember"]) { echo $data["email"];}?>">

                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3 ms-3 me-3">
                    <label for="pass" class="form-label">Kata Sandi</label>
                    <input type="password" name="password" class="form-control" id="password" required pattern=".{3}" 
                        value="<?php if ($data["remember"]){
                            echo $data["password"];
                            }?>">
                    <div id="passwordHelpBlock" class="form-text invalid-feedback">
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
                        <button type="submit" class="btn btn-primary" onclick="">Masuk</button>
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
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

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