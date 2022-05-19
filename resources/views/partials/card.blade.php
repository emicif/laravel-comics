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


    {{ $comic['title'] }}
    <div>
        <img src="{{ $comic['thumb'] }}" alt="">
    </div>
    <p>{{ $comic['price'] }}</p>
    <p>{{ $comic['description'] }}</p>



</body>

</html>
