<!doctype html>
<html>
<head>
  <title>Daftar Kota</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <style>
    .container {
        padding: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Daftar Kota Jabodetabek</h1>
    @php
    $cities = [
        ['name' => 'Jakarta', 'url' => 'https://goo.gl/maps/ugdFU'],
        ['name' => 'Bogor', 'url' => 'https://goo.gl/maps/ExzYT'],
        ['name' => 'Depok', 'url' => 'https://goo.gl/maps/30JxC'],
        ['name' => 'Tangerang', 'url' => 'https://goo.gl/maps/Yn0yZ'],
        ['name' => 'Bekasi', 'url' => 'https://goo.gl/maps/T17QQ']
    ];
    @endphp
    <ul class="list-group">
        @foreach ($cities as $city)
        <li class="list-group-item">
            <a href="{{ $city['url'] }}" target="_blank">
                {{ $city['name'] }}
            </a>
        </li>
        @endforeach
    </ul>
  </div>
</body>
</html>