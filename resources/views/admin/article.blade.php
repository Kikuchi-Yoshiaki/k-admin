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
    <table class="table table-bordered table-hover mt-5 col-12">
        <thead class="text-center bg-primary">
            <tr>
                <th rowspan="2" style="width: 3%">No.</th>
                <th style="width: 10%">User Name</th>
                <th style="width: 10%">Category</th>
                <th style="width: 15%">Title</th>
                <th style="width: 14%">Image_Text</th>
                <th style="width: 5%">Link URL</th>
                <th style="width: 13%">link Text</th>
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
                <td rowspan="2" class="text-center">{{ $article->id }}</th>
                <td class="text-center">{{ $article->user_id }}</th>
                <td class="text-center">{{ $article->category }}</th>
                <td>{{ Str::limit($article->title, 30) }}</th>
                @if (isset($article->image_text))
                <td>{{ Str::limit($article->image_text, 30) }}</th>
                @else
                <td class="text-center text-danger">NULL</td>
                @endif
                @if (isset($article->link_url))
                <td class="text-center"><a href="{{ $article->link_url }}" target='_blank'>Link</a></th>
                @else
                <td class="text-center text-danger">NULL</td>
                @endif
                @if (isset($article->link_text))
                <td>{{ Str::limit($article->link_text, 30) }}</th>
                @else
                <td class="text-center text-danger">NULL</td>
                @endif
                @if (isset($article->main_image))
                <td class="text-center"><a href="{{ $article->main_image }}">Image</a></td>
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
                <td class="text-center article-data">{{ $article->created_at->format('y/m/d/ H:i') }}</td>
                <td class="text-center"><a href="">
                    <form action="{{ action('ArticleController@delete', ['id' => $article->id]) }}" method="POST">
                        {{ csrf_field() }}
                        <input type="submit" value="削除">
                    </form> 
                </td>
            </tr>
            <tr>
                <th colspan="13">{{ Str::limit($article->body, 200) }}</th>
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