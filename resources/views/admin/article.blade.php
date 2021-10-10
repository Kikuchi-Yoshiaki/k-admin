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
    <table class="table table-bordered table-hover mt-5 col-12">
        <thead class="text-center bg-primary">
            <tr>
                <th rowspan="2" style="width: 3%">No.</th>
                <th style="width: 10%">User Name</th>
                <th style="width: 8%">Category</th>
                <th style="width: 15%">Title</th>
                <th style="width: 14%">Image_Text</th>
                <th style="width: 10%">Link URL</th>
                <th style="width: 10%">link Text</th>
                <th style="width: 3%">Main Img</th>
                <th style="width: 3%">Sub1</th>
                <th style="width: 3%">Sub2</th>
                <th style="width: 3%">Sub3</th>
                <th style="width: 3%">Sub4</th>
                <th style="width: 10%">Date</th>
                <th style="width: 5%">Delete</th>
            </tr>
            <tr>
                <th colspan="13">Body</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <td rowspan="2">{{ $article->id }}</th>
                <td>{{ $article->user_id }}</th>
                <td>{{ $article->category }}</th>
                <td>{{ $article->title }}</th>
                <td>{{ $article->image_text }}</th>
                <td>{{ $article->link_url }}</th>
                <td>{{ $article->link_text }}</th>
                @if (isset($article->main_image))
                <td class="text-center"><a href="{{ $article->main_image }}">Link</a></td>
                @endif
                @if (isset($article->sub_image_1))
                <td class="text-center">○</td>
                @else
                <td class="text-center text-danger">NULL</td>
                @endif
                @if (isset($article->sub_image_2))
                <td class="text-center">○</td>
                @else
                <td class="text-center text-danger">NULL</td>
                @endif
                @if (isset($article->sub_image_3))
                <td class="text-center">○</td>
                @else
                <td class="text-center text-danger">NULL</td>
                @endif
                @if (isset($article->sub_image_4))
                <td class="text-center">○</td>
                @else
                <td class="text-center text-danger">NULL</td>
                @endif
                <td>{{ $article->created_at->format('Y/m/d/ H:i') }}</td>
                <td class="text-center"><a href="">
                    <form action="{{ action('ArticleController@delete', ['id' => $article->id]) }}" method="POST">
                        {{ csrf_field() }}
                        <input type="submit" value="削除">
                    </form> 
                </td>
            </tr>
            <tr>
                <th colspan="13">{{ $article->body }}</th>
            </tr>
            @endforeach
        </tbody>
        
    </table>
    
    <section class="mb-5">
        <a href="{{ url('/test/article') }}" class="link-btn">
            <span>Test</span>
        </a>
    </section>

@endsection