<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <title>Joker</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-left">

            </div>
            <div class="header-mid">
                <img src="{{ URL::asset('assets/image/logo.png') }}" alt="">
                <div class="header-mid-name">
                        <p>Handcrafted by</p>
                        <p style="text-align: right">Jim HLS</p>
                </div>
            </div>
            <div class="header-right">
                <img src="{{ URL::asset('assets/image/avatar.png') }}" alt="">
            </div>
        </div>
        <div class="content">
            
                <div class="content-top">
                    <p class="title-large">A joke a day keeps the doctor away</p>
                    <p class="title-small">If you joke wrong way, your teeth need to pay</p>
                </div>
                @if($currentJoke)
                <div class="content-mid">
                    <div class="content-mid-text">
                        <div class="joke-text">
                            {{ $currentJoke->joke_text }}
                        </div>
                    </div>
                    <div class="content-mid-button">
                        <div class="content-mid-button-left">
                            <form action="/" method="post">
                                @csrf
                                <input type="hidden" name="joke_id" value="{{ $currentJoke->id }}">
                                <button type="submit" name="vote" value="like">This is funny</button>
                            </form>
                        </div>
                        <div class="content-mid-button-right">
                            <form action="/" method="post">
                                @csrf
                                <input type="hidden" name="joke_id" value="{{ $currentJoke->id }}">
                                <button type="submit" name="vote" value="dislike">This is not funny</button>
                            </form>
                        </div>
                    </div>
                </div>
            @else
            <p class="title-large">That's all the jokes for today! Come back another day!</p>
            @endif
        </div>
        <div class="footer">
            <div class="footer-text">
                Teacher: "Kids,what does the chicken give you?" Student: "Meat!" Teacher: "Very good! Now what does the pig give you?" Student: "Bacon!" Teacher: "Great! And what does the fat cow give you?" Student: "Homework!"
        </div>
            
        </div>
    </div>
</body>
</html>
