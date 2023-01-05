@extends('layouts.main')

@section('container')
<section class="section-products" style="margin-top: 50px">
    <div class="container">

        <h2 class="row justify-content-center text-center mb-4">{{ $title }}</h2>

        <!-- Grid row -->
        <div class="row pb-3">

            <!-- Grid column -->
            <div class="column-2 px-2 mb-r">

                <!--Card-->
                <div class="card default-color-dark">

                    <!--Card image-->
                    <div class="view">
                        <img src="img/rolex-1.png" class="card-img-top" alt="photo">
                        <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Title-->
                        <h4 class="card-title white-text">Rolex Black Men</h4>
                        <a href="https://www.rolex.com/watches.html" class="btn btn-info btn-rounded">View shop</a>
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
                        <img src="img/rolex-2.png" class="card-img-top" alt="photo">
                        <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Title-->
                        <h4 class="card-title white-text">Rolex Gold Men</h4>
                        <!--Text-->
                        <a href="https://www.rolex.com/watches.html" class="btn btn-info btn-rounded">View shop</a>
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
                        <img src="img/rolex-3.png" class="card-img-top" alt="photo">
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Title-->
                        <h4 class="card-title white-text">Rolex Silver Men</h4>
                        <!--Text-->
                        <a href="https://www.rolex.com/watches.html" class="btn btn-info btn-rounded">View shop</a>
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
                        <img src="img/rolex-4.png" class="card-img-top" alt="photo">
                        <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Title-->
                        <h4 class="card-title white-text">Rolex Gold Women</h4>
                        <!--Text-->
                        <a href="https://www.rolex.com/watches.html" class="btn btn-info btn-rounded">View shop</a>
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
                        <img src="img/rolex-5.png" class="card-img-top" alt="photo">
                        <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Title-->
                        <h4 class="card-title white-text">Rolex Silver Women</h4>
                        <!--Text-->
                        <a href="/detail" class="btn btn-info btn-rounded">View shop</a>
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
                        <img src="img/rolex-6.png" class="card-img-top" alt="photo">
                        <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-body text-center">
                        <!--Title-->
                        <h4 class="card-title white-text">Rolex Pink Women</h4>
                        <!--Text-->
                        <a href="https://www.rolex.com/watches.html" class="btn btn-info btn-rounded">View shop</a>
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

@endsection
