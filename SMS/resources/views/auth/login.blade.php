@extends('layouts.LoginRegister')


@section('content')
<!-- ======= Header ======= -->


<!-- <main id="main"> -->

<!-- ======= Login Section ======= -->
<section id="get-started" class="padd-section text-center">

  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="ui/assets/login/img/img-01.png" alt="IMG">
        </div>
        <form action="{{ route('login') }}" method="POST">
          @csrf
          <span class="login100-form-title">
            Member Login
          </span>
          <div class="form-group">

            <!-- <center><h2>Login</h2></center> -->
            <p></p>
            <!-- <label for="name">Email</label> -->

            <input type="email" class="form-control
                    @error('email') is-invalid @enderror
                    " value="{{ old('email') }}" name="email" id="email" placeholder="Enter Email ID" />

            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>


          <div class="form-group">
            <!-- <label for="name">Password</label> -->
            <input type="password" class="form-control
                    @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" />

            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror

          </div>



          <div class="text-center">
            <button type="submit" class="login100-form-btn">
              {{ __('Login') }}</button>

            {{-- <div class="text-center p-t-12">
              <span class="txt1">
              Download RTPCR Report
              </span>
              <a class="txt2" href="{{route('customlogin.index')}}">
             Click Here TO DOWNLOAD
              </a>
            </div> --}}

          </div>
        </form>

      </div>
    </div>
  </div>

</section><!-- Login Section -->


</main><!-- End #main -->

@endsection
