@extends('admin/layout')

@section('title', 'ProfileTest')

@section('page', 'ProfileTest')

@section('content')

    <!-- 各種リンクボタン -->
        <section>
            <a href="{{ url('/master') }}" class="link-btn">
                <i class="fas fa-home"></i>
                <span>MasterAdmin</span>
            </a>
        </section>

    

        <section>
            <a href="{{ url('/contact') }}" class="link-btn">
                <i class="fas fa-users"></i>
                <span>Profile List</span>
            </a>
        </section>
    </div>


    <!-- データを作成 -->
    <form action="{{ action('UserController@create') }}" method="POST" name="profile-form" enctype="multipart/form-data">
        <table class="table table-bordered table-hover mt-5">
            @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endif

            <tr>
                <th>名前：</th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>メール：</th>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <th>パスワード：</th>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <th>プロフィール画像：</th>
                <td>
                    <input type="file" class="form-control-file" name="profile_image">
                    <input type="button" class="mt-1" onclick="this.form.elements['profile_image'].value=''" value="画像を取り消し">
                </td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="送信"></td>
                {{ csrf_field() }}
            </tr>
        </table>
    </form>
    
@endsection