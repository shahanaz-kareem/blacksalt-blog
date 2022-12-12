

@extends('layouts.app') 
@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h2>Admin details</h2>
        <div class="card">
            <div class="card-header">Edit Admin details</div>
            <div class="card-body">
            <form>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword" name="name placeholder="Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" name="email" placeholder="Password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">save</button>
            </form>



            </div>
        </div>
        </div>
    </div>
</div> 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

                <div class="card-body">
                    <!-- {{ __('Please confirm your password before continuing.') }} -->

                    <!-- <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                  

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="text-decoration:none;color:white;">
                                        {{ __('Reset Your Password?') }}
                                    </a>
                                @endif
</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection