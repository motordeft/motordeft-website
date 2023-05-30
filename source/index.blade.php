@extends('_layouts.master')

@section('body')
    <!-- start hero section -->
    <section class="section nft-hero" id="hero">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-10">
                    <div class="text-center">
                        <h1 class="display-4 fw-semibold mb-4 lh-base text-white">Efficient, Reliable Motor <br><span class="text-success"> Valuation & Assessment</span></h1>
                        <p class="lead text-white-50 lh-base mb-4 pb-2">We embrace innovation and technology to provide prompt and efficient motor valuation & assessment</p>

                        <div class="hstack gap-2 justify-content-center">
                            <a href="#about-us" class="btn btn-primary">Learn More <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                            <a href="mailto:motordeft@gmail.com" class="btn btn-danger">Talk to Us <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end hero section -->

    <section class="section" id="about-us">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h2 class="mb-3 fw-bold lh-base pb-3">About Us</h2>
                        <div class="fs-5">
                            <p class="text-muted"><span class="fw-bolder">MOTORDEFT VALUERS AND ASSESSORS LIMITED</span> is a Private Limited Company incorporated in Kenya under the Companies Act, 2015.</p>
                            <p class="text-muted">We are composed of professionals who are able to carry out Motor Vehicle Valuation and Assessment services across various sectors and for various purposes.</p>
                            <p class="text-muted">We embraces innovation and technology to enhance prompt and efficient service provision to all our customers. Customer service and satisfaction is our main priority</p>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card h-100 text-center border shadow-none">
                        <div class="card-body py-3 px-4">
                            <i class="ri-focus-3-fill ri-7x" style="color: #EA712E;"></i>
                            <h4 class="py-3">Mission</h4>
                            <p class="text-muted pb-1 fs-5">
                                We are committed to offer professional, efficient, and accurate services to our client’s through proven methodologies and the use of technology.
                            </p>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col-lg-4">
                    <div class="card h-100 text-center border shadow-none">
                        <div class="card-body py-3 px-4">
                            <i class="ri-eye-2-line ri-7x" style="color: #EA712E;"></i>
                            <h4 class="py-3">Vision</h4>
                            <p class="text-muted pb-1 fs-5">
                                To be the dependable service provider of choice both locally and internally in the provision of motor valuation and assessment services.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="card h-100 text-center border shadow-none">
                        <div class="card-body py-3 px-4">
                            <i class="ri-file-list-3-fill ri-7x" style="color: #EA712E;"></i>
                            <h4 class="py-3">Values</h4>
                            <p class="text-muted pb-1 fs-5 fw-bold">
                                Professionalism, <br> Timeliness, <br> Integrity
                            </p>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <section class="section bg-white" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h2 class="mb-3 fw-bold lh-base pb-3">Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card h-100 text-center border shadow-none">
                        <div class="card-img" style="height: 240px; overflow-y: hidden">
                            <img class="img-fluid rounded-top" src="/assets/images/valuation.jpg" alt="Valuation image">
                        </div>
                        <div class="card-body py-3 px-4">
                            <h4 class="py-3">Full Mechanical Valuation</h4>
                            <p class="text-muted pb-1 fs-5">
                                This is a thorough inspection of a vehicle to not only determine its values, but establish its in-depth serviceability mechanically and electronically.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 text-center border shadow-none">
                        <div class="card-img" style="height: 240px; overflow-y: hidden">
                            <img class="img-fluid rounded-top" src="/assets/images/assessment.jpg" alt="Valuation image">
                        </div>
                        <div class="card-body py-3 px-4">
                            <h4 class="py-3">Motor Vehicle Valuation</h4>
                            <p class="text-muted pb-1 fs-5">
                                We undertake motor vehicle valuation services to facilitate financing, motor insurance, asset disposal, and asset-market value allocation.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 text-center border shadow-none">
                        <div class="card-img" style="height: 240px; overflow-y: hidden">
                            <img class="img-fluid rounded-top" src="/assets/images/bg-home.jpg" alt="Motor Claims Assessment image">
                        </div>
                        <div class="card-body py-3 px-4">
                            <h4 class="py-3">Motor Claims Assessment</h4>
                            <p class="text-muted pb-1 fs-5">
                                We carry out motor-accident assessment services as an advisory to the insurance industry for purposes of indemnification during claims, theft, vandalism or fire
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="expertise">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h2 class="mb-3 fw-bold lh-base pb-3">Our Expertise</h2>
                    </div>
                </div>
            </div>
            <div class="row fs-5 text-muted">
                <div class="col">
                    <p>Headed and championed by the directors, the company has recruited highly professional and qualified
                        members of staff to carry out it’s operations
                        competently throughout the country.
                    </p>
                    <p>
                        We endeavor to employ modern-day technology
                        to enhance quality and timely service provision that
                        are aligned to the day-to-day market demands.
                    </p>
                    <p>
                        We currently have presence in major town covering
                        various regions in Kenya:-

                    <ol>
                        <li>Nairobi</li>
                        <li>Rift Valley</li>
                        <li>Coastal Region</li>
                        <li>Nyanza</li>
                        <li>Western</li>
                        <li>Mt. Kenya Region</li>
                    </ol>
                    </p>
                </div>
                <div class="col align-middle">
                    <img class="img-fluid rounded-4 m-5" src="/assets/images/yellow-car.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-primary position-relative" id="contact-us">
        <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-sm">
                    <div>
                        <h3 class="text-white mb-4 fw-bold">Talk to us about your Motor Valuation & Assessment needs.</h3>
                        <span class="text-white fs-5 d-block mb-2"><i class="ri-mail-check-line pt-2"></i> Email: <span class="fw-bolder">motordeft@gmail.com</span></span>
                        <span class="text-white fs-5 d-block mb-2"><i class="ri-mail-send-line pt-2"></i> Postal: <span class="fw-bolder">P.O Box 1715-00100 Nairobi</span></span>
                        <span class="text-white fs-5 d-block mb-2"><i class="ri-customer-service-line pt-2"></i> Phone: <span class="fw-bolder">+254 740 683 616</span></span>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-sm-auto">
                    <div>
                        <a href="mailto:motordeft@gmail.com" class="btn bg-gradient btn-danger text-uppercase"><i class="ri-mail-check-line align-middle me-1"></i> Talk to us</a>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
@endsection
