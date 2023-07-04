
@extends('layouts.frontendapp')

@section('frontend_content')

	<!-- Hero section -->
	<section class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="hero-content text-center">
                <p> Speeding up scientific advancement to create a better future</p>
                <h2 class="pb-4"> Research today, innovation tomorrow</h2>
                <a class="btn btn-outline-light rounded-0 py-2" href=""> Discover More <span> <i class="fa-solid fa-arrow-right-long"></i> </span> </a>
            </div>
        </div>
	</section>
	<!-- Hero section end -->

    <!-- Counter section Start -->
    <section class="counter_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                   <div class="d-flex justify-content-center align-items-center">
                        <h3>  2,500 + </h3>
                        <h5> Journals </h5>
                   </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="d-flex justify-content-center align-items-center">
                        <h3>  700+ </h3>
                        <h5>  Authors </h5>
                   </div>
                 </div>
                 <div class="col-lg-4 col-md-4">
                    <div class="d-flex justify-content-center align-items-center">
                        <h3> 2,700+ </h3>
                        <h5> Articles </h5>
                   </div>
                 </div>
            </div>
        </div>
    </section>
    <!-- Counter section end -->

    <!-- Featured section Start -->
    <section class="featured-section">
        <div class="container">
            <div class="row">
                <!-- featured-item  -->
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="featured-item p-4 feature_border">
                        <div class="d-flex mb-3">
                            <span> <i class="fas fa-search"></i> </span>
                            <h3>  Find Articles  </h3>
                        </div>
                        <p class="text-dark"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable...</p>
                    </div>
                </div>
                <!-- featured-item  -->
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="featured-item p-4 feature_border">
                        <div class="d-flex mb-3">
                            <span> <i class="fa-regular fa-file-pdf"></i></span>
                            <h3>  Submit Paper </h3>
                        </div>
                        <p class="text-dark"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable...</p>
                    </div>
                </div>
                <!-- featured-item  -->
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="featured-item p-4">
                        <div class="d-flex mb-3">
                            <span> <i class="fa-solid fa-bullseye"></i></span>
                            <h3>  Monitor impact </h3>
                        </div>
                        <p class="text-dark"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured section end -->

	<!-- category section Start -->
	<section class="category-section">
		<div class="section-title"> <h2> Browse by Category </h2> </div>
        <div class="container">
            <div class="slider">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="category_item p-5">
                        <h3> Marketing </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="category_item p-5">
                        <h3> Marketing </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class=" category_item p-5">
                        <h3> Marketing </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class=" category_item p-5">
                        <h3> Marketing </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class=" category_item p-5">
                        <h3> Marketing </h3>
                    </div>
                </div>

            </div>

        </div>
	</section>
	<!-- category section End -->


	<!-- Populer Section -->
	<section class="populer-section">
        <div class="section-title"> <h2> Most Popular </h2> </div>
		<div class="container">
			<div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class=" populer_item">

                        <div class=" populer_item_subject  d-flex justify-content-between align-items-center mb-3">
                            <p class="p-3 text-white"> Investment Management </p>
                            <span> <i class="fa-regular fa-paste"></i> </span>
                        </div>

                        <div class="populer_title mb-5">
                            <h3> The impact of digital transformation on small and medium-sized enterprises (SMEs)</h3>
                        </div>

                        <div class="d-flex align-items-end justify-content-between mb-3">
                            <div>
                                <div class="review mb-2">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="author mb-2">
                                    <span> Author : <a href=""> Harry L. Hodge </a> </span>
                                </div>
                                <div class="publish_date mb-2">
                                    <p> Publish Date : 01 Feb 2020 </p>
                                </div>
                            </div>
                            <div class="align-items-end">
                                <a class="btn"> Read Now... </a>
                            </div>
                        </div>
                    </div>
				</div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class=" populer_item">

                        <div class=" populer_item_subject  d-flex justify-content-between align-items-center mb-3">
                            <p class="p-3 text-white"> Investment Management </p>
                            <span> <i class="fa-regular fa-paste"></i> </span>
                        </div>

                        <div class="populer_title mb-5">
                            <h3> The impact of digital transformation on small and medium-sized enterprises (SMEs)</h3>
                        </div>

                        <div class="d-flex align-items-end justify-content-between mb-3">
                            <div>
                                <div class="review mb-2">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="author mb-2">
                                    <span> Author : <a href=""> Harry L. Hodge </a> </span>
                                </div>
                                <div class="publish_date mb-2">
                                    <p> Publish Date : 01 Feb 2020 </p>
                                </div>
                            </div>
                            <div class="align-items-end">
                                <a class="btn"> Read Now... </a>
                            </div>
                        </div>
                    </div>
				</div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class=" populer_item">

                        <div class=" populer_item_subject  d-flex justify-content-between align-items-center mb-3">
                            <p class="p-3 text-white"> Investment Management </p>
                            <span> <i class="fa-regular fa-paste"></i> </span>
                        </div>

                        <div class="populer_title mb-5">
                            <h3> The impact of digital transformation on small and medium-sized enterprises (SMEs)</h3>
                        </div>

                        <div class="d-flex align-items-end justify-content-between mb-3">
                            <div>
                                <div class="review mb-2">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="author mb-2">
                                    <span> Author : <a href=""> Harry L. Hodge </a> </span>
                                </div>
                                <div class="publish_date mb-2">
                                    <p> Publish Date : 01 Feb 2020 </p>
                                </div>
                            </div>
                            <div class="align-items-end">
                                <a class="btn"> Read Now... </a>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->

	<!-- Populer Section -->
	<section class="populer-section">
        <div class="section-title"> <h2> Recent Publication </h2> </div>
		<div class="container">
			<div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class=" populer_item">
                        <div class=" populer_item_subject  d-flex justify-content-between align-items-center mb-3">
                            <p class="p-3 text-white"> Investment Management </p>
                            <span> <i class="fa-regular fa-paste"></i> </span>
                        </div>

                        <div class="populer_title mb-5">
                            <h3> The impact of digital transformation on small and medium-sized enterprises (SMEs)</h3>
                        </div>

                        <div class="d-flex align-items-end justify-content-between mb-3">
                            <div>
                                <div class="review mb-2">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="author mb-2">
                                    <span> Author : <a href=""> Harry L. Hodge </a> </span>
                                </div>
                                <div class="publish_date mb-2">
                                    <p> Publish Date : 01 Feb 2020 </p>
                                </div>
                            </div>
                            <div class="align-items-end">
                                <a class="btn"> Read Now... </a>
                            </div>
                        </div>
                    </div>
				</div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class=" populer_item">
                        <div class=" populer_item_subject  d-flex justify-content-between align-items-center mb-3">
                            <p class="p-3 text-white"> Investment Management </p>
                            <span> <i class="fa-regular fa-paste"></i> </span>
                        </div>

                        <div class="populer_title mb-5">
                            <h3> The impact of digital transformation on small and medium-sized enterprises (SMEs)</h3>
                        </div>

                        <div class="d-flex align-items-end justify-content-between mb-3">
                            <div>
                                <div class="review mb-2">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="author mb-2">
                                    <span> Author : <a href=""> Harry L. Hodge </a> </span>
                                </div>
                                <div class="publish_date mb-2">
                                    <p> Publish Date : 01 Feb 2020 </p>
                                </div>
                            </div>
                            <div class="align-items-end">
                                <a class="btn"> Read Now... </a>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->
@endsection
