<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://abs.twimg.com/favicons/twitter.2.ico">
    <title>@yield('title')</title>

    @include('includes.styles')
    <style>
        body {
            overflow-y: scroll;
            background-color: #39315C !important;
            background-image: none;
        }

        ::-webkit-scrollbar {
            width: 5px;
            height: 5px;
        }

        ::-webkit-scrollbar-track {
            background-color: #605b74;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #E5EDFA;
            border-radius: 10px;
        }

        .btn-send {
            background-color: #39315C;
            color: white;
            width: 100%;
            border-radius: 20px;
            margin-top: 20px;
            font-weight: 500;
        }

        .btn-send::hover {
            background-color: #E5EDFA;
            font-weight: 700;
            color: #39315C;
        }

    </style>
</head>

<body>
    @yield('content')

    @include('includes.scripts')
</body>

</html>
