@extends('layouts.main')

@section('container')
<div class="hometem p-4" style="width: 100%; height: 100vh; background-color: #F9F8F3;">
    <div class="row">
        <div class="col-8 my-2">
            <div class="icon-tangan">
                <span></span>
                <marquee class="p-2" style="border: 0px solid"><h3>Welcome to De Orologio</h3></marquee>
            </div>
            <div class="title-hero mt-4" style="font-size: 64px">
                <strong>The perfect moment</strong>
                <p>Between past and <br> future
                    <span><img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" style="width: 70px;" alt="Avatar" /></span>
                </p>
            </div>
            <div class="deskripsi-hero" style="color: #615d5d">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et mollitia, quo perspiciatis quos corrupti debitis dolorum repellat optio laudantium, excepturi dicta suscipit. Facilis debitis rem cum libero dolorum reiciendis veniam eveniet itaque in, et cumque earum ex necessitatibus exercitationem ratione possimus, perspiciatis impedit quo voluptatem omnis quidem fugiat, culpa optio?</p>
            </div>
            <div class="row" style="width: 70%">
                <div class="col-5">
                    <a style="text-decoration: none; " href="./produk">
                        <button style="background-color: salmon; color: white; border: none; width: 100%; padding: 5px 8px;">Lihat Produk Baru</button>
                    </a>
                </div>
                <div class="col">
                    <a style="text-decoration: none; " href="./catalog">
                        <button style="background-color: rgb(233, 225, 225); color: rgb(0, 0, 0); border: 1px solid rgba(128, 128, 128, 0.347); width: 72%; padding: 5px 8px;">Lihat Katalog</button>
                    </a>
                </div>
            </div>

            <div class="sign mt-4">
                <p><strong>Already a member of our company?</strong> <a href="/login" style="text-decoration: none; color:salmon;"> Sign in</a></p>
            </div>
        </div>
        <div class="col-4">
            <div class="image-hero">
                <img src="/img/jam-hero.png" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
