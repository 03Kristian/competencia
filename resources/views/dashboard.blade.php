<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <script src="{{ asset('js/styles.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Dashboard</title>
</head>

<body>
    <div id="wrapper">
        {{-- <div class="row "> --}}
        <nav class="navbar navbar-expand-sm bg-danger">

            <button type="button" class="btn d-lg-none btn-link">
                <i class="bi bi-list"></i>
            </button>

            <button type="button" class="navbar-toggler d-lg-none btn-link" data-toggle="collapse"
                data-target="#navbarSupportedConted" aria-expanded="false" aria-label="Togglenavigation">
                <span class="bi bi-list" aria-controls="#navbarSupportedConted" ></span>
            </button>


            <div class="collapse navbar-collapse justify-content-sm-center" id="navbarSupportedConted">
                <ul class="nav navbar-nav navbar-center ml-auto ">
                    <li class="navbar-item">
                        <a class="nav-link" href="#"><i class="bi bi-house"></i> Home </a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href=""><i class="bi bi-x-lg"></i> Sing out</a>
                    </li>
                </ul>
            </div>


        </nav>
        <div id="content_body" class="col-2 d-flex">

            <nav id="siderbar">
                {{-- <div class="collapse navbar-collapse" id="btncollapse"> --}}
                {{-- <ul class="navbar-nav mr-auto mt-2 mt-lg-0"> --}}
                <ul class="list">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-pull"></i> Menu </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=""><i class="bi bi-bell"></i> N</a>
                    </li>
                </ul>
                {{-- </div> --}}

            </nav>
            <div class="content">
                @yield('contend')
                <h3>A B C</h3>
            </div>
        </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>



















{{-- <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> --}}
