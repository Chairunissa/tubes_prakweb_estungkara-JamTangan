@extends('layouts.main')

@section('container')

<section class="section-products" style="margin-top: 50px;">
    <div class="container">
        {{-- <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6">
                <div class="header" style="margin-top: 100px;">
                </div>
            </div>
        </div> --}}
        <div class="row">
            <h2 class="row justify-content-center text-center mb-4">New Products</h2>
            <!-- Single Product -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-1" class="single-product">
                    <div class="part-1">
                        <span class="new">new</span>
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </div>
                    <div class="part-2">
                        <h3 class="product-title">Rolex Datejust 36</h3>
                    </div>
                    <button type="button" class="btn" style="background-color: white"><a href="/detail">Detail</a></button>
                </div>
            </div>
            <!-- Single Product -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-2" class="single-product">
                    <div class="part-1">
                        <span class="new">new</span>
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </div>
                    <div class="part-2">
                        <h3 class="product-title">Casio Women Digital</h3>
                    </div>
                    <button type="button" class="btn" style="background-color: white;"><a href="/detail">Detail</a></button>
                </div>
            </div>
            <!-- Single Product -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-3" class="single-product">
                    <div class="part-1">
                        <span class="new">new</span>
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </div>
                    <div class="part-2">
                        <h3 class="product-title">Chanel J12 White</h3>
                    </div>
                    <button type="button" class="btn" style="background-color: white;"><a href="/detail">Detail</a></button>
                </div>
            </div>
            <!-- Single Product -->
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div id="product-4" class="single-product">
                    <div class="part-1">
                        <span class="new">new</span>
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </div>
                    <div class="part-2">
                        <h3 class="product-title">Rolex Lady</h3>
                    </div>
                    <button type="button" class="btn" style="background-color: white;"><a href="/detail">Detail</a></button>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- <h1 class="mb-3 text-center">{{$title}}</h1> --}}
<h2 class="row justify-content-center text-center mb-4">New Products</h2>

{{-- <div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/posts">
            @if (request('category'))
            <input type="hidden" name="category" value="{{request('category')}}">
            @endif
            @if (request('author'))
            <input type="hidden" name="author" value="{{request('author')}}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{request('search')}}">
                <button class="btn btn-danger" type="submit">Search</button>
            </div>
        </form>
    </div>
</div> --}}

@if ($posts->count())

<div class="card mb-3">
    @if ($posts[0]->image)
      <div style="max-height: 400px; overflow:hidden">
        <img src="{{ asset('storage/'. $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
      </div>
    @else
      <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    @endif
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/posts/{{$posts[0]->slug}}" class="text-decoration-none text-dark">{{$posts[0]->title}}</a></h3>
      <p>
        <small class="text-muted">
            By. <a class="text-decoration-none" href="/posts?author={{$posts[0]->author->username}}">{{$posts[0]->author->name}}</a>
            in <a class="text-decoration-none" href="/posts?category={{$posts[0]->category->slug}}">{{$posts[0]->category->name}}</a>
            {{$posts[0]->created_at->diffForHumans()}}
        </small>
      </p>
      <p class="card-text">{{$posts[0]->excerpt}}</p>
      <a class="text-decoration-none btn btn-primary" href="/posts/{{$posts[0]->slug}}">Detail</a>
    </div>
  </div>

  <div class="contaner">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
            <div class="col-md-4">
                <div class="card mb-3">
                    <a class="text-decoration-none text-white position-absolute px-3 py-2" style="background-color: rgba(0,0,0,0.7);" href="/posts?category={{$post->category->slug}}">{{$post->category->name}}</a>
                    @if ($post->image)
                      <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                    @else
                      <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    @endif
                    <div class="card-body">      
                      <h5 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{$post->slug}}">{{$post->title}}</a></h5>
                      <p><small class="text-muted">
                        By. <a class="text-decoration-none" href="/posts?author={{$post->author->username}}">{{$post->author->name}}</a>
                        {{$posts[0]->created_at->diffForHumans()}}
                      </small></p>
                      <p class="card-text">{{$post->excerpt}}</p>
                      <a href="/posts/{{$post->slug}}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
  </div>
@else
<p class="text-center fs4">No post found.</p>
@endif

<div class="d-flex justify-content-end">
    {{$posts->links()}}
</div>



@endsection