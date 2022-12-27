@extends('layouts.main')

@section('container')

<section class="section-products">
  <div class="container">
    <div class="form-body">
      <div class="row">
        <div class="form-holder">
          @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          <div class=" form-content">
            <div class="form-items">
              <h3 class="registration text-center">Login</h3>
              <p class="fill-data text-center">Fill in the data below.</p>

              <form action="/login" method="post">
                @csrf
                <div class="col-md-12">
                  <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="E-mail Address" autofocus required value="{{ old('email') }}">
                  @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-md-12">
                  <input class="form-control" id="password" type="password" name="password" placeholder="Password">
                </div>

                <div class="form-button mt-4">
                  <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <small class="d-block text-center mt-3">Not Registered?<a href="/register"> Register Now!</a></small>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection