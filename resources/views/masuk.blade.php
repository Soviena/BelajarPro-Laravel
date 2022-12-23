@extends('layout.layout')
@section('content')
<div class="container">
    <!-- <p class="" id="tes" style=""></p> -->
    <div class="row justify-content-center border">
        <div class="col-4 mt-5 border border-success">
            <!-- <form class="form-floating" novalidate action="DashboardLogin.html"> -->
            <!-- <form class="form-floating" action="DashboardLogin.html"> -->
            <form class="form-floating needs-validation" novalidate action="DashboardLogin.html">
                <h1 class="mt-3">Masuk</h1>
                <!-- <div class="form-floating mb-3 ms-3 me-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3 ms-3 me-3">
                        <input type="Password" class="form-control" id="floatingInput" placeholder="password">
                        <label for="floatingInput">Password</label>
                    </div> -->
                <div class="mb-3 ms-3 me-3">
                    <label for="uname" class="form-label">Nama Pengguna</label>
                    <input type="text" class="form-control" id="uname" aria-describedby="uname" required>

                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3 ms-3 me-3">
                    <label for="pass" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" id="pass" required pattern="[A-Za-z0-9]{3}">
                    <div id="passwordHelpBlock" class="form-text">
                        Panjang Password harus 8-15 karakter, tidak mengandung spasi, karakter spesial,
                        atau emoji.
                    </div>
                </div>
                <!-- <div id="liveAlertPlaceholder"></div>
                    <button type="button" class="btn btn-primary" id="liveAlertBtn">Show live alert</button> -->
                <div class="mb-3 ms-3 me-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <div class="row">
                    <div class="col text-start mb-3 ms-3 me-3">
                        <button type="submit" class="btn btn-primary" onclick="cek()">Masuk</button>
                    </div>
                    <div class="col text-end mb-3 ms-3 me-3">
                        <a class="btn btn-success" href="register.html" role="button">Daftar</a>
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