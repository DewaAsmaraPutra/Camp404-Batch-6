<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand bg-dark">
        <ul class="nav">
            <li>
                <a class="nav-link" href="{{ url('/beranda') }}"> Home </a>
            </li>
            <li>
                <a class="nav-link" href="{{ url('/data-siswa') }}"> Data Siswa </a>
            </li>
            <li>
                <a class="nav-link" href="{{ url('/info-kegiatan') }}"> Info Kegiatan </a>
            </li>
        </ul>
    </nav>

    @yield('content')

    <footer class="fixed-bottom bg-primary"
        <div class="text-center">
            (c) 2020 Copyright : SMA 404
        </div>
    </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>