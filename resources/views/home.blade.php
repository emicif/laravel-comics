<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    @include ('partials/layout')
    <main>
        <div class="card-container">
            <!-- foreach per card -->
            @foreach ($card as $item)
                <div class="card">
                    <img src={{$item ['thumb']}} alt="{{$item ['series'] }}">
                    <p>{{$item ['series'] }}</p>
                </div>
                @endforeach
        </div>
        <div class="button">
            <button>LOAD MORE</button>
        </div>
        
        
    </main>
    @include ('partials/footer')

</body>
</html>