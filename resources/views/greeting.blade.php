@php
    $arrayMobil = ['Sedan'];
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @forelse($arrayMobil as $mobil)
        <h2>{{ $mobil }}</h2>
    @empty
        <h2>Data Kosong cuyy</h2>
    @endforelse
</body>

</html>
