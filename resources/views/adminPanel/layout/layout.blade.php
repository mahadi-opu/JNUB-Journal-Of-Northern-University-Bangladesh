
<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">

<!-- Mirrored from www.nobleui.com/html/template/demo1/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jul 2023 07:05:42 GMT -->

@include('adminPanel.partials.head')

<body>
	<div class="main-wrapper">

            <!-- partial:partials/_sidebar.html -->
        @include('adminPanel.partials.sidebar')
            <!-- partial -->

            <div class="page-wrapper">

                <!-- partial:partials/_navbar.html -->
                @include('adminPanel.partials.header')
                <!-- partial -->

                @yield('main')

                <!-- partial:partials/_footer.html -->
                @include('adminPanel.partials.footer')
                <!-- partial -->

            </div>
    </div>
@include('adminPanel.partials.scripts')
</body>

<!-- Mirrored from www.nobleui.com/html/template/demo1/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jul 2023 07:06:12 GMT -->
</html>
