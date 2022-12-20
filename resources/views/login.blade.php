<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @vite(['resources/js/app.js', 'resources/css/app.css'])
        
    </head>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: rgb(218, 247, 166);
        }
    </style>
    <body class="antialiased">
        <div id="app"></div>
        <div id="data"></div>
        <h1>Login</h1>
    <form method="POST" action="/login">
    @csrf

    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br><br>

    <button type="submit">Login</button>
</form> 
    </body>
</html>
