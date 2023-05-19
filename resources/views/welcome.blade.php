<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: black;
        }

        h1 {
            color: red;
            text-align: center;
        }

        p {
            color: red;
            font-size: 1.5rem;
        }

        ._links {
            color: red;
        }
    </style>

</head>

<body class="antialiased">

    <header>
        <h1>Hello, {{ $program }}</h1>
    </header>

    <main>
        <hr>
        @foreach ($links as $link)
            <li>{{ $links }}</li>
        @endforeach
        <hr>
    </main>

</body>

</html>
