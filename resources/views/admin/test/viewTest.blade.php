@extends('admin/layout')

@section('title', 'ViewTest')

@section('page', 'ViewTest')

@section('content')

    <!-- 各種リンクボタン -->
        <section>
            <a href="{{ url('/master') }}" class="link-btn">
                <i class="fas fa-home"></i>
                <span>MasterAdmin</span>
            </a>
        </section>

        <section>
            <a href="{{ url('/view') }}" class="link-btn">
                <i class="fas fa-camera"></i>
                <span>View List</span>
            </a>
        </section>
    </div>


    <!-- データを作成 -->
    <form action="{{ action('ViewController@create') }}" method="POST" name="view-form" enctype="multipart/form-data">
        <table class="table table-bordered table-hover mt-5">
            @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endif

            <tr>
                <th>user_id(仮)：</th>
                <td><input type="number" name="user_id"></td>
            </tr>
            <tr>
                <th>タイトル：</th>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <th>風景画像：</th>
                <td><input type="file" class="form-control-file" name="view_image"></td>
            </tr>
            
            <tr>
                <th></th>
                <td><input type="submit" value="送信"></td>
                {{ csrf_field() }}
            </tr>
        </table>
    </form>
    
@endsection