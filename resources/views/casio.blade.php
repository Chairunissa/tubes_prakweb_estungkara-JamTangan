@extends('layouts.main')

@section('container')
<section class="section-products" style="margin-top: 50px" >
    <div class="container">

        <h2 class="row justify-content-center text-center mb-4">Casio Products</h2>

        <!-- Grid row -->
        <div class="row pb-3">

        <!-- Grid column -->
        <div class="column-2 px-2 mb-r">

            <!--Card-->
            <div class="card default-color-dark">

            <!--Card image-->
            <div class="view">
                <img src="https://mdbootstrap.com/img/Photos/Slides/img%2810%29.jpg" class="card-img-top" alt="photo">
                <a href="#">
                <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!--Card content-->
            <div class="card-body text-center">
                <!--Title-->
                <h4 class="card-title white-text">Nama Jam</h4>
                <!--Text-->
                <p class="card-text white-text">Deskripsi Jam.</p>
                <a href="/detail" class="btn btn-info btn-rounded">Details</a>
            </div>

            </div>
            <!--/.Card-->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="column-1 px-2 mb-r">

            <!--Card-->
            <div class="card primary-color-dark">

            <!--Card image-->
            <div class="view">
                <img src="https://mdbootstrap.com/img/Photos/Slides/img%2811%29.jpg" class="card-img-top" alt="photo">
                <a href="#">
                <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!--Card content-->
            <div class="card-body text-center">
                <!--Title-->
                <h4 class="card-title white-text">Nama Jam</h4>
                <!--Text-->
                <p class="card-text white-text">Deskripsi Jam.</p>
                <a href="#" class="btn btn-info btn-rounded">Details</a>
            </div>

            </div>
            <!--/.Card-->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="column-1 px-2">

            <!--Card-->
            <div class="card warning-color-dark">

            <!--Card image-->
            <div class="view">
                <img src="https://mdbootstrap.com/img/Photos/Slides/img%2812%29.jpg" class="card-img-top" alt="photo">
                <a href="#">
                <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!--Card content-->
            <div class="card-body text-center">
                <!--Title-->
                <h4 class="card-title white-text">Nama Jam</h4>
                <!--Text-->
                <p class="card-text white-text">Deskripsi Jam.</p>
                <a href="#" class="btn btn-info btn-rounded">Details</a>
            </div>

            </div>
            <!--/.Card-->

        </div>
        <!-- Grid column -->

        </div>


        <!-- Grid row -->
        <div class="row pt-4">

            <!-- Grid column -->
            <div class="column-2 px-2 mb-r">

                <!--Card-->
                <div class="card default-color-dark">

                <!--Card image-->
                <div class="view">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%2810%29.jpg" class="card-img-top" alt="photo">
                    <a href="#">
                    <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body text-center">
                    <!--Title-->
                    <h4 class="card-title white-text">Nama Jam</h4>
                    <!--Text-->
                    <p class="card-text white-text">Deskripsi Jam.</p>
                    <a href="#" class="btn btn-info btn-rounded">Details</a>
                </div>

                </div>
                <!--/.Card-->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="column-1 px-2 mb-r">

                <!--Card-->
                <div class="card primary-color-dark">

                <!--Card image-->
                <div class="view">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%2811%29.jpg" class="card-img-top" alt="photo">
                    <a href="#">
                    <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body text-center">
                    <!--Title-->
                    <h4 class="card-title white-text">Nama Jam</h4>
                    <!--Text-->
                    <p class="card-text white-text">Deskripsi Jam.</p>
                    <a href="#" class="btn btn-info btn-rounded">Details</a>
                </div>

                </div>
                <!--/.Card-->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="column-1 px-2">

                <!--Card-->
                <div class="card warning-color-dark">

                <!--Card image-->
                <div class="view">
                    <img src="https://mdbootstrap.com/img/Photos/Slides/img%2812%29.jpg" class="card-img-top" alt="photo">
                    <a href="img/casio.png">
                    <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <!--Card content-->
                <div class="card-body text-center">
                    <!--Title-->
                    <h4 class="card-title white-text">Nama Jam</h4>
                    <!--Text-->
                    <p class="card-text white-text">Deskripsi Jam.</p>
                    <a href="#" class="btn btn-info btn-rounded">Details</a>
                </div>

                </div>
                <!--/.Card-->
            </div>
            <!-- Grid column -->
            <a class="back pt-4" href="/catalog">
                <button type="button" class="btn btn-outline-light" style="margin-top:15px; margin-bottom: 20px;">Back</button>
            </a>

            </div>
            <!-- Grid row -->


    </div>
</section>

<h1 class="mb-3 text-center">{{$title}}</h1>

<div class="row justify-content-center mb-3">
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
</div>

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
      <a class="text-decoration-none btn btn-primary" href="/posts/{{$posts[0]->slug}}">Read More..</a>
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
