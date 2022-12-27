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



@endsection
