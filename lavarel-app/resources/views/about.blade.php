<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <div>
        @if($currentJoke)
            <h2>Tên tác giả: {{ $currentJoke->author_name }}</h2>
            <p>Nội dung truyện cười: {{ $currentJoke->joke_text }}</p>
            <form action="/about" method="post">
                @csrf
                <input type="hidden" name="joke_id" value="{{ $currentJoke->id }}">
                <button type="submit" name="vote" value="like">Like</button>
                <button type="submit" name="vote" value="dislike">Dislike</button>
            </form>
        @else
            <p>Không có truyện cười nào được tìm thấy.</p>
        @endif
    </div>
</body>
</html>