<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    </style>
</head>

<body class="antialiased">
    <script>
        {!! Vite::content('resources/js/app.js') !!}
    </script>

    <script>
        Echo.channel(`webappix`)
            .listen('test', (e) => {
                console.log(e);
                // console.log("welcome Krina");
            });
    </script>
</body>

</html>
