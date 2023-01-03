@extends('layouts.main')

@section('container')
<section class="section-products" style="margin-top: 50px;">
    <div class="container">

        <body>
            <h2 class="row justify-content-center text-center mb-4">Category</h2>
            <div class="card mb-3 mt-3" style="max-width: 900px; margin:10% auto;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="img/male-watch.png">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title text-center"><strong>Men</strong></h4>
                            <div>
                                <h4 class="products-men text-center" style="font-weight: 400;">Products for Men</h4>
                                <hr>
                                <p class="card-text" style="padding:5px;">We present superior products for men, see the products for more details.</p>
                                <a href="/categorymale">
                                    <button type="button" class="btn btn-outline-dark" style="margin-top:15px; margin-bottom: 20px;">View Products</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3 mt-3" style="max-width: 900px; margin:10% auto;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="img/female-watch.png">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title text-center"><strong>Women</strong></h4>
                            <div>
                                <h4 class="products-women text-center" style="font-weight: 400;">products for Women</h4>
                                <hr>
                                <p class="card-text" style="padding:5px;">We present superior products for women, see the products for more details.</p>
                                <a href="/categoryfemale">
                                    <button type="button" class="btn btn-outline-dark" style="margin-top:15px; margin-bottom: 20px;">View Products</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a href="/">
                <button type="button" class="btn btn-outline-light" style="margin-top:15px; margin-bottom: 20px;">Back</button>
            </a>
        </body>


    </div>
</section>
@endsection