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
    <table class="table table-bordered table-hover mt-5 col-10 offset-1">
        <thead class="bg-primary">
            <tr class="text-center">
                <th style="width: 3%">No.</th>
                <th style="width: 10%">Name</th>
                <th style="width: 15%">Email</th>
                <th style="width: 12%">Title</th>
                <th style="width: 35%">Body</th>
                <th style="width: 15%">Date</th>
                <th style="width: 5%">More</th>
                <th style="width: 5%">Delete</th>
            </tr>
        </thead>
        <tbody>
            
                @foreach ($contacts as $contact)
                <tr>
                    <th scope="row" class="text-center">{{ $contact->id }}</th>
                    <td>{{ Str::limit($contact->name, 20) }}</td>
                    <td>{{ Str::limit($contact->email, 20) }}</td>
                    <td>{{ Str::limit($contact->title, 30) }}</td>
                    <td>{{ Str::limit($contact->body, 100) }}</td>
                    <td class="text-center">{{ $contact->created_at->format('Y/m/d H:i') }}</td>
                    <td class="text-center">
                         <a href="/inquiry/?id={{ $contact->id }}"><input type="submit" value=詳細></a>
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