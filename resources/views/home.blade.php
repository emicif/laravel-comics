<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    @include('partials/layout')
    <main>
        <div class="card-container">
            <!-- foreach per card -->
            @foreach ($comics as $index => $item)
                <div class="card">
                    <a href="/card/{{ $index }}">
                        <img src={{ $item['thumb'] }} alt="{{ $item['series'] }}">
                        <p>{{ $item['series'] }} {{ $index }}</p>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="button">
            <button>LOAD MORE</button>
        </div>

        <div class="main-bottom">
            <div class="item">

                <img src="img/buy-comics-digital-comics.png" alt="">
                <p>DIGITAL COMICS</p>
            </div>
            <div class="item">
                <img src="img/buy-comics-merchandise.png" alt="">
                <p>DC MERCHANDISE</p>
            </div>
            <div class="item">
                <img src="img/buy-comics-subscriptions.png" alt="">
                <p>SUBSCRIPTION</p>
            </div>
            <div class="item">
                <img src="img/buy-comics-shop-locator.png" alt="">
                <p>COMIC SHOP LOCATOR</p>
            </div>


        </div>
    </main>
    @include('partials/footer')


</body>

</html>
