@extends('admin/layout')

@section('title', 'Message')

@section('title', 'Message')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-dark">メッセージ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="text-dark">このアカウントはログイン権限がありません</p>
                    <p class="text-dark">右上からログアウトしてください</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
