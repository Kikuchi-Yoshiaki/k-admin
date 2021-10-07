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
            <div class="form-control" id="contact-name">Kikuchi Yoshiaki</div>
        </div>

        <div class="form-group col-5">
            <label for="contact-mail">Mail</label>
            <div class="form-control" id="contact-mail">zzz@zzzzz.ne.jp</div>
        </div>

        <div class="form-group col-8 offset-1">
            <label for="contact-title">Title</label>
            <div class="form-control" id="contact-title">問い合わせタイトル</div>
        </div>

        <div class="form-group col-2">
            <label for="date">Date</label>
            <div class="form-control" id="date">2021.10.4(Mon)</div>
        </div>

        <div class="form-group col-10 offset-1">
            <label for="date">Body</label>
            <div class="form-control contact-body py-4" id="date">問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容問い合わせ内容</div>
        </div>

    </div>
@endsection