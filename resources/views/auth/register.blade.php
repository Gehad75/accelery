@extends('layouts.auth')

@section('content')

<div class="container">
    <div class="row">
       <section id="login-reg">
        <div class="col-md-3 col-sm-3"></div>  
        <div class="col-md-6 col-sm-12">
            <div class="form-box">
                <div class="form-top">
                    <div class="form-top-left">
                        <h3>Sign up now</h3>
                        <p>Fill in the form below to get instant access</p>
                    </div>
                    <div class="form-top-right">
                        <i class="fa fa-pencil"></i>
                    </div>
                </div>
                <div class="form-bottom">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="First Name" name="name" value="{{ old('name') }}" aria-describedby="basic-addon1" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" aria-describedby="basic-addon1" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="new-password" aria-describedby="basic-addon1" autofocus>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group input-group">
                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password" autocomplete="new-password" aria-describedby="basic-addon1" autofocus>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Sign me up!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </section>
    </div>
</div>
@endsection