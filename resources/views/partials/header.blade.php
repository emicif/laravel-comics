<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
    <header>
        <div class="flex container">
            <a href="/"><img src="/img/dc-logo.png" alt="Jumbotron_Comics"></a>

            <nav>
                <ul>
                    @foreach ($navigation as $item)
                        <li>
                            <a href="{{ $item['url'] }}">{{ $item['text'] }}</a>
                        </li>
                    @endforeach
                </ul>

            </nav>
        </div>

        <div class="jumbo-top-bg">

            {{-- <img class="jumbotron" src="/img/jumbotron.jpg" alt="Jumbotron_Comics"> --}}
        </div>
    </header>
</body>

</html>
