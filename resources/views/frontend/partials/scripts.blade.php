<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
{{-- <script type="text/javascript" src="slick/slick.min.js"></script> --}}
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
{{-- <script src="{{ asset('frontend_assets/js/jquery-3.2.1.min.js') }}"></script> --}}
<script src="{{ asset('frontend_assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/mixitup.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/sly.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('frontend_assets/js/main.js') }}"></script>


<script type="text/javascript">
    $(document).ready(function(){
        $('.slider').slick({
            infinite: true,
            dots: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows:false,
            autoplay: true,
            autoplaySpeed: 3000,
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.slider2').slick({
            infinite: true,
            dots: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows:false,
            autoplay: true,
            autoplaySpeed: 3000,
        });
    });
</script>
