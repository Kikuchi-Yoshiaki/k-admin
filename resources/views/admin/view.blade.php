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
    <table class="table table-bordered table-hover mt-5 col-10 offset-1">
        <thead class="bg-primary">
            <tr class="text-center">
                <th style="width: 5%">No.</th>
                <th style="width: 15%">User Name</th>
                <th style="width: 25%">Title</th>
                <th style="width: 35%">View image</th>
                <th style="width: 15%">Date</th>
                <th style="width: 5%">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($views as $view)
            <tr>
                <th scope="row" class="text-center">{{ $view->id }}</th>
                <td class="text-center">{{ $view->user->name }}</td>
                @if ( isset($view->title))
                <td class="text-center">{{ $view->title }}</td>
                @else
                <td class="text-center text-danger">No Title</td>
                @endif
                <td>{{ $view->view_image }}</td>
                <td class="text-center">{{ $view->created_at->format('Y/m/d H:i') }}</td>
                <td class="text-center">
                    <form action="{{ action('ViewController@delete', ['id' => $view->id]) }}" method="POST">
                        {{ csrf_field() }}
                        <input type="submit" value="削除">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    {{--ページネーション--}}
    <div class="d-flex justify-content-center mt-5">{{ $views->links() }}</div>

    <section class="mb-5">
        <a href="{{ url('/test/view') }}" class="link-btn">
            <span>Test</span>
        </a>
    </section>

@endsection