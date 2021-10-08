@extends('admin/layout')

@section('title', 'ArticleTest')

@section('page', 'ArticleTest')

@section('content')

    <!-- 各種リンクボタン -->
        <section>
            <a href="{{ url('/master') }}" class="link-btn">
                <i class="fas fa-home"></i>
                <span>MasterAdmin</span>
            </a>
        </section>

        <section>
            <a href="{{ url('/article') }}" class="link-btn">
                <i class="far fa-newspaper"></i>
                <span>Article List</span>
            </a>
        </section>
    </div>


    <!-- データを作成 -->
    <form action="{{ action('ArticleController@create') }}" method="POST" name="article-form" enctype="multipart/form-data">
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
                <th>本文：</th>
                <td><input type="text" name="body"></td>
            </tr>
            <tr>
                <th>メイン画像：</th>
                <td><input type="file" class="form-control-file" name="main_image"></td>
            </tr>
            <tr>
                <th>サブ画像１：</th>
                <td><input type="file" class="form-control-file" name="sub_image_1"></td>
            </tr>
            <tr>
                <th>サブ画像２：</th>
                <td><input type="file" class="form-control-file" name="sub_image_2"></td>
            </tr>
            <tr>
                <th>サブ画像３：</th>
                <td><input type="file" class="form-control-file" name="sub_image_3"></td>
            </tr>
            <tr>
                <th>サブ画像４：</th>
                <td><input type="file" class="form-control-file" name="sub_image_4"></td>
            </tr>
            <tr>
                <th>Link_URL：</th>
                <td><input type=url name="link_url"></td>
            </tr>
            <tr>
                <th>メッセージ：</th>
                <td><input type="text" name="link_text"></td>
            </tr>
            <tr>
                <th><label class="form-label mr-3 mt-2" id="article-category">カテゴリー</label></th>
                <td><select class="form-control col-5" name="category">
                    <option>気仙沼の遊ぶ</option>
                    <option>気仙沼の食べる</option>
                    <option>気仙沼の生活</option>
                </select></td>
            </div>
                </th>
            </tr>
            
            <tr>
                <th></th>
                <td><input type="submit" value="送信"></td>
                {{ csrf_field() }}
            </tr>
        </table>
    </form>
    
@endsection