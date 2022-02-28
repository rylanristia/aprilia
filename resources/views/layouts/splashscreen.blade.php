<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="15;url={{ route('welcome') }}" />
    <title>Hi Aprilia</title>

    <link rel="stylesheet" href="./styles/splashscreen.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sen&amp;display=swap">

    <style>
        body {
            background-color: #39315C !important;
        }

    </style>
</head>

<body>

    @yield('content')

    <script src="./scripts/splashscreen.js"></script>
</body>

</html>
