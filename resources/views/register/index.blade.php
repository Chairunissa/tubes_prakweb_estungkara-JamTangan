@extends('layouts.main')

@section('container')
<section class="section-products">
    <div class="container">
        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h3 class="registration text-center">Register</h3>
                            <p class="fill-data text-center">Fill in the data below.</p>
                            <form class="requires-validation" novalidate>
                                <form action="/register" method="post">
                                    @csrf
                                    <div class="col-md-12">
                                        <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" placeholder="Name" required value="{{ old('name') }}">
                                        <div class="valid-feedback">Username field is valid!</div>
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-md-12">
                                        <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="E-mail Address" required value="{{ old('email') }}">
                                        <div class="valid-feedback">Email field is valid!</div>
                                        @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror

                                    </div>

                                    <div class="col-md-12">
                                        <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="Password" required>
                                        <div class="valid-feedback">Password field is valid!</div>
                                        @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="Repeat Password" required>
                                        <div class="valid-feedback">Password field is valid!</div>
                                        @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="form-button mt-4">
                                        <button id="submit" type="submit" class="btn btn-primary">Register</button>
                                    </div>
                                    <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
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