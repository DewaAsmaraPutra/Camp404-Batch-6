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
@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Portal Informasi Siswa</h1>
        <p>Selamat datang di Portal informasi Siswa SMA 404!</p>
        <a href="{{ url('/info-kegiatan') }}" class="btn btn-dark">Info Kegiatan</a>
        <a href="{{ url('/data-siswa') }}" class="btn btn-primary">Data Siswa</a>
@endsection
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </div>
</body>
</html>