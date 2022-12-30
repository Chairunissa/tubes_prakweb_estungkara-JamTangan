@extends('layouts.main')

@section('container')
<section class="section-products" style="margin-top: 50px">
    <div class="container">

        <h2 class="row justify-content-center text-center mb-4">Men</h2>

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
            <a class="back pt-4" href="/category">
                <button type="button" class="btn btn-outline-light" style="margin-top:15px; margin-bottom: 20px;">Back</button>
            </a>

        </div>
        <!-- Grid row -->


    </div>
</section>
@endsection