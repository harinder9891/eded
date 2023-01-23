<!DOCTYPE html>
<html lang="en">
    <!--Head Links-->
    @include('frontend.layout.head-links')
    <body>
                <!-- Sidebar menu-->
                @include('frontend.layout.header-common')
                @yield('content')
                @include('frontend.layout.footer')
        <!--Foot Links-->
        @include('frontend.layout.foot-links')
    </body>
</html>
