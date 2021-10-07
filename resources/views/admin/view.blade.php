@extends('admin/layout')

@section('title', 'ViewList')

@section('page', 'ViewList')

@section('content')

    <!-- 各種リンクボタン -->
        <section>
            <a href="{{ url('/master') }}" class="link-btn">
                <i class="fas fa-home"></i>
                <span>MasterAdmin</span>
            </a>
        </section>

    <div class="d-flex justify-content-between">
        <section>
            <a href="{{ url('/profile') }}" class="link-btn">
                <i class="fas fa-users"></i>
                <span>Profile List</span>
            </a>
        </section>

        <section>
            <a href="{{ url('/article') }}" class="link-btn">
                <i class="far fa-newspaper"></i>
                <span>Article List</span>
            </a>
        </section>

        <section>
            <a href="{{ url('/contact') }}" class="link-btn">
                <i class="far fa-envelope"></i>
                <span>Contact</span>
            </a>
        </section>
    </div>


    <!-- データテーブル -->
    <table class="table table-bordered table-hover mt-5">
        <thead>
            <tr class="text-center">
                <th>No.</th>
                <th>User_id</th>
                <th>Title</th>
                <th>View_image</th>
                <th>Date</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($views as $view)
            <tr>
                <th scope="row">{{ $view->id }}</th>
                <td>{{ $view->user_id }}</td>
                <td>{{ $view->title }}</td>
                <td>{{ $view->view_image }}</td>
                <td>{{ $view->created_at->format('Y/m/d H:i') }}</td>
                <td class="text-center"><a href="">削除</a></td>
            </tr>
            @endforeach
        </tbody>

    </table>

    <section class="mb-5">
        <a href="{{ url('/test/view') }}" class="link-btn">
            <span>Test</span>
        </a>
    </section>

@endsection