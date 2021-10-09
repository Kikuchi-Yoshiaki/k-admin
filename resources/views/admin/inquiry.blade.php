@extends('admin/layout')

@section('title', 'Inquiry')

@section('page', 'Inquiry')

@section('content')

    <!-- 各種リンクボタン -->
    <div class="d-flex justify-content-between">
        <section>
            <a href="{{ url('/master') }}" class="link-btn">
                <i class="fas fa-home"></i>
                <span>MasterAdmin</span>
            </a>
        </section>

        <section>
            <a href="{{ url('/contact') }}" class="link-btn">
                <i class="far fa-envelope"></i>
                <span>Contact</span>
            </a>
        </section>
    </div>

    <!-- 受信欄 -->
    <div class="row mt-5">
        <div class="form-group col-5 offset-1">
            <label for="contact-name">Contact Name</label>
            <div class="form-control" id="contact-name">氏名</div>
        </div>

        <div class="form-group col-5">
            <label for="contact-mail">Mail</label>
            <div class="form-control" id="contact-mail">メール</div>
        </div>

        <div class="form-group col-8 offset-1">
            <label for="contact-title">Title</label>
            <div class="form-control" id="contact-title">タイトル</div>
        </div>

        <div class="form-group col-2">
            <label for="date">Date</label>
            <div class="form-control" id="date">{{format('Y年m月d日 H時i分') }}</div>
        </div>

        <div class="form-group col-10 offset-1">
            <label for="date">Body</label>
            <div class="form-control contact-body py-4" id="date">{{ $preview->body }}</div>
        </div>

    </div>
@endsection