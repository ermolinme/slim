<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <title>{{ $title }}</title>
    <style>
        html, body {
            /* height: 100vh; */
            font-family: Montserrat, sans-serif;
        }
        header {
            font-size: 2rem;
            font-weight: bold;
        }
        main {
            color: #787878;
            font-size: 1.5rem;
        }
        .container {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            justify-content: center;
            align-items: center;
            height: 95vh;
        }
        a {
            color: #5c9ccb;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            {{ $title }}
        </header>
        <main>
            {!! $html !!}
        </main>
        <footer>
            <a href="/">На главную</a>
        </footer>
    </div>
</body>
</html>