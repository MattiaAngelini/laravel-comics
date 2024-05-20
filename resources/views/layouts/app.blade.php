<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>
        <section class="container d-flex justify-content-between align-items-center">
            <img src="{{Vite::asset ('resources/img/dc-logo.png')}}" alt="logo">
            <nav>
                <ul class="list-unstyled d-flex gap-2">
                    @foreach ($linkheader as $link)
                        <li>{{ $link }}</li>
                    @endforeach
                </ul>
            </nav>
    </section>

       

    </header>


    <main>
      @yield('content')
    </main>

    <footer>FOOTER</footer>

</body>

</html>