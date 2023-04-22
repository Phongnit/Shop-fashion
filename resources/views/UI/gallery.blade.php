@extends('layout.master')
@section('title', 'gallery')
@section('main')
    <section>
        <div class="page-top-wrap w-100 pt-30 bg-color22 pb-110 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/top-banner-bg.jpg);"></div>
            <div class="container">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}" title="">Home</a></li>
                    <li class="breadcrumb-item"><a href="blog.html" title="">Blog</a></li>
                    <li class="breadcrumb-item active">Gallery</li>
                </ol>
                <div class="page-title w-100">
                    <span class="d-block text-color4">- Blog</span>
                    <h2 class="mb-0">Gallery</h2>
                </div><!-- Page Title -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-120 pb-120 position-relative">
            <div class="container">
                <div class="gallery-wrap position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="gallery-item overflow-hidden position-relative w-100"><a href="assets/images/resources/gallery-img1-1.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/gallery-img1-1.jpg" alt="Gallery Image 1"></a></div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="gallery-item overflow-hidden position-relative w-100"><a href="assets/images/resources/gallery-img1-2.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/gallery-img1-2.jpg" alt="Gallery Image 2"></a></div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="gallery-item overflow-hidden position-relative w-100"><a href="assets/images/resources/gallery-img1-3.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/gallery-img1-3.jpg" alt="Gallery Image 3"></a></div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="gallery-item overflow-hidden position-relative w-100"><a href="assets/images/resources/gallery-img1-4.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/gallery-img1-4.jpg" alt="Gallery Image 4"></a></div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="gallery-item overflow-hidden position-relative w-100"><a href="assets/images/resources/gallery-img1-5.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/gallery-img1-5.jpg" alt="Gallery Image 5"></a></div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="gallery-item overflow-hidden position-relative w-100"><a href="assets/images/resources/gallery-img1-6.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/gallery-img1-6.jpg" alt="Gallery Image 6"></a></div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="gallery-item overflow-hidden position-relative w-100"><a href="assets/images/resources/gallery-img1-7.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/gallery-img1-7.jpg" alt="Gallery Image 7"></a></div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="gallery-item overflow-hidden position-relative w-100"><a href="assets/images/resources/gallery-img1-8.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/gallery-img1-8.jpg" alt="Gallery Image 8"></a></div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="gallery-item overflow-hidden position-relative w-100"><a href="assets/images/resources/gallery-img1-9.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/gallery-img1-9.jpg" alt="Gallery Image 9"></a></div>
                        </div>
                    </div>
                </div><!-- Gallery Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pb-120 position-relative">
            <div class="container">
                <div class="newsletter-wrap bg-color5 position-relative w-100" style="background-image: url(assets/images/resources/newsletter-mockup.png);">
                    <div class="row mrg30">
                        <div class="col-md-9 col-sm-12 col-lg-7">
                            <div class="sec-title position-relative">
                                <span class="d-block text-color4">- Our Newsletter</span>
                                <h2 class="mb-0">New Product Notifications</h2>
                            </div><!-- Section Title -->
                            <form id="subscribe-form" method="post" action="#">
                                <div class="field-box position-relative">
                                    <i class="fi fi-rr-envelope"></i>
                                    <input class="email" type="email" placeholder="Enter your email" name="email" required>
                                </div>
                                <div class="field-btn">
                                    <button class="theme-btn bg-color1" type="submit" id="subscribe-button">Subscribe<span></span><span></span><span></span><span></span></button>
                                </div>
                                <div class="response w-100"></div>
                            </form>
                        </div>
                    </div>
                </div><!-- Newsletter Wrap -->
            </div>
        </div>
    </section>
@endsection

