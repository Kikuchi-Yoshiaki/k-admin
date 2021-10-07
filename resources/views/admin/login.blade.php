@extends('admin/layout')

@section('title', 'AdminLogin')

@section('page', 'Login')

@section('content')

    <form class="col-8 offset-2">

        <div class="mb-3 mt-5 col-6 offset-3">
            <label for="account-name" class="form-label">Account Name</label>
            <input type="text" class="form-control " id="account-name" aria-describedby="account-name">
        </div>

        <div class="mb-3 mt-3 col-6 offset-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
        </div>

        <div class="text-center">
            <a href="{{ url('master') }}" type="submit" class="btn btn-primary my-5">Login</a>
        </div>

    </form>

@endsection
