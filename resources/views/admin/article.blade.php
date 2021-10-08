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
            <a href="{{ url('/article') }}" class="link-btn">
                <i class="far fa-newspaper"></i>
                <span>Article List</span>
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
        <thead class="text-center bg-primary">
            <tr>
                <th rowspan="3">No.</th>
                <th>User Name</th>
                <th>Category</th>
                <th colspan="3">Title</th>
                <th>Link URL</th>
                <th>link Text</th>
            </tr>
            <tr><th colspan="7">Body</th></tr>
            <tr>
                <th>Main Image</th>
                <th>Sub Image_1</th>
                <th>Sub Image_2</th>
                <th>Sub Image_3</th>
                <th>Sub Image_4</th>
                <th>Date</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <th rowspan="3">{{ $article->id }}</th>
                <th>{{ $article->user_id }}</th>
                <th>{{ $article->category }}</th>
                <th colspan="3">{{ $article->title }}</th>
                <th>{{ $article->link_url }}</th>
                <th>{{ $article->link_text }}</th>
            </tr>
            <tr><th colspan="7">{{ $article->body }}</th></tr>
            <tr>
                <th>{{ $article->main_image }}</th>
                <th>{{ $article->sub_image_1 }}</th>
                <th>{{ $article->sub_image_2 }}</th>
                <th>{{ $article->sub_image_3 }}</th>
                <th>{{ $article->sub_image_4 }}</th>
                <td>{{ $article->created_at->format('Y/m/d/ H:i') }}</td>
                <td class="text-center"><a href="">削除</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <section class="mb-5">
        <a href="{{ url('/test/profile') }}" class="link-btn">
            <span>Test</span>
        </a>
    </section>

@endsection