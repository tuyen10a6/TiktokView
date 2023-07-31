@extends('theme_default.layouts.app')

@section('title', 'Page Title')

@push('css')
    <link href="{{asset('assets/theme_default/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/theme_default/slick/css/slick.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/theme_default/slick/css/slick-theme.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/theme_default/css/home/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/theme_default/css/home/details.css') }}">
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
        <div class="product-detail-info">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#pills-home"
                            type="button" role="tab"
                            aria-controls="pills-home"
                            aria-selected="true">Mô tả
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#pills-profile"
                            type="button" role="tab"
                            aria-controls="pills-profile"
                            aria-selected="false">Video Tiktok
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link"
                            id="pills-contact-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#pills-contact"
                            type="button" role="tab"
                            aria-controls="pills-contact"
                            aria-selected="false">Mã QR
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="product-detail">
                        <div class="image-details">
                            @foreach ($productImages as $item)
                                <div class="image-details-item">
                                    <img data-lazy="{{ $cdn_static_file }}/{{ $item->file_id }}" alt="">
                                </div>
                            @endforeach
                        </div>
                        <div class="name">
                            {{$product->name}}
                        </div>
                        <div class="price">
                            <span>{{number_format($product->price)}} đ</span>
                        </div>
                        <div class="description">
                            {{$product->description}}
                        </div>
                    </div>
                    <div class="cart">
                        <a href="" class="cart-buy float-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20"
                                 fill="none">
                                <path d="M7.83366 15.8337H7.41699C4.08366 15.8337 2.41699 15.0003 2.41699 10.8337V6.66699C2.41699 3.33366 4.08366 1.66699 7.41699 1.66699H14.0837C17.417 1.66699 19.0837 3.33366 19.0837 6.66699V10.8337C19.0837 14.167 17.417 15.8337 14.0837 15.8337H13.667C13.4087 15.8337 13.1587 15.9587 13.0003 16.167L11.7503 17.8337C11.2003 18.567 10.3003 18.567 9.75033 17.8337L8.50033 16.167C8.36699 15.9837 8.05866 15.8337 7.83366 15.8337Z"
                                      stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M14.0801 9.16667H14.0875" stroke="#fff" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M10.7461 9.16667H10.7536" stroke="#fff" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M7.41209 9.16667H7.41957" stroke="#fff" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                            <span>Zalo Chat</span>
                        </a>
                        <a href="" class="cart-buy float-right">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20"
                                 fill="none">
                                <path d="M7.83366 15.8337H7.41699C4.08366 15.8337 2.41699 15.0003 2.41699 10.8337V6.66699C2.41699 3.33366 4.08366 1.66699 7.41699 1.66699H14.0837C17.417 1.66699 19.0837 3.33366 19.0837 6.66699V10.8337C19.0837 14.167 17.417 15.8337 14.0837 15.8337H13.667C13.4087 15.8337 13.1587 15.9587 13.0003 16.167L11.7503 17.8337C11.2003 18.567 10.3003 18.567 9.75033 17.8337L8.50033 16.167C8.36699 15.9837 8.05866 15.8337 7.83366 15.8337Z"
                                      stroke="#fff" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M14.0801 9.16667H14.0875" stroke="#fff" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M10.7461 9.16667H10.7536" stroke="#fff" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M7.41209 9.16667H7.41957" stroke="#fff" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                            <span>Message</span>
                        </a>
                        <div class="clear-both"></div>
                    </div>
                    <div class="policy-buying">
                        <h2>CHÍNH SÁCH BÁN HÀNG</h2>
                        <span>
                            Chính sách bán hàng
                        </span>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="video-tiktok-all">
                        <blockquote class="tiktok-embed"
                                    cite="https://www.tiktok.com/@scout2015/video/6718335390845095173"
                                    data-video-id="6718335390845095173"
                                    data-embed-from="oembed">
                            <section>
                                <a target="_blank" title="@scout2015"
                                   href="https://www.tiktok.com/@scout2015?refer=embed">@scout2015
                                </a>
                                <p>Scramble up ur name & I’ll try to guess it😍❤️
                                    <a title="foryoupage" target="_blank"
                                       href="https://www.tiktok.com/tag/foryoupage?refer=embed">#foryoupage
                                    </a>
                                    <a title="petsoftiktok" target="_blank"
                                       href="https://www.tiktok.com/tag/petsoftiktok?refer=embed">#petsoftiktok</a>
                                    <a
                                            title="aesthetic" target="_blank"
                                            href="https://www.tiktok.com/tag/aesthetic?refer=embed">#aesthetic
                                    </a>
                                </p>
                                <a target="_blank" title="♬ original sound - 𝐇𝐚𝐰𝐚𝐢𝐢𓆉"
                                   href="https://www.tiktok.com/music/original-sound-6689804660171082501?refer=embed">♬
                                    original sound - 𝐇𝐚𝐰𝐚𝐢𝐢𓆉</a>
                            </section>
                        </blockquote>
                        {{--<script async src="https://www.tiktok.com/embed.js"></script>--}}
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="image-qr">
                        <img src="{{ asset('assets/theme_default/images/qr.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript" src="{{asset('assets/theme_default/js/jquery/jquery-1.11.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/theme_default/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/theme_default/slick/js/slick.min.js')}}"></script>
    <script src="{{ asset('assets/theme_default/js/home/details.js') }}"></script>
@endpush