<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    <div class="spinner"><i class="ei-spinner-3 spinner-icon"></i></div>
    @include('sidebars.main_sidebar')
    @include('sidebars.widget_sidebar')
    <div id="page-wrapper" class="sidebar-fixed">
        @include('widgets.auth')
        <div style="clear: both"></div>
        {{--@include('widgets.subscribe_bar')--}}
        @include('partials.header')
        @include('menus.top_menu')
        @yield('main')
        @include('partials.footer')
    </div>
    @include('partials.popup_list')
    <i class="scroll-top ei-chevron-up btn small"></i>
    @include('partials.scripts')
</body>
</html>
