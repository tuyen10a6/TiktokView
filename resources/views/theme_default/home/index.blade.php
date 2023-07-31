<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/theme_default/bootstrap/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/theme_default/slick/css/slick.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/theme_default/css/home/layout.css')}}">
    <link rel="stylesheet" href="{{asset('assets/theme_default/css/home/home.css')}}">
    <link rel="stylesheet" href="{{asset('assets/theme_default/css/home/list-products.css')}}">
<body>
<div class="root">
    <div class="slide">
        <div class="slide-item">
            <img src="{{asset('assets/theme_default/images/1512.png')}}" alt="">
        </div>
        <div class="slide-item">
            <img src="{{asset('assets/theme_default/images/1512.png')}}" alt="">
        </div>
    </div>
    <div class="bg-white pd15">
        <div class="information">
            <div class="profile-image">
                <img class="profile-image-link"
                     src={{ config("app.cdn_static_file") . '/'. $site->config->avatar}} alt="{{$site->name}}">
            </div>
            <div class="information-view">
                <div class="profile-name">{{$site->name}}</div>
                <div class="social-media float-left">
                    <div class="tiktok mr-10">
                        <a href="{{ $site->config->tiktok }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                 fill="none">
                                <path d="M10 0C4.47656 0 0 4.47656 0 10C0 15.5234 4.47656 20 10 20C15.5234 20 20 15.5234 20 10C20 4.47656 15.5234 0 10 0ZM15.0156 7.65234V9.00781C14.3789 9.00781 13.7578 8.88281 13.1719 8.63672C12.7969 8.47656 12.4453 8.27344 12.125 8.02734L12.1328 12.1953C12.1289 13.1328 11.7578 14.0156 11.0859 14.6797C10.5391 15.2188 9.84766 15.5625 9.09375 15.6758C8.91797 15.7031 8.73828 15.7148 8.55469 15.7148C7.75 15.7148 6.98828 15.4531 6.36328 14.9727C6.24609 14.8828 6.13281 14.7852 6.02734 14.6797C5.30078 13.9609 4.92188 12.9844 4.98828 11.957C5.03516 11.1758 5.34766 10.4297 5.87109 9.84766C6.5625 9.07422 7.52734 8.64453 8.55859 8.64453C8.73828 8.64453 8.91797 8.65625 9.09766 8.68359V9.18359V10.5781C8.92969 10.5234 8.75 10.4922 8.56641 10.4922C7.625 10.4922 6.85938 11.2617 6.875 12.2031C6.88281 12.8086 7.21484 13.3359 7.69922 13.625C7.92969 13.7617 8.19141 13.8477 8.47266 13.8633C8.69141 13.875 8.90234 13.8438 9.09766 13.7812C9.76953 13.5586 10.2578 12.9258 10.2578 12.1797L10.2617 9.39062V4.28906H12.125C12.125 4.47266 12.1445 4.65234 12.1797 4.82812C12.3203 5.53516 12.7188 6.14844 13.2734 6.56641C13.7578 6.92969 14.3594 7.14844 15.0117 7.14844H15.0156V7.65234Z"
                                      fill="black"/>
                                <path d="M15.4805 14.3086H14.4922V15.3516H15.4805V14.3086Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                    <div class="fb mr-10">
                        <a href="{{ $site->config->facebook }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                 fill="none">
                                <path d="M10 20C15.5228 20 20 15.5228 20 10C20 4.47715 15.5228 0 10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20Z"
                                      fill="#3B5998"/>
                                <path d="M12.5139 10.3909H10.7295V16.928H8.02602V10.3909H6.74023V8.09349H8.02602V6.60681C8.02602 5.54367 8.53103 3.87891 10.7536 3.87891L12.7561 3.88728V6.11731H11.3031C11.0648 6.11731 10.7297 6.23639 10.7297 6.74354V8.09563H12.7501L12.5139 10.3909Z"
                                      fill="white"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="chat float-right">
                        <span class="mr-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                                     fill="none">
                                <path d="M4.95866 11.0837H4.66699C2.33366 11.0837 1.16699 10.5003 1.16699 7.58366V4.66699C1.16699 2.33366 2.33366 1.16699 4.66699 1.16699H9.33366C11.667 1.16699 12.8337 2.33366 12.8337 4.66699V7.58366C12.8337 9.91699 11.667 11.0837 9.33366 11.0837H9.04199C8.86116 11.0837 8.68616 11.1712 8.57533 11.317L7.70033 12.4837C7.31533 12.997 6.68533 12.997 6.30033 12.4837L5.42533 11.317C5.33199 11.1887 5.11616 11.0837 4.95866 11.0837Z"
                                      stroke="white" stroke-miterlimit="10" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M9.33143 6.41667H9.33667" stroke="white" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.99745 6.41667H7.00269" stroke="white" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.66346 6.41667H4.6687" stroke="white" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            </span>
                    <span class="font-size-1">Chat</span>
                </div>
                <div class="clear-both"></div>
            </div>
        </div>
        <div class="slogan">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                    <path d="M0.963211 11.027C1.60535 11.6757 2.46154 12 3.42475 12C4.33445 12 5.13712 11.6757 5.77927 11.027C6.42141 10.3784 6.79599 9.51351 6.79599 8.54054C6.79599 7.72973 6.52843 7.02703 6.04682 6.48649C5.51171 5.94595 4.97659 5.56757 4.33445 5.45946L6.95652 1.40541L4.81605 0L1.44482 4.91892C0.909699 5.67568 0.535117 6.32433 0.32107 6.86487C0.107024 7.40541 0 8 0 8.54054C0 9.51351 0.32107 10.3784 0.963211 11.027ZM10.0067 11.027C10.6488 11.6757 11.505 12 12.4682 12C13.3779 12 14.1806 11.6757 14.8227 11.027C15.4649 10.3784 15.8395 9.51351 15.8395 8.54054C15.8395 7.72973 15.5719 7.02703 15.0903 6.48649C14.5552 5.94595 14.0201 5.56757 13.3779 5.45946L16 1.40541L13.8595 0L10.4883 4.91892C9.95318 5.67568 9.5786 6.32433 9.36455 6.86487C9.1505 7.40541 9.04348 8 9.04348 8.54054C9.04348 9.51351 9.36455 10.3784 10.0067 11.027Z"
                          fill="#98A2B3"/>
                </svg>
            </div>
            <div class="font-size-1">
                {{$site->description}}
            </div>
        </div>
        @if($topProducts->count())
            <div class="product-hot">
                <div class="product-all-hot product-layout-2 list-product">
                    @foreach ($topProducts as $topProduct)
                        <div class="item">
                            <a href="{{ route("product.detail", ["code" => $site->code, "slug" => $topProduct->product->slug ]) }}">
                                <div class="img-container">
                                    <img src="{{config("app.cdn_static_file")}}/{{ $topProduct->product->default_img }}"
                                         alt="{{ $topProduct->product->name }}">
                                </div>
                                <div class="name">
                                    {{ $topProduct->product->name }}
                                </div>
                                <div class="price">
                                    <span>{{number_format($topProduct->product->price, 0, ",", ".")}} đ</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        <div class="list-category">
            <h2 class="title-1">DANH SÁCH SẢN PHẨM</h2>
            <div class="list-categories">
                <div>
                    <button class="load-product-by-category nav-link nav-tab active" type="button">
                        Tất cả sản phẩm
                    </button>
                </div>
                @foreach ($categories as $key => $item)
                    <div>
                        <button
                                class="nav-link nav-tab load-product-by-category"
                                id="pills-{{ $item->id }}-tab"
                                data-bs-toggle="pill"
                                data-bs-target="#pills-{{ $item->id }}"
                                type="button"
                                role="tab"
                                aria-controls="pills-{{ $item->id }}"
                                aria-selected="false"
                        >
                            {{ $item->name }}
                        </button>
                    </div>
                @endforeach
                <div>
                    <a class="nav-link nav-tab" href="{{route("categories", ["code" => $site->code])}}">
                        Xem tất cả danh mục
                    </a>
                </div>
            </div>
            <div id="list-product" class="list-product product-layout-1"></div>
        </div>
    </div>
    <div class="footer">
        <div class="information-web">
            <p>Copyright © 2023</p>
            <p> Website được cung cấp miễn phí tại Phở Bò Việt Nam</p>
        </div>
    </div>
</div>
<script>
    var z512 = "http://z512.vn";
    var cdn_static_file = "{{ config("app.cdn_static_file") }}";
</script>
<script type="text/javascript" src="{{asset('assets/theme_default/js/jquery/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/theme_default/slick/js/slick.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/theme_default/js/home/home.js') }}"></script>
</body>
</html>


