<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>With controller</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>

<!-- CON controller:
- /holaTu: saluta utente per nome (variabile) in spagnolo
- /holaTu2: saluta utente per nome (stessa varbile, stessa view, ma nome diverso) in spagnolo -->

    <div class="container">
        <h1>Hola {{$nombre}}</h1>
    </div>
    
</body>
</html>