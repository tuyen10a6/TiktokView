@extends('theme_default.layouts.app')

@section('title', 'Page Title')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/theme_default/css/home/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/theme_default/css/home/category.css') }}">
@endpush

@section('content')
    <div class="direction-all-content">
        <div class="title" onclick="history.back();">
            <img class="icon-close" src="{{ asset('assets/theme_default/images/icon-back.jpg') }}" alt="">
            <span>Quay lại</span>
        </div>
        <div class="line">
            <hr>
        </div>
        <div class="category-list">
            @foreach ($categories as $item)
                <div class="category-item">
                    <a href="{{route('category.products', ['code' => $code,'slug' => $item->slug ])}}">
                        <img class="cate-image" src="{{ $cdn_static_file . '/' . $item->file_id }}" alt="">
                        <div class="cate-name">
                            <span>{{$item->name}}</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection