<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" href="{{ mix('/css/assets_css.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('styles')
    <title>Let's Travel</title>
    <script type='text/javascript'> 
        const url   = '<?php echo url("/")?>';
        const token = document.getElementsByTagName("meta")["csrf-token"].getAttribute("content");
    </script>
  </head>

    <body class="style-2" data-color="theme-1">
    @include('layouts.header')
    <div class="full-height">
        <div class="clip"><div class="bg bg-bg-chrome" style="background-image:url(img/home_2/main_image.jpg)"></div></div>
        @include('layouts.search_bar')
    </div>
    {{-- @include('layouts.some_contents') --}}
    @include('layouts.footer')
    <script src="{{ mix('/js/assets_js.js') }}"></script>
    @yield('scripts')
    </body>
</html>	