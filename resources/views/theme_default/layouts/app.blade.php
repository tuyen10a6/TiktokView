<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>KOC</title>
@stack('css')
<body>
<div class="root">
    @yield('content')
    <div class="footer">
        <div class="information-web">
            <p>© Copyright 2020 </p>
            <p> Website được cung cấp miễn phí tại Phở Việt Nam</p>
        </div>
    </div>
</div>
</body>
@stack('scripts')
</html>
