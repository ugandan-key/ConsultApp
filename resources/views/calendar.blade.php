<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Calendario de Eventos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/calendar.js'])
</head>
<body>
    <div id="app">
        <div id="calendar"></div>
    </div>
</body>
</html>
