@extends('admin/layout')

@section('title', 'AdminPost')

@section('page', 'AdminPost')

@section('content')

    

    <!-- データを作成 -->
    <form action="{{ action('AdminController@create') }}" method="POST" name="profile-form" enctype="multipart/form-data">
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
            <td><input type="submit" value="送信"></td>
                {{ csrf_field() }}
            </tr>
        </table>
    </form>
    
@endsection