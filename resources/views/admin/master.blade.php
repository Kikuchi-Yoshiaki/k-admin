@extends('admin/layout')

@section('title', 'MasterAdmin')

@section('page', 'MasterAdmin')

@section('content')

        <section>
            <a href="{{ url('/profile') }}" class="link-btn">
                <i class="fas fa-users"></i>
                <span>Profile List</span>
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
    </div>

        <section>
            <a href="{{ url('/contact') }}" class="link-btn">
                <i class="far fa-envelope"></i>
                <span>Contact</span>
            </a>
        </section>

    <!-- データテーブル -->
    <table class="table table-bordered table-hover mt-5 col-10 offset-1">
        <thead class="bg-primary">
            <tr class="text-center">
                <th style="width: 10%">No.</th>
                <th style="width: 20%">Name</th>
                <th style="width: 30%">Email</th>
                <th style="width: 30%">Pasword</th>
                <th style="width: 10%">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
            <tr>
                <th scope="row" class="text-center">{{ $admin->id }}</th>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ $admin->password }}</td>
                <td class="text-center">
                    <form action="{{-- action('UserController@delete', ['id' => $admin->id]) --}}" method="POST">
                        {{ csrf_field() }}
                        <input type="submit" value="削除">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


@endsection
