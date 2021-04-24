<!DOCTYPE html>
<html>

<head>
    <title>@yield('judul')</title>
</head>

<body>
    <center>
        <h3>Mata Kuliah Pemrograman</h3>
        <p>Materi hari ini adalah mengenal route, view dan sistem Template</p>
        <a href="/home">Home</a>
        <a href="/profil">Profil</a>
        <a href="/galery">Galery</a>
        <hr>
        @yield('isi')
        <hr>

        Coryright@2021 AnisaIndra
    </center>
</body>


</html>