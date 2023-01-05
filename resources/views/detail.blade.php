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
    <section class="section-products" style="margin-top: 100px">
        <div class="cover">
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


    {{-- <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3 mt-3">{{ $produk->title }}</h2>

                <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a></p>
                @if($post->image)
                <div style="max-height: 300px; overflow:hidden;">
                    <img src="{{asset('storage/'.$post->image)}}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}-watch" alt="{{$post->category->name}}" class="img-fluid">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/produk" class="d-block mt-3 text-decoration-none">Back to Post</a>

            </div>
        </div>
    </div> --}}

    @endsection
</body>

</html>
@endsection
