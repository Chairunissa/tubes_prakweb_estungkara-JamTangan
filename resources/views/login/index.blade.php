@extends('layouts.main')

@section('container')

<section class="section-products">
  <div class="container">
    <div class="form-body">
      <div class="row">
        <div class="form-holder">
          <div class="form-content">
            <div class="form-items">
              <h3 class="registration text-center">Login</h3>
              <p class="fill-data text-center">Fill in the data below.</p>
              <form class="requires-validation" novalidate>
                <form action="/login" method="post">
                  @csrf
                  <div class="col-md-12">
                    <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="E-mail Address" autofocus required value="{{ old('email') }}">
                    <div class="valid-feedback">Email field is valid!</div>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="col-md-12">
                    <input class="form-control" id="password" type="password" name="password" placeholder="Password">
                    <div class="valid-feedback">Password field is valid!</div>
                  </div>

                  <div class="form-button mt-4">
                    <button type="submit" class="btn btn-primary">Login</button>
                  </div>
                  <small class="d-block text-center mt-3">Not Registered?<a href="/register"> Register Now!</a></small>
                </form>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection