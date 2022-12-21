@extends('layouts.main')

@section('container')

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card  text-white" style="border-radius: 1rem;background-color: #DC6640;">
          <div class="card-body p-5 text-center">

            <div class="">

              <h2 class="fw-bold mb-5 text-uppercase">Sign-Up</h2>

              <div class="form-outline form-white mb-4">
                <input type="text" id="typeTextX" class="form-control form-control-lg" />
                <label class="form-label" for="typeTextX">Name</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Repeat Password</label>
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Register</button>

              <div>
                <p class="mt-3">Already have an account? <a href="/login" class="text-white-100 fw-bold">Login</a>
                </p>
              </div>

              <p>Copyright &copy; 2022. All Right Reserved.</p>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection
