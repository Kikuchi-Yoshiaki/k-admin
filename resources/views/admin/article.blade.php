@extends('admin/layout')

@section('title', 'ArticleList')

@section('page', 'ArticleList')

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
            <a href="{{ url('/view') }}" class="link-btn">
                <i class="fas fa-camera"></i>
                <span>View List</span>
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
            <tr>
                <th>#</th>
                <th>User_id</th>
                <th>Name</th>
                <th>Title</th>
                <th>Body</th>
                <th>Category</th>
                <th>Date</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>1</td>
                <td>Yoshiaki</td>
                <td>title name</td>
                <td>texttexttexttexttexttexttexttexttexttexttexttext</td>
                <td>food</td>
                <td>2021.10.4(Mon)</td>
                <td><a href="#">削除</a></td>
            </tr>
        </tbody>

    </table>

@endsection