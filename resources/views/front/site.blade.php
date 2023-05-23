@extends('layouts.front.site')

@section('content')

<div class="main">
 <!-- FEATURED PROPERTIES -->
 <section class="featured__property ">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 mx-auto">
                <div class="title__head">
                    <h2 class="text-center text-capitalize">
                        featured properties
                    </h2>
                    <p class="text-center text-capitalize">handpicked exclusive properties by our team.</p>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="featured__property-carousel owl-carousel owl-theme">
                    <div class="item">
                        <!-- ONE -->
                        <div class="card__image card__box">
                            <div class="card__image-header h-250">
                                <div class="ribbon text-capitalize">featured</div>
                                <img src="{{ asset('assets/front/images/gallery16.jpg') }}" alt="" class="img-fluid w100 img-transition">
                                <div class="info"> for sale</div>
                            </div>
                            <div class="card__image-body">
                                <span class="badge badge-primary text-capitalize mb-2">house</span>
                                <h6 class="text-capitalize">
                                    vila in coral gables
                                </h6>

                                <p class="text-capitalize">
                                    <i class="fa fa-map-marker"></i>
                                    west flaminggo road, las vegas
                                </p>
                                <ul class="list-inline card__content">
                                    <li class="list-inline-item">

                                        <span>
                                            baths <br>
                                            <i class="fa fa-bath"></i> 2
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            beds <br>
                                            <i class="fa fa-bed"></i> 3
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            rooms <br>
                                            <i class="fa fa-inbox"></i> 3
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            area <br>
                                            <i class="fa fa-map"></i> 4300 sq ft
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card__image-footer">
                                <figure>
                                    <img src="{{ asset('assets/front/images/profile-blog.jpg') }}" alt="" class="img-fluid rounded-circle">
                                </figure>
                                <ul class="list-inline my-auto">
                                    <li class="list-inline-item">
                                        <a href="#">
                                            tom wilson <br>
                                        </a>

                                    </li>

                                </ul>
                                <ul class="list-inline my-auto ml-auto">
                                    <li class="list-inline-item ">
                                        <h6>$350.000</h6>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- TWO -->
                        <div class="card__image card__box">
                            <div class="card__image-header h-250">
                                <div class="ribbon text-capitalize">featured</div>
                                <img src="{{ asset('assets/front/images/gallery17.jpg') }}" alt="" class="img-fluid w100 img-transition">
                                <div class="info"> for sale</div>
                            </div>
                            <div class="card__image-body">
                                <span class="badge badge-primary text-capitalize mb-2">house</span>
                                <h6 class="text-capitalize">
                                    Ample Apartment At Last Floor
                                </h6>

                                <p class="text-capitalize">
                                    <i class="fa fa-map-marker"></i>
                                    west flaminggo road, las vegas
                                </p>
                                <ul class="list-inline card__content">
                                    <li class="list-inline-item">

                                        <span>
                                            baths <br>
                                            <i class="fa fa-bath"></i> 2
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            beds <br>
                                            <i class="fa fa-bed"></i> 3
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            rooms <br>
                                            <i class="fa fa-inbox"></i> 3
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            area <br>
                                            <i class="fa fa-map"></i> 4300 sq ft
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card__image-footer">
                                <figure>
                                    <img src="{{ asset('assets/front/images/profile-blog.jpg') }}" alt="" class="img-fluid rounded-circle">
                                </figure>
                                <ul class="list-inline my-auto">
                                    <li class="list-inline-item">
                                        <a href="#">
                                            tom wilson <br>
                                        </a>

                                    </li>

                                </ul>
                                <ul class="list-inline my-auto ml-auto">
                                    <li class="list-inline-item">

                                        <h6>$350.000</h6>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- THREE -->
                        <div class="card__image card__box">
                            <div class="card__image-header h-250">
                                <div class="ribbon text-capitalize">featured</div>
                                <img src="{{ asset('assets/front/images/gallery18.jpg') }}" alt="" class="img-fluid w100 img-transition">
                                <div class="info"> for sale</div>
                            </div>
                            <div class="card__image-body">
                                <span class="badge badge-primary text-capitalize mb-2">house</span>
                                <h6 class="text-capitalize">
                                    Contemporary Apartment
                                </h6>

                                <p class="text-capitalize">
                                    <i class="fa fa-map-marker"></i>
                                    west flaminggo road, las vegas
                                </p>
                                <ul class="list-inline card__content">
                                    <li class="list-inline-item">

                                        <span>
                                            baths <br>
                                            <i class="fa fa-bath"></i> 2
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            beds <br>
                                            <i class="fa fa-bed"></i> 3
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            rooms <br>
                                            <i class="fa fa-inbox"></i> 3
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            area <br>
                                            <i class="fa fa-map"></i> 4300 sq ft
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card__image-footer">
                                <figure>
                                    <img src="{{ asset('assets/front/images/profile-blog.jpg') }}" alt="" class="img-fluid rounded-circle">
                                </figure>
                                <ul class="list-inline my-auto">
                                    <li class="list-inline-item">
                                        <a href="#">
                                            tom wilson <br>
                                        </a>

                                    </li>

                                </ul>
                                <ul class="list-inline my-auto ml-auto">
                                    <li class="list-inline-item">

                                        <h6>$350.000</h6>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- FOUR -->
                        <div class="card__image card__box">
                            <div class="card__image-header h-250">
                                <div class="ribbon text-capitalize">featured</div>
                                <img src="{{ asset('assets/front/images/gallery9.jpg') }}" alt="" class="img-fluid w100 img-transition">
                                <div class="info"> for sale</div>
                            </div>
                            <div class="card__image-body">
                                <span class="badge badge-primary text-capitalize mb-2">house</span>
                                <h6 class="text-capitalize">
                                    Family Home For Sale
                                </h6>

                                <p class="text-capitalize">
                                    <i class="fa fa-map-marker"></i>
                                    west flaminggo road, las vegas
                                </p>
                                <ul class="list-inline card__content">
                                    <li class="list-inline-item">

                                        <span>
                                            baths <br>
                                            <i class="fa fa-bath"></i> 2
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            beds <br>
                                            <i class="fa fa-bed"></i> 3
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            rooms <br>
                                            <i class="fa fa-inbox"></i> 3
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            area <br>
                                            <i class="fa fa-map"></i> 4300 sq ft
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card__image-footer">
                                <figure>
                                    <img src="{{ asset('assets/front/images/profile-blog.jpg') }}" alt="" class="img-fluid rounded-circle">
                                </figure>
                                <ul class="list-inline my-auto">
                                    <li class="list-inline-item">
                                        <a href="#">
                                            tom wilson <br>
                                        </a>

                                    </li>

                                </ul>
                                <ul class="list-inline my-auto ml-auto">
                                    <li class="list-inline-item">

                                        <h6>$350.000</h6>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- FIVE -->
                        <div class="card__image card__box">
                            <div class="card__image-header h-250">
                                <div class="ribbon text-capitalize">featured</div>
                                <img src="{{ asset('assets/front/images/gallery10.jpg') }}" alt="" class="img-fluid w100 img-transition">
                                <div class="info"> for sale</div>
                            </div>
                            <div class="card__image-body">
                                <span class="badge badge-primary text-capitalize mb-2">house</span>
                                <h6 class="text-capitalize">
                                    184 Lexington Avenue
                                </h6>

                                <p class="text-capitalize">
                                    <i class="fa fa-map-marker"></i>
                                    west flaminggo road, las vegas
                                </p>
                                <ul class="list-inline card__content">
                                    <li class="list-inline-item">

                                        <span>
                                            baths <br>
                                            <i class="fa fa-bath"></i> 2
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            beds <br>
                                            <i class="fa fa-bed"></i> 3
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            rooms <br>
                                            <i class="fa fa-inbox"></i> 3
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            area <br>
                                            <i class="fa fa-map"></i> 4300 sq ft
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card__image-footer">
                                <figure>
                                    <img src="{{ asset('assets/front/images/profile-blog.jpg') }}" alt="" class="img-fluid rounded-circle">
                                </figure>
                                <ul class="list-inline my-auto">
                                    <li class="list-inline-item">
                                        <a href="#">
                                            tom wilson <br>
                                        </a>

                                    </li>

                                </ul>
                                <ul class="list-inline my-auto ml-auto">
                                    <li class="list-inline-item">

                                        <h6>$350.000</h6>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- SIX -->
                        <div class="card__image card__box">
                            <div class="card__image-header h-250">
                                <div class="ribbon text-capitalize">featured</div>
                                <img src="{{ asset('assets/front/images/gallery14.jpg') }}" alt="" class="img-fluid w100 img-transition">
                                <div class="info"> for sale</div>
                            </div>
                            <div class="card__image-body">
                                <span class="badge badge-primary text-capitalize mb-2">house</span>
                                <h6 class="text-capitalize">
                                    Luxury Villa With Pool
                                </h6>

                                <p class="text-capitalize">
                                    <i class="fa fa-map-marker"></i>
                                    west flaminggo road, las vegas
                                </p>
                                <ul class="list-inline card__content">
                                    <li class="list-inline-item">

                                        <span>
                                            baths <br>
                                            <i class="fa fa-bath"></i> 2
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            beds <br>
                                            <i class="fa fa-bed"></i> 3
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            rooms <br>
                                            <i class="fa fa-inbox"></i> 3
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            area <br>
                                            <i class="fa fa-map"></i> 4300 sq ft
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card__image-footer">
                                <figure>
                                    <img src="{{ asset('assets/front/images/profile-blog.jpg') }}" alt="" class="img-fluid rounded-circle">
                                </figure>
                                <ul class="list-inline my-auto">
                                    <li class="list-inline-item">
                                        <a href="#">
                                            tom wilson <br>
                                        </a>

                                    </li>

                                </ul>
                                <ul class="list-inline my-auto ml-auto">
                                    <li class="list-inline-item">

                                        <h6>$350.000</h6>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card__image card__box">
                            <div class="card__image-header h-250">
                                <div class="ribbon text-capitalize">featured</div>
                                <img src="{{ asset('assets/front/images/gallery15.jpg') }}" alt="" class="img-fluid w100 img-transition">
                                <div class="info"> for sale</div>
                            </div>
                            <div class="card__image-body">
                                <span class="badge badge-primary text-capitalize mb-2">house</span>
                                <h6 class="text-capitalize">
                                    The Citizen Apartment 5th Floor
                                </h6>

                                <p class="text-capitalize">
                                    <i class="fa fa-map-marker"></i>
                                    west flaminggo road, las vegas
                                </p>
                                <ul class="list-inline card__content">
                                    <li class="list-inline-item">

                                        <span>
                                            baths <br>
                                            <i class="fa fa-bath"></i> 2
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            beds <br>
                                            <i class="fa fa-bed"></i> 3
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            rooms <br>
                                            <i class="fa fa-inbox"></i> 3
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            area <br>
                                            <i class="fa fa-map"></i> 4300 sq ft
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card__image-footer">
                                <figure>
                                    <img src="{{ asset('assets/front/images/profile-blog.jpg') }}" alt="" class="img-fluid rounded-circle">
                                </figure>
                                <ul class="list-inline my-auto">
                                    <li class="list-inline-item">
                                        <a href="#">
                                            tom wilson <br>
                                        </a>

                                    </li>

                                </ul>
                                <ul class="list-inline my-auto ml-auto">
                                    <li class="list-inline-item">

                                        <h6>$350.000</h6>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!-- SEVEN -->
                        <div class="card__image card__box">
                            <div class="card__image-header h-250">
                                <div class="ribbon text-capitalize">featured</div>
                                <img src="{{ asset('assets/front/images/gallery11.jpg') }}" alt="" class="img-fluid w100 img-transition">
                                <div class="info"> for sale</div>
                            </div>
                            <div class="card__image-body">
                                <span class="badge badge-primary text-capitalize mb-2">house</span>
                                <h6 class="text-capitalize">
                                    Family Home For Sale
                                </h6>

                                <p class="text-capitalize">
                                    <i class="fa fa-map-marker"></i>
                                    west flaminggo road, las vegas
                                </p>
                                <ul class="list-inline card__content">
                                    <li class="list-inline-item">

                                        <span>
                                            baths <br>
                                            <i class="fa fa-bath"></i> 2
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            beds <br>
                                            <i class="fa fa-bed"></i> 3
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            rooms <br>
                                            <i class="fa fa-inbox"></i> 3
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            area <br>
                                            <i class="fa fa-map"></i> 4300 sq ft
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card__image-footer">
                                <figure>
                                    <img src="{{ asset('assets/front/images/profile-blog.jpg') }}" alt="" class="img-fluid rounded-circle">
                                </figure>
                                <ul class="list-inline my-auto">
                                    <li class="list-inline-item">
                                        <a href="#">
                                            tom wilson
                                        </a>

                                    </li>

                                </ul>
                                <ul class="list-inline my-auto ml-auto">
                                    <li class="list-inline-item">

                                        <h6>$350.000</h6>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- END FEATURED PROPERTIES -->

<!-- RECENT PROPERTY -->
<section class="featured__property bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 mx-auto">
                <div class="title__head">
                    <h2 class="text-center text-capitalize">
                        Recent Property
                    </h2>
                    <p class="text-center text-capitalize">We provide full service at every step.</p>

                </div>
            </div>
        </div>
        <div class="featured__property-carousel owl-carousel owl-theme">
            <div class="item">
                <!-- ONE -->
                <div class="card__image card__box">
                    <div class="card__image-header h-250">
                        <div class="ribbon text-capitalize">featured</div>
                        <img src="{{ asset('assets/front/images/gallery17.jpg') }}" alt="" class="img-fluid w100 img-transition">
                        <div class="info"> for sale</div>
                    </div>
                    <div class="card__image-body">
                        <span class="badge badge-primary text-capitalize mb-2">house</span>
                        <h6 class="text-capitalize">
                            vila in coral gables
                        </h6>

                        <p class="text-capitalize">
                            <i class="fa fa-map-marker"></i>
                            west flaminggo road, las vegas
                        </p>
                        <ul class="list-inline card__content">
                            <li class="list-inline-item">

                                <span>
                                    baths <br>
                                    <i class="fa fa-bath"></i> 2
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    beds <br>
                                    <i class="fa fa-bed"></i> 3
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    rooms <br>
                                    <i class="fa fa-inbox"></i> 3
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    area <br>
                                    <i class="fa fa-map"></i> 4300 sq ft
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="card__image-footer">
                        <figure>
                            <img src="{{ asset('assets/front/images/profile-blog.jpg') }}" alt="" class="img-fluid rounded-circle">
                        </figure>
                        <ul class="list-inline my-auto">
                            <li class="list-inline-item">
                                <a href="#">
                                    tom wilson <br>
                                </a>

                            </li>

                        </ul>
                        <ul class="list-inline my-auto ml-auto">
                            <li class="list-inline-item">

                                <h6>$350.000</h6>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- TWO -->
                <div class="card__image card__box">
                    <div class="card__image-header h-250">
                        <div class="ribbon text-capitalize">featured</div>
                        <img src="{{ asset('assets/front/images/gallery16.jpg') }}" alt="" class="img-fluid w100 img-transition">
                        <div class="info"> for sale</div>
                    </div>
                    <div class="card__image-body">
                        <span class="badge badge-primary text-capitalize mb-2">house</span>
                        <h6 class="text-capitalize">
                            Ample Apartment At Last Floor
                        </h6>

                        <p class="text-capitalize">
                            <i class="fa fa-map-marker"></i>
                            west flaminggo road, las vegas
                        </p>
                        <ul class="list-inline card__content">
                            <li class="list-inline-item">

                                <span>
                                    baths <br>
                                    <i class="fa fa-bath"></i> 2
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    beds <br>
                                    <i class="fa fa-bed"></i> 3
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    rooms <br>
                                    <i class="fa fa-inbox"></i> 3
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    area <br>
                                    <i class="fa fa-map"></i> 4300 sq ft
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="card__image-footer">
                        <figure>
                            <img src="{{ asset('assets/front/images/profile-blog.jpg') }}" alt="" class="img-fluid rounded-circle">
                        </figure>
                        <ul class="list-inline my-auto">
                            <li class="list-inline-item">
                                <a href="#">
                                    tom wilson <br>
                                </a>

                            </li>

                        </ul>
                        <ul class="list-inline my-auto ml-auto">
                            <li class="list-inline-item">

                                <h6>$350.000</h6>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- THREE -->
                <div class="card__image card__box">
                    <div class="card__image-header h-250">
                        <div class="ribbon text-capitalize">featured</div>
                        <img src="{{ asset('assets/front/images/gallery12.jpg') }}" alt="" class="img-fluid w100 img-transition">
                        <div class="info"> for sale</div>
                    </div>
                    <div class="card__image-body">
                        <span class="badge badge-primary text-capitalize mb-2">house</span>
                        <h6 class="text-capitalize">
                            Contemporary Apartment
                        </h6>

                        <p class="text-capitalize">
                            <i class="fa fa-map-marker"></i>
                            west flaminggo road, las vegas
                        </p>
                        <ul class="list-inline card__content">
                            <li class="list-inline-item">

                                <span>
                                    baths <br>
                                    <i class="fa fa-bath"></i> 2
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    beds <br>
                                    <i class="fa fa-bed"></i> 3
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    rooms <br>
                                    <i class="fa fa-inbox"></i> 3
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    area <br>
                                    <i class="fa fa-map"></i> 4300 sq ft
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="card__image-footer">
                        <figure>
                            <img src="{{ asset('assets/front/images/profile-blog.jpg') }}" alt="" class="img-fluid rounded-circle">
                        </figure>
                        <ul class="list-inline my-auto">
                            <li class="list-inline-item">
                                <a href="#">
                                    tom wilson <br>
                                </a>

                            </li>

                        </ul>
                        <ul class="list-inline my-auto ml-auto">
                            <li class="list-inline-item">

                                <h6>$350.000</h6>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- FOUR -->
                <div class="card__image card__box">
                    <div class="card__image-header h-250">
                        <div class="ribbon text-capitalize">featured</div>
                        <img src="{{ asset('assets/front/images/gallery13.jpg') }}" alt="" class="img-fluid w100 img-transition">
                        <div class="info"> for sale</div>
                    </div>
                    <div class="card__image-body">
                        <span class="badge badge-primary text-capitalize mb-2">house</span>
                        <h6 class="text-capitalize">
                            Family Home For Sale
                        </h6>

                        <p class="text-capitalize">
                            <i class="fa fa-map-marker"></i>
                            west flaminggo road, las vegas
                        </p>
                        <ul class="list-inline card__content">
                            <li class="list-inline-item">

                                <span>
                                    baths <br>
                                    <i class="fa fa-bath"></i> 2
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    beds <br>
                                    <i class="fa fa-bed"></i> 3
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    rooms <br>
                                    <i class="fa fa-inbox"></i> 3
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    area <br>
                                    <i class="fa fa-map"></i> 4300 sq ft
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="card__image-footer">
                        <figure>
                            <img src="{{ asset('assets/front/images/profile-blog.jpg') }}" alt="" class="img-fluid rounded-circle">
                        </figure>
                        <ul class="list-inline my-auto">
                            <li class="list-inline-item">
                                <a href="#">
                                    tom wilson <br>
                                </a>

                            </li>

                        </ul>
                        <ul class="list-inline my-auto ml-auto">
                            <li class="list-inline-item">

                                <h6>$350.000</h6>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- FIVE -->
                <div class="card__image card__box">
                    <div class="card__image-header h-250">
                        <div class="ribbon text-capitalize">featured</div>
                        <img src="{{ asset('assets/front/images/gallery3.jpg') }}" alt="" class="img-fluid w100 img-transition">
                        <div class="info"> for sale</div>
                    </div>
                    <div class="card__image-body">
                        <span class="badge badge-primary text-capitalize mb-2">house</span>
                        <h6 class="text-capitalize">
                            184 Lexington Avenue
                        </h6>

                        <p class="text-capitalize">
                            <i class="fa fa-map-marker"></i>
                            west flaminggo road, las vegas
                        </p>
                        <ul class="list-inline card__content">
                            <li class="list-inline-item">

                                <span>
                                    baths <br>
                                    <i class="fa fa-bath"></i> 2
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    beds <br>
                                    <i class="fa fa-bed"></i> 3
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    rooms <br>
                                    <i class="fa fa-inbox"></i> 3
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    area <br>
                                    <i class="fa fa-map"></i> 4300 sq ft
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="card__image-footer">
                        <figure>
                            <img src="{{ asset('assets/front/images/profile-blog.jpg') }}" alt="" class="img-fluid rounded-circle">
                        </figure>
                        <ul class="list-inline my-auto">
                            <li class="list-inline-item">
                                <a href="#">
                                    tom wilson <br>
                                </a>

                            </li>

                        </ul>
                        <ul class="list-inline my-auto ml-auto">
                            <li class="list-inline-item">

                                <h6>$350.000</h6>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- SIX -->
                <div class="card__image card__box">
                    <div class="card__image-header h-250">
                        <div class="ribbon text-capitalize">featured</div>
                        <img src="{{ asset('assets/front/images/gallery4.jpg') }}" alt="" class="img-fluid w100 img-transition">
                        <div class="info"> for sale</div>
                    </div>
                    <div class="card__image-body">
                        <span class="badge badge-primary text-capitalize mb-2">house</span>
                        <h6 class="text-capitalize">
                            Luxury Villa With Pool
                        </h6>

                        <p class="text-capitalize">
                            <i class="fa fa-map-marker"></i>
                            west flaminggo road, las vegas
                        </p>
                        <ul class="list-inline card__content">
                            <li class="list-inline-item">

                                <span>
                                    baths <br>
                                    <i class="fa fa-bath"></i> 2
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    beds <br>
                                    <i class="fa fa-bed"></i> 3
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    rooms <br>
                                    <i class="fa fa-inbox"></i> 3
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    area <br>
                                    <i class="fa fa-map"></i> 4300 sq ft
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="card__image-footer">
                        <figure>
                            <img src="{{ asset('assets/front/images/profile-blog.jpg') }}" alt="" class="img-fluid rounded-circle">
                        </figure>
                        <ul class="list-inline my-auto">
                            <li class="list-inline-item">
                                <a href="#">
                                    tom wilson <br>
                                </a>

                            </li>

                        </ul>
                        <ul class="list-inline my-auto ml-auto">
                            <li class="list-inline-item">

                                <h6>$350.000</h6>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card__image card__box">
                    <div class="card__image-header h-250">
                        <div class="ribbon text-capitalize">featured</div>
                        <img src="{{ asset('assets/front/images/gallery5.jpg') }}" alt="" class="img-fluid w100 img-transition">
                        <div class="info"> for sale</div>
                    </div>
                    <div class="card__image-body">
                        <span class="badge badge-primary text-capitalize mb-2">house</span>
                        <h6 class="text-capitalize">
                            The Citizen Apartment 5th Floor
                        </h6>

                        <p class="text-capitalize">
                            <i class="fa fa-map-marker"></i>
                            west flaminggo road, las vegas
                        </p>
                        <ul class="list-inline card__content">
                            <li class="list-inline-item">

                                <span>
                                    baths <br>
                                    <i class="fa fa-bath"></i> 2
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    beds <br>
                                    <i class="fa fa-bed"></i> 3
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    rooms <br>
                                    <i class="fa fa-inbox"></i> 3
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    area <br>
                                    <i class="fa fa-map"></i> 4300 sq ft
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="card__image-footer">
                        <figure>
                            <img src="{{ asset('assets/front/images/profile-blog.jpg') }}" alt="" class="img-fluid rounded-circle">
                        </figure>
                        <ul class="list-inline my-auto">
                            <li class="list-inline-item">
                                <a href="#">
                                    tom wilson <br>
                                </a>

                            </li>

                        </ul>
                        <ul class="list-inline my-auto ml-auto">
                            <li class="list-inline-item">

                                <h6>$350.000</h6>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- SEVEN -->
                <div class="card__image card__box">
                    <div class="card__image-header h-250">
                        <div class="ribbon text-capitalize">featured</div>
                        <img src="{{ asset('assets/front/images/gallery6.jpg') }}" alt="" class="img-fluid w100 img-transition">
                        <div class="info"> for sale</div>
                    </div>
                    <div class="card__image-body">
                        <span class="badge badge-primary text-capitalize mb-2">house</span>
                        <h6 class="text-capitalize">
                            Family Home For Sale
                        </h6>

                        <p class="text-capitalize">
                            <i class="fa fa-map-marker"></i>
                            west flaminggo road, las vegas
                        </p>
                        <ul class="list-inline card__content">
                            <li class="list-inline-item">

                                <span>
                                    baths <br>
                                    <i class="fa fa-bath"></i> 2
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    beds <br>
                                    <i class="fa fa-bed"></i> 3
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    rooms <br>
                                    <i class="fa fa-inbox"></i> 3
                                </span>
                            </li>
                            <li class="list-inline-item">
                                <span>
                                    area <br>
                                    <i class="fa fa-map"></i> 4300 sq ft
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="card__image-footer">
                        <figure>
                            <img src="{{ asset('assets/front/images/profile-blog.jpg') }}" alt="" class="img-fluid rounded-circle">
                        </figure>
                        <ul class="list-inline my-auto">
                            <li class="list-inline-item">
                                <a href="#">
                                    tom wilson
                                </a>

                            </li>

                        </ul>
                        <ul class="list-inline my-auto ml-auto">
                            <li class="list-inline-item">

                                <h6>$350.000</h6>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END RECENT PROPERTY -->




<!-- MOST POPULAR PLACES -->
<section class="wrap__heading ">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 mx-auto">
                <div class="title__head">
                    <h2 class="text-center text-capitalize">
                        most popular places
                    </h2>
                    <p class="text-center text-capitalize">find properties in these cities.</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-xl-5 col-padd">
                <!-- CARD IMAGE -->

                <a href="#">
                    <div class="card__image-hover-style-v3">
                        <div class="card__image-hover-style-v3-thumb h-475">
                            <img src="{{ asset('assets/front/images/city3.jpg') }}" alt="" class="img-fluid w-100">
                        </div>
                        <div class="overlay">
                            <div class="desc">
                                <h6 class="text-capitalize">tokyo</h6>
                                <p class="text-capitalize">70 properties</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-7 col-xl-7">
                <div class="row">
                    <div class="col-md-6 col-padd">
                        <!-- CARD IMAGE -->
                        <a href="#">
                            <div class="card__image-hover-style-v3">
                                <div class="card__image-hover-style-v3-thumb h-230">
                                    <img src="{{ asset('assets/front/images/city4.jpg') }}" alt="" class="img-fluid w-100">
                                </div>
                                <div class="overlay">
                                    <div class="desc">
                                        <h6 class="text-capitalize">australia</h6>
                                        <p class="text-capitalize">70 properties</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-padd">
                        <!-- CARD IMAGE -->
                        <a href="#">
                            <div class="card__image-hover-style-v3">
                                <div class="card__image-hover-style-v3-thumb h-230">
                                    <img src="{{ asset('assets/front/images/city5.jpg') }}" alt="" class="img-fluid w-100">
                                </div>
                                <div class="overlay">
                                    <div class="desc">
                                        <h6 class="text-capitalize">rome</h6>
                                        <p class="text-capitalize">70 properties</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-padd">
                        <!-- CARD IMAGE -->
                        <a href="#">
                            <div class="card__image-hover-style-v3">
                                <div class="card__image-hover-style-v3-thumb h-230">
                                    <img src="{{ asset('assets/front/images/city6.jpg') }}" alt="" class="img-fluid w-100">
                                </div>
                                <div class="overlay">
                                    <div class="desc">
                                        <h6 class="text-capitalize">new york</h6>
                                        <p class="text-capitalize">70 properties</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-padd">
                        <!-- CARD IMAGE -->
                        <a href="#">
                            <div class="card__image-hover-style-v3">
                                <div class="card__image-hover-style-v3-thumb h-230">
                                    <img src="{{ asset('assets/front/images/city7.jpg') }}" alt="" class="img-fluid w-100">
                                </div>
                                <div class="overlay">
                                    <div class="desc">
                                        <h6 class="text-capitalize">london</h6>
                                        <p class="text-capitalize">70 properties</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END MOST POPULAR PLACES -->




<!-- ABOUT -->
<section class="home__about bg-theme-v4">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="title__leading">
                    <!-- <h6 class="text-uppercase">trusted By thousands</h6> -->
                    <h2 class="text-capitalize"> why choose use?</h2>
                    <p>
                        The first step in selling your property is to get a valuation from local experts. They will
                        inspect your home and take into account its unique features, the area and market conditions
                        before providing you with the most accurate valuation.
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod libero amet, laborum qui nulla
                        quae alias tempora. Placeat voluptatem eum numquam quas distinctio obcaecati quaerat,
                        repudiandae qui! Quia, omnis, doloribus! Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Quod libero amet, laborum qui nullas tempora.</p>

                    <a href="#" class="btn btn-primary mt-3 text-capitalize"> read more
                        <i class="fa fa-angle-right ml-3 "></i></a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- OUR PARTNERS -->
<section class="projects__partner bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="title__head">
                    <h2 class="text-center text-capitalize">our partners</h2>
                    <p class="text-center text-capitalize">brand partners successful projects trusted many clients
                        real estate </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="projects__partner-logo">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <img src="{{ asset('assets/front/images/partner-logo6.png') }}" alt="" class="img-fluid">
                        </li>
                        <li class="list-inline-item">
                            <img src="{{ asset('assets/front/images/partner-logo7.png') }}" alt="" class="img-fluid">
                        </li>
                        <li class="list-inline-item">
                            <img src="{{ asset('assets/front/images/partner-logo8.png') }}" alt="" class="img-fluid">
                        </li>
                        <li class="list-inline-item">
                            <img src="{{ asset('assets/front/images/partner-logo1.png') }}" alt="" class="img-fluid">
                        </li>
                        <li class="list-inline-item">
                            <img src="{{ asset('assets/front/images/partner-logo5.png') }}" alt="" class="img-fluid">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END OUR PARTNERS -->

<!-- TESTIMONIAL -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 mx-auto">
                <div class="title__head">
                    <h2 class="text-center text-capitalize">
                        what people says
                    </h2>
                    <p class="text-center text-capitalize">people says about walls property.</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="testimonial owl-carousel owl-theme">
            <!-- TESTIMONIAL -->
            <div class="item testimonial__block">
                <div class="testimonial__block-card bg-reviews">
                    <p>
                        Thank you walls property help me, choice dream home We were impressed with the build
                        quality, Plus they are competitively priced.
                    </p>
                </div>
                <div class="testimonial__block-users">
                    <div class="testimonial__block-users-img">
                        <img src="{{ asset('assets/front/images/profile-blog.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="testimonial__block-users-name">
                        jhon doe <br>
                        <span>owner, digital agency</span>
                    </div>
                </div>
            </div>
            <!-- END TESTIMONIAL -->
            <!-- TESTIMONIAL -->
            <div class="item testimonial__block">
                <div class="testimonial__block-card bg-reviews">
                    <p>
                        Thank you walls property help me, choice dream home We were impressed with the build
                        quality, Plus they are competitively priced.
                    </p>
                </div>
                <div class="testimonial__block-users">
                    <div class="testimonial__block-users-img">
                        <img src="{{ asset('assets/front/images/client.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="testimonial__block-users-name">
                        jhon doe <br>
                        <span>owner, digital agency</span>
                    </div>
                </div>
            </div>
            <!-- END TESTIMONIAL -->
            <!-- TESTIMONIAL -->
            <div class="item testimonial__block">
                <div class="testimonial__block-card bg-reviews">
                    <p>
                        Thank you walls property help me, choice dream home We were impressed with the build
                        quality, Plus they are competitively priced.
                    </p>
                </div>
                <div class="testimonial__block-users">
                    <div class="testimonial__block-users-img">
                        <img src="{{ asset('assets/front/images/profile-blog.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="testimonial__block-users-name">
                        jhon doe <br>
                        <span>owner, digital agency</span>
                    </div>
                </div>
            </div>
            <!-- END TESTIMONIAL -->
            <!-- TESTIMONIAL -->
            <div class="item testimonial__block">
                <div class="testimonial__block-card bg-reviews">
                    <p>
                        Thank you walls property help me, choice dream home We were impressed with the build
                        quality, Plus they are competitively priced.
                    </p>
                </div>
                <div class="testimonial__block-users">
                    <div class="testimonial__block-users-img">
                        <img src="{{ asset('assets/front/images/client.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="testimonial__block-users-name">
                        jhon doe <br>
                        <span>owner, digital agency</span>
                    </div>
                </div>
            </div>
            <!-- END TESTIMONIAL -->
            <!-- TESTIMONIAL -->
            <div class="item testimonial__block">
                <div class="testimonial__block-card bg-reviews">
                    <p>
                        Thank you walls property help me, choice dream home We were impressed with the build
                        quality, Plus they are competitively priced.
                    </p>
                </div>
                <div class="testimonial__block-users">
                    <div class="testimonial__block-users-img">
                        <img src="{{ asset('assets/front/images/profile-blog.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="testimonial__block-users-name">
                        jhon doe <br>
                        <span>owner, digital agency</span>
                    </div>
                </div>
            </div>
            <!-- END TESTIMONIAL -->

        </div>
    </div>
</section>
<!-- END TESTIMONIAL -->

<!-- CALL TO ACTION -->
<section class="bg-theme-v1">
    <div class="cta">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-12 text-center">
                    <h2 class="text-uppercase text-white">signup & build your dream house</h2>
                    <p class="text-capitalize text-white">We'll help you to grow your career and growth, please
                        contact
                        team
                        walls real estate and get this offer promo</p>
                    <a href="#" class="btn btn-primary text-uppercase ">request a quote
                        <i class="fa fa-angle-right ml-3 arrow-btn "></i></a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- BLOG -->
<section class="blog__home">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 mx-auto">
                <div class="title__head">
                    <h2 class="text-center text-capitalize">
                        lastest news
                    </h2>
                    <p class="text-center text-capitalize">find of the most popular real estate company all around
                        indonesia. </p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <!-- BLOG  -->
                <div class="card__image">
                    <div class="card__image-header h-250">
                        <img src="{{ asset('assets/front/images/gallery17.jpg') }}" alt="" class="img-fluid w100 img-transition">
                        <div class="info"> event</div>
                    </div>
                    <div class="card__image-body">
                        <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">May 08, 2019 </span> -->
                        <h6 class="text-capitalize">
                            <a href="blog-single.html">Best Interior Oppertunity </a>
                        </h6>
                        <p class=" mb-0">
                            Real estate festival is one of the famous feval for explain to you how all this mistaolt
                            deand praising pain
                            wasnad I will give complete

                        </p>


                    </div>
                    <div class="card__image-footer">
                        <figure>
                            <img src="{{ asset('assets/front/images/profile-blog.jpg') }}" alt="" class="img-fluid rounded-circle">
                        </figure>
                        <ul class="list-inline my-auto">
                            <li class="list-inline-item ">
                                <a href="#">
                                    tom wilson
                                </a>

                            </li>

                        </ul>
                        <ul class="list-inline my-auto ml-auto">
                            <li class="list-inline-item ">
                                <a href="blog-single.html" class="btn btn-sm btn-primary "><small
                                        class="text-white ">read more <i
                                            class="fa fa-angle-right ml-1"></i></small></a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- END BLOG -->
            </div>
            <div class="col-md-4">
                <!-- BLOG  -->
                <div class="card__image">
                    <div class="card__image-header h-250">
                        <img src="{{ asset('assets/front/images/gallery23.png') }}" alt="" class="img-fluid w100 img-transition">
                        <div class="info"> event</div>
                    </div>
                    <div class="card__image-body">
                        <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">May 08, 2019 </span> -->
                        <h6 class="text-capitalize">
                            <a href="blog-single.html">Tips & Trick buy real estate </a>
                        </h6>
                        <p class=" mb-0">
                            Real estate festival is one of the famous feval for explain to you how all this mistaolt
                            deand praising pain
                            wasnad I will give complete

                        </p>


                    </div>
                    <div class="card__image-footer">
                        <figure>
                            <img src="{{ asset('assets/front/images/profile-blog.jpg') }}" alt="" class="img-fluid rounded-circle">
                        </figure>
                        <ul class="list-inline my-auto">
                            <li class="list-inline-item">
                                <a href="blog-single.html">
                                    tom wilson
                                </a>

                            </li>

                        </ul>
                        <ul class="list-inline my-auto ml-auto">
                            <li class="list-inline-item">
                                <a href="blog-single.html" class="btn btn-sm btn-primary "><small
                                        class="text-white ">read more <i
                                            class="fa fa-angle-right ml-1"></i></small></a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- END BLOG -->
            </div>
            <div class="col-md-4">
                <!-- BLOG  -->
                <div class="card__image">
                    <div class="card__image-header h-250">
                        <img src="{{ asset('assets/front/images/gallery4.jpg') }}" alt="" class="img-fluid w100 img-transition">
                        <div class="info"> event</div>
                    </div>
                    <div class="card__image-body">
                        <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">May 08, 2019 </span> -->
                        <h6 class="text-capitalize">
                            <a href="blog-single.html">Our Must Popular Deluxe House </a>
                        </h6>
                        <p class=" mb-0">
                            Real estate festival is one of the famous feval for explain to you how all this mistaolt
                            deand praising pain
                            wasnad I will give complete

                        </p>


                    </div>
                    <div class="card__image-footer">
                        <figure>
                            <img src="{{ asset('assets/front/images/profile-blog.jpg') }}" alt="" class="img-fluid rounded-circle">
                        </figure>
                        <ul class="list-inline  my-auto">
                            <li class="list-inline-item">
                                <a href="blog-single.html">
                                    tom wilson
                                </a>

                            </li>

                        </ul>
                        <ul class="list-inline my-auto ml-auto">
                            <li class="list-inline-item ">
                                <a href="blog-single.html" class="btn btn-sm btn-primary "><small
                                        class="text-white ">read more <i
                                            class="fa fa-angle-right ml-1"></i></small></a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- END BLOG -->
            </div>
        </div>
    </div>
</section>
<!-- END BLOG -->
</div>

@endsection
