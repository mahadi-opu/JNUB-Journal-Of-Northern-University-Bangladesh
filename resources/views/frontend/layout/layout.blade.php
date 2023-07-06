<!DOCTYPE html>
<html lang="zxx">

@include('frontend.partials.head')
<body>

@include("frontend.partials.header")
<!-- Header section End -->


@yield('frontend_content')


<!-- Footer  -->
@include('frontend.partials.footer')


<!--====== Javascripts & Jquery ======-->
@include('frontend.partials.scripts')

</body>
</html>

