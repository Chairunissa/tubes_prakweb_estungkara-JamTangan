@extends('layouts.main')

@section('container')
<section class="section-products" style="margin-top: 20px" >
        <div class="container p-4">
            <h2 class="row justify-content-center text-center mb-3">Catalog</h2>

            <div class="row pt-4">

              <div class="col-lg-4">
                <div class="card">
                  <img class="card-img-top" src="img/casio-catalog.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Casio Watch</h5>
                    <p class="card-text">Made in Japan.</p>
                    <a href="/casio" class="btn btn-outline-dark">View Products</a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="img/rolex-catalog.png" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Rolex Watch</h5>
                      <p class="card-text">Made in England.</p>
                      <a href="/rolex" class="btn btn-outline-dark">View Products</a>
                    </div>
                  </div>
              </div>

              <div class="col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="img/chanel-catalog.png" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Chanel Watch</h5>
                      <p class="card-text">Made in France.</p>
                      <a href="/chanel" class="btn btn-outline-dark">View Products</a>
                    </div>
                  </div>
              </div>

              <a class="back pt-5" href="/">
                <button type="button" class="btn btn-outline-light" style="margin-top:15px; margin-bottom: 20px;">Back</button>
              </a>


            </div>


        </div>
</section>
@endsection
