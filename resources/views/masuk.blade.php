@extends('layout.layout')
@section('content')
<div class="container">
<?php
    // try {
    //     DB::connection()->getPDO();
    //     echo DB::connection()->getDatabaseName();
    //     } catch (Exception $e) {
    //     echo 'None';
    // }
?>
    <!-- <p class="" id="tes" style=""></p> -->
    <div class="row justify-content-center border">
        <div class="col-4 mt-5 border border-success">
            <form class="form-floating needs-validation" novalidate action="{{route('submit')}}" method="POST">
            @csrf
                <h1 class="mt-3">Masuk</h1>
                <div class="mb-3 ms-3 me-3">
                    <label for="uname" class="form-label">Nama Pengguna</label>
                    <input type="text" class="form-control" name="name" aria-describedby="uname" required>

                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3 ms-3 me-3">
                    <label for="pass" class="form-label">Kata Sandi</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                    <div id="passwordHelpBlock" class="form-text">
                        Panjang Password harus 8-15 karakter, tidak mengandung spasi, karakter spesial,
                        atau emoji.
                    </div>
                </div>
                <div class="mb-3 ms-3 me-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
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
<script>
    function cek() {
        var x = document.getElementById("tes");
        if (2 < 4) {
            // x.type = "text";
            // x.innerHTML = "<p style='size: 100px;'>hello</p>";
            // x.value = "ehe";
            x.innerHTML =
                `
                <div class="alert alert-danger" role="alert" style="position: absolute;
                    z-index: 5000; /* gray box will be above both green and black box */ 
                    width: 80%;
                    top: 100px;">
                    A simple danger alert—check it out!
                </div>
            `;
        } else {
            //
        }
    }


    // const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

    // const alert = (message, type) => {
    // const wrapper = document.createElement('div')
    // wrapper.innerHTML = [
    //     `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    //     `   <div>${message}</div>`,
    //     '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    //     '</div>'
    // ].join('')

    // alertPlaceholder.append(wrapper)
    // }

    // const alertTrigger = document.getElementById('liveAlertBtn')
    // if (alertTrigger) {
    // alertTrigger.addEventListener('click', () => {
    //     alert('Nice, you triggered this alert message!', 'success')
    // })
    // }
</script>
@endsection