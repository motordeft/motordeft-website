@extends('_layouts.master')

@section('body')
    <section class="section nft-hero" id="hero">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-10">
                    <div class="text-center">
                        <h1 class="display-4 fw-semibold mb-4 lh-base text-white">404 </h1>
                        <h3 class="text-white"><span class="text-danger">Oopps!</span> Page not found</h3>
                        <p class="lead text-white lh-base my-4 pb-2">The page you’re looking for does not exist.</p>

                        <div class="hstack gap-2 justify-content-center">
                            <a href="/" class="btn btn-primary"><i class="ri-arrow-left-line align-middle ms-1"></i> Go Home</a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection
