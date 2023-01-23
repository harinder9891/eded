<!DOCTYPE html>
<html lang="en">
    <body class="app sidebar-mini">
        <!--Head Links-->
        @include('backend.layout.head-links')
        <div class="page">
            <div class="page-main h-100">
                <!-- Sidebar menu-->
                @include('backend.layout.side-nav') @yield('content') @include('backend.layout.footer')
            </div>
        </div>
        <!--Foot Links-->
        @include('backend.layout.foot-links')
    </body>
</html>
