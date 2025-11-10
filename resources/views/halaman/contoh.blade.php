<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ini adalah halaman contoh, saya punya mobil {{ $param }}</h1>

    <a href="/tujuanaja">Dipanggil dengan uri</a>
    <a href="{{ route('halamantujuan') }}">ini adalah halaman tujuan</a>

</body>
</html>