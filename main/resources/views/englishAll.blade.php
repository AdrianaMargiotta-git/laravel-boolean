<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Without controller All</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>

<!-- SENZA controller:
- /helloYou: saluta utente per nome (variabile) in inglese
- /helloYou2: saluta utente per nome (stessa varbile, stessa view, ma nome diverso) in inglese -->

    <div class="container">
        <h1>Hello {{$name}}</h1>
    </div>
    
</body>
</html>