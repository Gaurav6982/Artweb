@php

    $highlithedCity=\App\Models\HighlightedCitiesForAdmin::all();

    $highlithedCat=\App\Models\HighlightedCategory::with(['categories'])->get()->first();
    if($highlithedCat==null)  $highlithedCat=\App\Models\CategoriesForAdmin::all()->take(7);
    //dd($highlithedCat);

@endphp


<section id="section-03" class="pb-8 our-directory">
    <div class="container">
        <div class="mb-7">
            <h2 class="mb-0">
                <span class="font-weight-semibold">Our </span>
                <span class="font-weight-light">Vendors</span>
            </h2>
        </div>
        <div class="d-flex align-items-center pb-8">
            <ul class="nav nav-pills tab-style-01" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">all</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" id="featured-tab" data-toggle="tab" href="#feature" role="tab" aria-controls="feature" aria-selected="false">featured</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="best-rate-tab" data-toggle="tab" href="#best-rate" role="tab" aria-controls="best-rate" aria-selected="false">best rate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="most-view-tab" data-toggle="tab" href="#most-view" role="tab" aria-controls="most-view" aria-selected="false">most view </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="popular-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="false">popular</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ad-directory" role="tab" aria-controls="ad-directory" aria-selected="false">Premium Vendor</a>
                </li>
            </ul>
            <div class="ml-auto d-flex slick-custom-nav pl-5">
                <div class="arrow slick-prev disabled" id="previous"><i class="fas fa-chevron-left"></i></div>
                <div class="arrow slick-next" id="next"><i class="fas fa-chevron-right"></i></div>
            </div>
        </div>
    </div>
    <div class="container container-1720">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all">
                <div class="slick-slider arrow-top full-slide custom-nav equal-height" data-slick-options='{"slidesToShow": 5,"autoplay":false,"dots":false,"arrows":false,"responsive":[{"breakpoint": 2000,"settings": {"slidesToShow": 4}},{"breakpoint": 1500,"settings": {"slidesToShow": 3}},{"breakpoint": 1000,"settings": {"slidesToShow": 2}},{"breakpoint": 770,"settings": {"slidesToShow": 1}}]}'>

                    <div class="box" data-animate="fadeInUp">
                        <div class="store card border-0 rounded-0">
                            <div class="position-relative store-image">
                                <a href="listing-details-full-gallery.html">
                                    <img src={{asset('images/vendor1.png')}} alt="store 1" class="card-img-top rounded-0">
                                </a>
                                <div class="image-content position-absolute d-flex align-items-center">
                                    <div class="content-left">
                                        <div class="badge badge-primary">Featured</div>
                                    </div>
                                    <div class="content-right ml-auto d-flex show-link">
                                        <a href="images/shop/full-shop-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                            <svg class="icon icon-expand">
                                                <use xlink:href="#icon-expand"></use>
                                            </svg>
                                        </a>
                                        <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-0 pt-3">
                                <a href="listing-details-full-gallery.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Test</span></a>
                                <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                    <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>4 rating</span>
                                    </li>
                                    <li class="list-inline-item separate"></li>
                                    <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">&#8377;9.00</span></li>
                                    <li class="list-inline-item separate"></li>
                                    <li class="list-inline-item"><a href="#" class="link-hover-secondary-primary">
                                            <svg class="icon icon-pizza">
                                                <use xlink:href="#icon-pizza"></use>
                                            </svg>
                                            <span>Food</span>
                                        </a></li>
                                </ul>
                                <div class="media">
                                    <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle">
                                    </a>
                                    <div class="media-body lh-14 font-size-sm">They specialize in makgeolli
                                        at this
                                        Korean-style
                                        pub in Seorae Village. And they use...
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                <li class="list-inline-item">
<span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt">
</i>
</span>
                                    <a href="#" class="text-secondary text-decoration-none address py-1">Ubud,
                                        Indonesia</a>
                                </li>
                                <li class="list-inline-item separate"></li>
                                <li class="list-inline-item">
                                    <span class="text-danger">Close now!</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="feature" role="tabpanel" aria-labelledby="feature">
                <div class="slick-slider arrow-top full-slide custom-nav equal-height" data-slick-options='{"slidesToShow": 5,"autoplay":false,"dots":false,"arrows":false,"responsive":[{"breakpoint": 2000,"settings": {"slidesToShow": 4}},{"breakpoint": 1500,"settings": {"slidesToShow": 3}},{"breakpoint": 1000,"settings": {"slidesToShow": 2}},{"breakpoint": 770,"settings": {"slidesToShow": 1}}]}'>
                    <div class="box" data-animate="fadeInUp">
                        <div class="store card border-0 rounded-0">
                            <div class="position-relative store-image">
                                <a href="listing-details-full-gallery.html">
                                    <img src="images/shop/shop-1.jpg" alt="store 1" class="card-img-top rounded-0">
                                </a>
                                <div class="image-content position-absolute d-flex align-items-center">
                                    <div class="content-left">
                                        <div class="badge badge-primary">Featured</div>
                                    </div>
                                    <div class="content-right ml-auto d-flex show-link">
                                        <a href="images/shop/full-shop-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                            <svg class="icon icon-expand">
                                                <use xlink:href="#icon-expand"></use>
                                            </svg>
                                        </a>
                                        <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-0 pt-3">
                                <a href="listing-details-full-gallery.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Roman
Kraft Hotel</span></a>
                                <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                    <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>4 rating</span>
                                    </li>
                                    <li class="list-inline-item separate"></li>
                                    <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">&#8377;9.00</span></li>
                                    <li class="list-inline-item separate"></li>
                                    <li class="list-inline-item"><a href="#" class="link-hover-secondary-primary">
                                            <svg class="icon icon-pizza">
                                                <use xlink:href="#icon-pizza"></use>
                                            </svg>
                                            <span>Food</span>
                                        </a></li>
                                </ul>
                                <div class="media">
                                    <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle">
                                    </a>
                                    <div class="media-body lh-14 font-size-sm">They specialize in makgeolli
                                        at this
                                        Korean-style
                                        pub in Seorae Village. And they use...
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                <li class="list-inline-item">
<span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt">
</i>
</span>
                                    <a href="#" class="text-secondary text-decoration-none address py-1">Ubud,
                                        Indonesia</a>
                                </li>
                                <li class="list-inline-item separate"></li>
                                <li class="list-inline-item">
                                    <span class="text-danger">Close now!</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="best-rate" role="tabpanel" aria-labelledby="best-rate">
                <div class="slick-slider arrow-top full-slide custom-nav" data-slick-options='{"slidesToShow": 5,"autoplay":false,"dots":false,"arrows":false,"responsive":[{"breakpoint": 2000,"settings": {"slidesToShow": 4}},{"breakpoint": 1500,"settings": {"slidesToShow": 3}},{"breakpoint": 1000,"settings": {"slidesToShow": 2}},{"breakpoint": 770,"settings": {"slidesToShow": 1}}]}'>
                    <div class="box" data-animate="fadeInUp">
                        <div class="store card border-0 rounded-0">
                            <div class="position-relative store-image">
                                <a href="listing-details-full-gallery.html">
                                    <img src="images/shop/shop-1.jpg" alt="store 1" class="card-img-top rounded-0">
                                </a>
                                <div class="image-content position-absolute d-flex align-items-center">
                                    <div class="content-left">
                                        <div class="badge badge-primary">Featured</div>
                                    </div>
                                    <div class="content-right ml-auto d-flex show-link">
                                        <a href="images/shop/full-shop-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                            <svg class="icon icon-expand">
                                                <use xlink:href="#icon-expand"></use>
                                            </svg>
                                        </a>
                                        <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-0 pt-3">
                                <a href="listing-details-full-gallery.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Roman
Kraft Hotel</span></a>
                                <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                    <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>4 rating</span>
                                    </li>
                                    <li class="list-inline-item separate"></li>
                                    <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">&#8377;9.00</span></li>
                                    <li class="list-inline-item separate"></li>
                                    <li class="list-inline-item"><a href="#" class="link-hover-secondary-primary">
                                            <svg class="icon icon-pizza">
                                                <use xlink:href="#icon-pizza"></use>
                                            </svg>
                                            <span>Food</span>
                                        </a></li>
                                </ul>
                                <div class="media">
                                    <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle">
                                    </a>
                                    <div class="media-body lh-14 font-size-sm">They specialize in makgeolli
                                        at this
                                        Korean-style
                                        pub in Seorae Village. And they use...
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                <li class="list-inline-item">
<span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt">
</i>
</span>
                                    <a href="#" class="text-secondary text-decoration-none address py-1">Ubud,
                                        Indonesia</a>
                                </li>
                                <li class="list-inline-item separate"></li>
                                <li class="list-inline-item">
                                    <span class="text-danger">Close now!</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="most-view" role="tabpanel" aria-labelledby="most-view">
                <div class="slick-slider arrow-top full-slide custom-nav" data-slick-options='{"slidesToShow": 5,"autoplay":false,"dots":false,"arrows":false,"responsive":[{"breakpoint": 2000,"settings": {"slidesToShow": 4}},{"breakpoint": 1500,"settings": {"slidesToShow": 3}},{"breakpoint": 1000,"settings": {"slidesToShow": 2}},{"breakpoint": 770,"settings": {"slidesToShow": 1}}]}'>
                    <div class="box" data-animate="fadeInUp">
                        <div class="store card border-0 rounded-0">
                            <div class="position-relative store-image">
                                <a href="listing-details-full-gallery.html">
                                    <img src="images/shop/shop-1.jpg" alt="store 1" class="card-img-top rounded-0">
                                </a>
                                <div class="image-content position-absolute d-flex align-items-center">
                                    <div class="content-left">
                                        <div class="badge badge-primary">Featured</div>
                                    </div>
                                    <div class="content-right ml-auto d-flex show-link">
                                        <a href="images/shop/full-shop-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                            <svg class="icon icon-expand">
                                                <use xlink:href="#icon-expand"></use>
                                            </svg>
                                        </a>
                                        <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-0 pt-3">
                                <a href="listing-details-full-gallery.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Roman
Kraft Hotel</span></a>
                                <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                    <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>4 rating</span>
                                    </li>
                                    <li class="list-inline-item separate"></li>
                                    <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">&#8377;9.00</span></li>
                                    <li class="list-inline-item separate"></li>
                                    <li class="list-inline-item"><a href="#" class="link-hover-secondary-primary">
                                            <svg class="icon icon-pizza">
                                                <use xlink:href="#icon-pizza"></use>
                                            </svg>
                                            <span>Food</span>
                                        </a></li>
                                </ul>
                                <div class="media">
                                    <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle">
                                    </a>
                                    <div class="media-body lh-14 font-size-sm">They specialize in makgeolli
                                        at this
                                        Korean-style
                                        pub in Seorae Village. And they use...
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                <li class="list-inline-item">
<span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt">
</i>
</span>
                                    <a href="#" class="text-secondary text-decoration-none address py-1">Ubud,
                                        Indonesia</a>
                                </li>
                                <li class="list-inline-item separate"></li>
                                <li class="list-inline-item">
                                    <span class="text-danger">Close now!</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="popular">
                <div class="slick-slider arrow-top full-slide custom-nav" data-slick-options='{"slidesToShow": 5,"autoplay":false,"dots":false,"arrows":false,"responsive":[{"breakpoint": 2000,"settings": {"slidesToShow": 4}},{"breakpoint": 1500,"settings": {"slidesToShow": 3}},{"breakpoint": 1000,"settings": {"slidesToShow": 2}},{"breakpoint": 770,"settings": {"slidesToShow": 1}}]}'>
                    <div class="box" data-animate="fadeInUp">
                        <div class="store card border-0 rounded-0">
                            <div class="position-relative store-image">
                                <a href="listing-details-full-gallery.html">
                                    <img src="images/shop/shop-1.jpg" alt="store 1" class="card-img-top rounded-0">
                                </a>
                                <div class="image-content position-absolute d-flex align-items-center">
                                    <div class="content-left">
                                        <div class="badge badge-primary">Featured</div>
                                    </div>
                                    <div class="content-right ml-auto d-flex show-link">
                                        <a href="images/shop/full-shop-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                            <svg class="icon icon-expand">
                                                <use xlink:href="#icon-expand"></use>
                                            </svg>
                                        </a>
                                        <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-0 pt-3">
                                <a href="listing-details-full-gallery.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Roman
Kraft Hotel</span></a>
                                <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                    <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>4 rating</span>
                                    </li>
                                    <li class="list-inline-item separate"></li>
                                    <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">&#8377;9.00</span></li>
                                    <li class="list-inline-item separate"></li>
                                    <li class="list-inline-item"><a href="#" class="link-hover-secondary-primary">
                                            <svg class="icon icon-pizza">
                                                <use xlink:href="#icon-pizza"></use>
                                            </svg>
                                            <span>Food</span>
                                        </a></li>
                                </ul>
                                <div class="media">
                                    <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle">
                                    </a>
                                    <div class="media-body lh-14 font-size-sm">They specialize in makgeolli
                                        at this
                                        Korean-style
                                        pub in Seorae Village. And they use...
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                <li class="list-inline-item">
<span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt">
</i>
</span>
                                    <a href="#" class="text-secondary text-decoration-none address py-1">Ubud,
                                        Indonesia</a>
                                </li>
                                <li class="list-inline-item separate"></li>
                                <li class="list-inline-item">
                                    <span class="text-danger">Close now!</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="ad-directory" role="tabpanel" aria-labelledby="ad-directory">
                <div class="slick-slider arrow-top full-slide custom-nav" data-slick-options='{"slidesToShow": 5,"autoplay":false,"dots":false,"arrows":false,"responsive":[{"breakpoint": 2000,"settings": {"slidesToShow": 4}},{"breakpoint": 1500,"settings": {"slidesToShow": 3}},{"breakpoint": 1000,"settings": {"slidesToShow": 2}},{"breakpoint": 770,"settings": {"slidesToShow": 1}}]}'>
                    <div class="box" data-animate="fadeInUp">
                        <div class="store card border-0 rounded-0">
                            <div class="position-relative store-image">
                                <a href="listing-details-full-gallery.html">
                                    <img src="images/shop/shop-1.jpg" alt="store 1" class="card-img-top rounded-0">
                                </a>
                                <div class="image-content position-absolute d-flex align-items-center">
                                    <div class="content-left">
                                        <div class="badge badge-primary">Featured</div>
                                    </div>
                                    <div class="content-right ml-auto d-flex show-link">
                                        <a href="images/shop/full-shop-1.jpg" class="item viewing" data-toggle="tooltip" data-placement="top" title="Quickview" data-gtf-mfp="true">
                                            <svg class="icon icon-expand">
                                                <use xlink:href="#icon-expand"></use>
                                            </svg>
                                        </a>
                                        <a href="#" class="item marking" data-toggle="tooltip" data-placement="top" title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-0 pt-3">
                                <a href="listing-details-full-gallery.html" class="card-title h5 text-dark d-inline-block mb-2"><span class="letter-spacing-25">Roman
Kraft Hotel</span></a>
                                <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                    <li class="list-inline-item"><span class="badge badge-success d-inline-block mr-1">5.0</span><span>4 rating</span>
                                    </li>
                                    <li class="list-inline-item separate"></li>
                                    <li class="list-inline-item"><span class="mr-1">From</span><span class="text-danger font-weight-semibold">&#8377;9.00</span></li>
                                    <li class="list-inline-item separate"></li>
                                    <li class="list-inline-item"><a href="#" class="link-hover-secondary-primary">
                                            <svg class="icon icon-pizza">
                                                <use xlink:href="#icon-pizza"></use>
                                            </svg>
                                            <span>Food</span>
                                        </a></li>
                                </ul>
                                <div class="media">
                                    <a href="#" class="d-inline-block mr-3"><img src="images/listing/testimonial-1.png" alt="testimonial" class="rounded-circle">
                                    </a>
                                    <div class="media-body lh-14 font-size-sm">They specialize in makgeolli
                                        at this
                                        Korean-style
                                        pub in Seorae Village. And they use...
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline card-footer rounded-0 border-top pt-3 mt-5 bg-transparent px-0 store-meta d-flex align-items-center">
                                <li class="list-inline-item">
<span class="d-inline-block mr-1"><i class="fal fa-map-marker-alt">
</i>
</span>
                                    <a href="#" class="text-secondary text-decoration-none address py-1">Ubud,
                                        Indonesia</a>
                                </li>
                                <li class="list-inline-item separate"></li>
                                <li class="list-inline-item">
                                    <span class="text-danger">Close now!</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
