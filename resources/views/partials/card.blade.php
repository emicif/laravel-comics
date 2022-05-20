<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action Comics</title>
</head>

<body>

    @include('partials/layout')

    <h2>{{ $comic['title'] }}</h2>
    <p class="price">U.S. Price: {{ $comic['price'] }}</p>


    <div class="card-container">
        <p>{{ $comic['description'] }}</p>
        <div>
            <img src="{{ $comic['thumb'] }}" alt="">
        </div>
    </div>




</body>

</html>
