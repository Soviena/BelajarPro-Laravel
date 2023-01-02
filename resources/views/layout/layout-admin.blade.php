<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery-3.6.1.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../../public/bootstrap/css/bootstrap.min.css">
        <script src="bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.6.1.min.js"></script>
        <script src="bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>

    <body>
        <header style="height: 15vh;">
            <nav class="navbar navbar-expand-md p-1 mb-3 mx-5 my-1 border shadow rounded fixed-top bg-light" aria-label="Navbar">
                <div class="container-fluid">
                    <a class="navbar-brand my-4" href="#">Admin Panel BelajarPro</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse my-2" id="navbar">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li><a href="{{route('home')}}" class="nav-link px-2 link-secondary">Home</a></li>
                            <li><a href="{{route('admin-course')}}" class="nav-link px-2 link-secondary">Course</a></li>
                            <li><a href="{{route('admin-user')}}" class="nav-link px-2 link-secondary">User</a></li>
                        </ul>
                        <form class="me-5" style="width: 20%;" role="search" action="searching.html">
                            <input class="form-control" type="search" placeholder="Cari kursus, orang, forum, mentor..." aria-label="Search">
                        </form>
    
                        <a href="#" class="nav-link me-5 my-3 link-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg>
                        </a>
                        @if (session('loggedin',FALSE))
                            <div class="nav-item dropdown">
                                <a class="nav-link my-3 me-5" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu">
                                    @if (session('admin',FALSE) == "TRUE")
                                        <li><a class="dropdown-item" href="{{route('admin')}}">Admin Panel</a></li>
                                    @else
                                        <li><a class="dropdown-item" href="profil.html">Profil</a></li>
                                        <li><a class="dropdown-item" href="#">Pesan</a></li>
                                        <li><a class="dropdown-item" href="#">Kursus ku</a></li>
                                        <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                                    @endif
                                    <li><a class="dropdown-item" href="{{route('keluar')}}">Logout</a></li>
                                </ul>
                            </div>
                        @else
                            <a href="{{route('masuk')}}" class="nav-link me-3">Login</a>
                        @endif
                    </div>
                </div>
            </nav>
        </header>
        
        <main>
            @yield('content')
        </main>

    </body>

    <footer>
        
    </footer>
</html>