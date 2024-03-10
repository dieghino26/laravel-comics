<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="images/ico">
    <title>DC Comics</title>

    <!-- Fonts -->

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/dc-logo.png') }}" alt="DC logo">
        </div>
        <div class="nav">

            <nav>
                <ul>
                    <li>
                        <a href="#">CHARACTERS</a>
                    </li>
                    <li>
                        <a href="#">COMICS</a>
                    </li>
                    <li>
                        <a href="#">MOVIES</a>
                    </li>
                    <li>
                        <a href="#">TV</a>
                    </li>
                    <li>
                        <a href="#">GAMES</a>
                    </li>
                    <li>
                        <a href="#">COLLECTIBLES</a>
                    </li>
                    <li>
                        <a href="#">VIDEOS</a>
                    </li>
                    <li>
                        <a href="#">FANS</a>
                    </li>
                    <li>
                        <a href="#">NEWS</a>
                    </li>
                    <li>
                        <a href="#">SHOP</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="search">
            <input type="text" placeholder="Search">
        </div>
    </header>
</body>

</html>
