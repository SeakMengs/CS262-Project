@extends('layout.master')

@section('dyncontent')

    <div class="container py-3">
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li> <!-- Home breadcrumb link -->
                <li class="breadcrumb-item"><a href="/category">Category</a></li> <!-- Category breadcrumb link -->
                {{-- ************** TO change when render ****************************** --}}
                <li class="breadcrumb-item active" aria-current="page"><a href="/category/Automotive - Vehicles">Automotive -
                        Vehicles</a></li> <!-- Active breadcrumb link for Automotive - Vehicles -->
            </ol>
        </nav>
        <!-- End Breadcrumbs -->


        <div class="row row-cols-1 row-cols-md-3">
            <!-- Start of First Company -->
            <div class="col mb-4">
                <div class="card h-100">
                    {{-- ************** TO change when render ****************************** --}}
                    <a href="/category/Automotive - Vehicles/s-cool-cambodia">
                        <!-- Company logo -->
                        <img src="https://s3-ap-southeast-1.amazonaws.com/yp-s3-dev/uploads/7/20220322020754/s_cool_logo_bw_small.png"
                            class="card-img-top company-logo" alt="Company Logo">
                        <div class="card-body">
                            {{-- ************** TO change when render ****************************** --}}
                            <h5 class="card-title company-name"><a href="/category/Automotive - Vehicles/s-cool-cambodia" class="company-link">S-Cool Cambodia</a></h5>
                            <!-- Company contact info -->
                            <div>
                                <span class="company-phone"><i class="fa-solid fa-phone fontawe-icon"></i> 012 836 896 / 016
                                    836 896</span><br>
                                <span class="company-address"><small>No.901, Kampuchea Krom Blvd (128), Sangkat Teuk Laak
                                        II, Khan Toul Kork , 12156, Phnom Penh</small></span>
                            </div>
                            <!-- Company rating -->
                            <div class="company-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- End of First Company -->

        <!-- Second company -->
        <div class="col mb-4">
            <div class="card h-100">
                <!-- Company logo -->
                <img src="https://s3-ap-southeast-1.amazonaws.com/yp-s3-dev/uploads/kh/logo_images/original/1501462.jfif"
                    class="card-img-top company-logo" alt="Company Logo">
                <div class="card-body">
                    <h5 class="card-title company-name"><a href="#" class="company-link">Heng Seng International
                            Marketing Co., Ltd.</a></h5>
                    <!-- Company contact info -->
                    <div>
                        <span class="company-phone"><i class="fa-solid fa-phone fontawe-icon"></i> 011 904 095 / 012 326
                            464</span><br>
                        <span class="company-address"><small>No.27B, St.496, Sangkat Phsar Doeum Thkov, 12307, Phnom
                                Penh</small></span>
                    </div>
                    <!-- Company rating -->
                    <div class="company-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Second company -->


        <!-- Third Company -->
        <div class="col mb-4">
            <div class="card h-100">
                <!-- Company logo -->
                <img src="	https://s3-ap-southeast-1.amazonaws.com/yp-s3-dev/uploads/60/20220430071957/118704108_3596662120378302_1349522379324160084_n.jpeg"
                    class="card-img-top company-logo" alt="Company Logo">
                <div class="card-body">
                    <h5 class="card-title company-name"><a href="#" class="company-link">Tan Chong Motor (Cambodia)
                            Pty. Ltd</a></h5>
                    <!-- Company contact info -->
                    <div>
                        <span class="company-phone"><i class="fa-solid fa-phone fontawe-icon"></i> 023 993 338</span><br>
                        <span class="company-address"><small>No.131B, Yothapol Khemarak Phoumin Blvd (271), 12160, Phnom
                                Penh</small></span>
                    </div>
                    <!-- Company rating -->
                    <div class="company-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- End third company -->

        <!-- Add more company here -->


    </div>
    </div>






@stop