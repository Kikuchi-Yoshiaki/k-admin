@extends('admin/layout')

@section('title', 'Contact')

@section('page', 'Contact')

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
            <a href="{{ url('/view') }}" class="link-btn">
                <i class="fas fa-camera"></i>
                <span>View List</span>
            </a>
        </section>
    </div>

    <!-- データテーブル -->
    <table class="table table-bordered table-hover mt-5">
        <thead>
            <tr class="text-center">
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Title</th>
                <th>Body</th>
                <th>Date</th>
                <th>More</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            
                @foreach ($contacts as $contact)
                <tr>
                    <th scope="row">{{ $contact->id }}</th>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->title }}</td>
                    <td>{{ $contact->body }}</td>
                    <td>{{ $contact->created_at->format('Y/m/d H:i') }}</td>
                    <td class="text-center">
                        <a href=""></a>
                    </td>
                    <td class="text-center">
                        <form action="{{ action('ContactController@delete', ['id' => $contact->id]) }}" method="POST">
                            {{ csrf_field() }}
                            <input type="submit" value="削除">
                        </form>
                    </td>
                </tr>    
                @endforeach

        </tbody>
    </table>

    <section class="mb-5">
        <a href="{{ url('/test/contact') }}" class="link-btn">
            <span>Test</span>
        </a>
    </section>

@endsection