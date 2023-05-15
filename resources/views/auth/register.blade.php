@extends('layouts.app')

@section('title','Register Page')

@section('content')
<div class="container-fluid p-0">
    <div class="card">
        <div class="card-body">

            <div class="text-center mt-4">
                <div class="mb-3">
                    <a href="{{ route('homepage') }}" class="auth-logo">
                        <img src="{{ asset('assets/admin/images/portnature_logo.png') }}" height="60" class="logo-dark mx-auto" alt="">
                        <img src="{{ asset('assets/admin/images/portnature_logo.png') }}" height="60" class="logo-light mx-auto" alt="">
                    </a>
                </div>
            </div>

            <h4 class="text-muted text-center font-size-18"><b>Register Account</b></h4>

            <div class="p-3">
                <form method="POST" action="{{ route('register') }}" class="form-horizontal mt-3">
                    @csrf
                    <div class="form-group mb-3 row">
                        <div class="col-12">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required  placeholder="Name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="form-group mb-3 row">
                        <div class="col-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="E-mail Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="form-group mb-3 row">
                        <div class="col-12">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="form-group mb-3 row">
                        <div class="col-12">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        </div>
                    </div>

                    <div class="form-group text-center row mt-3 pt-1">
                        <div class="col-12">
                            <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Register</button>
                        </div>
                    </div>
                </form>
                <!-- end form -->
            </div>
        </div>
        <!-- end cardbody -->
    </div>
    <!-- end card -->
</div>
<!-- end container -->
@endsection
