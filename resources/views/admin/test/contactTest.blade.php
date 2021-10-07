@extends('admin/layout')

@section('title', 'Contact test')

@section('page', 'Contact test')

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
                <i class="far fa-envelope"></i>
                <span>Contact List</span>
            </a>
        </section>
    </div>


    <!-- データを作成 -->
    <form action="{{ action('ContactController@create') }}" method="POST" name="contact-form">
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
                <th>タイトル：</th>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <th>本文：</th>
                <td><textarea type="text" name="body"></textarea>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="送信"></td>
                {{ csrf_field() }}
            </tr>
        </table>
    </form>
    
@endsection