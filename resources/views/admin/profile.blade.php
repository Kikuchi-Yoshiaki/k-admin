@extends('admin/layout')

@section('title', 'ProfileList')

@section('page', 'ProfileList')

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
    <table class="table table-bordered table-hover mt-5 col-10 offset-1">
        <thead class="bg-primary">
            <tr class="text-center">
                <th style="width: 5%">No.</th>
                <th style="width: 20%">Name</th>
                <th style="width: 25%">Email</th>
                <th style="width: 20%">Pasword</th>
                <th style="width: 10%">profile_image</th>
                <th style="width: 15%">Date</th>
                <th style="width: 5%">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row" class="text-center">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                @if (isset($user->profile_image))
                <td class="text-center">⚪︎</td>
                @else
                <td class="text-center text-danger">No Image</td>
                @endif
                </td>
                <td class="text-center">{{ $user->created_at->format('Y/m/d/ H:i') }}</td>
                <td class="text-center">
                    <form action="{{ action('UserController@delete', ['id' => $user->id]) }}" method="POST">
                        {{ csrf_field() }}
                        <input type="submit" value="削除">
                    </form>
                </td>
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