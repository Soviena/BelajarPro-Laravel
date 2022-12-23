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

    </head>

    <body>
        <header style="height: 15vh;">
            <nav class="navbar navbar-expand-md p-1 mb-3 mx-5 my-1 border shadow rounded fixed-top bg-light" aria-label="Navbar">
                <div class="container-fluid">
                    <a class="navbar-brand my-4" href="#">BelajarPro</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse my-2" id="navbar">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li><a href="DashboardLogin.html" class="nav-link px-2 link-secondary">Home</a></li>
                            <li><a href="Course_Page1.html" class="nav-link px-2 link-secondary">Course</a></li>
                            <li><a href="#" class="nav-link px-2 link-secondary ">Komunitas</a></li>
                        </ul>
                        <form class="me-5" style="width: 20%;" role="search" action="searching.html">
                            <input class="form-control" type="search" placeholder="Cari kursus, orang, forum, mentor..." aria-label="Search">
                        </form>
    
                        <a href="#" class="nav-link me-5 my-3 link-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg>
                        </a>
    
                        <div class="nav-item dropdown">
                            <a class="nav-link my-3" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://avatars.githubusercontent.com/u/40521471?v=4" alt="soviena" width="48" height="48" class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="profil.html">Profil</a></li>
                                <li><a class="dropdown-item" href="#">Pesan</a></li>
                                <li><a class="dropdown-item" href="#">Kursus ku</a></li>
                                <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                                <li><a class="dropdown-item" href="Dashboard.html">Logout</a></li>
                            </ul>
                        </div>
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