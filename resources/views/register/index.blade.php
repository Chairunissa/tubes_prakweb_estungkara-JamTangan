@extends('layouts.main')

@section('container')
<section class="section-products">
    <div class="container">
        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <form action="/register" method="post">
                                <h3 class="registration text-center">Register</h3>
                                <p class="fill-data text-center">Fill in the data below.</p>
                                <form class="requires-validation" novalidate>

                                    @csrf
                                    <div class="col-md-12">
                                        <input class="form-control" id="name" type="name" name="name" placeholder="Name" required>
                                    </div>


                                    <div class="col-md-12">
                                        <input class="form-control" id="email" type="email" name="email" placeholder="E-mail Address" required>

                                    </div>

                                    <div class="col-md-12">
                                        <input class="form-control" id="password" type="password" name="password" placeholder="Password" required>
                                    </div>

                                    <div class="col-md-12">
                                        <input class="form-control" id="password" type="password" name="password" placeholder="Repeat Password" required>
                                    </div>


                                    <div class="form-button mt-4">
                                        <button id="submit" type="submit" class="btn btn-primary">Register</button>
                                    </div>
                                    <small class="d-block text-center mt-3">Already registered? <a href="/login" style="color: white;">Login</a></small>

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
