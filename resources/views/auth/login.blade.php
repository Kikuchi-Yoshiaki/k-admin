@extends('admin/layout')

@section('title', 'AdminLogin')

@section('page', 'Login')

@section('content')

    <form method="POST" action="{{ route('login') }}" neme="login-form" class="col-8 offset-2">
        @csrf
        <div class="mb-3 mt-5 col-6 offset-3">
            <label for="email" class="form-label">E-Mail</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
        
            <!-- アドレスエラーメッセージ -->
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3 mt-3 col-6 offset-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autofocus autocomplete="current-password">
        
            <!-- パスワードエラーメッセージ -->
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
       
        <div class="col-3 button mt-5">
            <button type="submit" class="btn btn-block btn-primary form-button" name="login">Login</button>
        </div> 
        
    </form>

@endsection
