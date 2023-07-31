@extends('theme_default.layouts.app')

@section('title', 'Page Title')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/theme_default/css/home/layout.css') }}">
    <link rel="stylesheet" href="{{asset('assets/theme_default/css/home/list-products.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/theme_default/css/home/product-by-category.css') }}">
@endpush

@section('content')
    <div class="direction-all-content">
        <div class="title" onclick="history.back();">
            <img class="icon-close" src="{{ asset('assets/theme_default/images/icon-back.jpg') }}" alt="">
            <span>Quay lại</span>
            <input id="category-id" type="hidden" value="{{$category->id}}">
        </div>
        <div class="line">
            <hr>
        </div>
        <div class="pd15">
            <div id="list-product" class="list-product product-layout-1"></div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var z512 = "http://z512.vn";

        var cdn_static_file = "{{ config("app.cdn_static_file") }}";
    </script>
    <script type="text/javascript" src="{{asset('assets/theme_default/js/jquery/jquery-1.11.1.min.js')}}"></script>
    <script src="{{ asset('assets/theme_default/js/home/product-by-cate.js') }}"></script>
@endpush