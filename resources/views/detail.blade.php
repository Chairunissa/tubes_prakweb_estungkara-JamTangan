@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estungkara</title>
    <link rel="stylesheet" href="/style/detail.css">
</head>

<body>
    @if ($posts->count())
    @foreach ($posts as $post)
    <section class="section-products" style="margin-top: 100px">
        <div class="cover">
            <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
            <img src="https://images.unsplash.com/photo-1619946928632-abefa12506e2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=432&q=80" alt="">
            <div class="desc">
                <h2>Jam tangan terbaru rolex</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fuga similique atque saepe repellendus quisquam asperiores delectus, nostrum eligendi quam possimus perferendis cumque necessitatibus voluptate a.
                    Possimus delectus porro laborum iusto!
                </p>
                <button>Buy Product</button>
            </div>
        </div>
    </section>
    <a class="back pt-4" href="/">
        <button type="button" class="btn btn-outline-light" style="margin-top:15px; margin-bottom: 20px;">Back</button>
    </a>
    @endforeach
    @endif
</body>

</html>
@endsection