@extends('layout.master')
@section('title', 'Home')
@section('main')
        <section>
        <div class="w-100 position-relative">
            <div class="slider-area-wrap position-relative w-100">
                <div class="slider-caro2 nav-style1">
                    <div class="slider-item overflow-hidden position-relative d-block w-100">
                        <picture class="img-fluid d-block w-100">
                            <source media="(max-width:850px)" srcset="assets/images/resources/slide-mobile-img2-1.jpg">
                            <img class="img-fluid d-block w-100" src="assets/images/resources/slide-img2-1.jpg" alt="Slide Image 1">
                        </picture>
                        <div class="slider-cap v2 text-center text-white position-absolute">
                            <h1 class="mb-0 animated fadeInUp">Come Visit And Shop <br> With Us In Store</h1>
                            <p class="mb-0 animated fadeInUp">Trying something new is never pretty. But it is pretty awesome. Because no matter <br> how many times.</p>
                            <div class="btns-group d-flex flex-wrap justify-content-center align-items-center animated fadeInUp">
                                <a class="theme-btn bg-color4" href="javascript:void(0);" title="">Shop Women<span></span><span></span><span></span><span></span></a>
                                <a class="theme-btn bg-color1" href="javascript:void(0);" title="">Shop Men<span></span><span></span><span></span><span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="slider-item overflow-hidden position-relative d-block w-100">
                        <picture class="img-fluid d-block w-100">
                            <source media="(max-width:850px)" srcset="assets/images/resources/slide-mobile-img2-2.jpg">
                            <img class="img-fluid d-block w-100" src="assets/images/resources/slide-img2-2.jpg" alt="Slide Image 2">
                        </picture>
                        <div class="slider-cap v2 text-center text-white position-absolute">
                            <h1 class="mb-0 hidden">Come Visit And Shop <br> With Us In Store</h1>
                            <p class="mb-0 hidden">Trying something new is never pretty. But it is pretty awesome. Because no matter <br> how many times.</p>
                            <div class="btns-group d-flex flex-wrap justify-content-center align-items-center hidden">
                                <a class="theme-btn bg-color4" href="javascript:void(0);" title="">Shop Women<span></span><span></span><span></span><span></span></a>
                                <a class="theme-btn bg-color1" href="javascript:void(0);" title="">Shop Men<span></span><span></span><span></span><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Slider Area Wrap -->
        </div>
    </section>
    <section>
        <div class="w-100 pt-60 bg-color5 pb-60 position-relative">
            <div class="container">
                <div class="services-wrap position-relative text-center w-100">
                    <div class="row mrg30">
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="serv-box text-center w-100">
                                <span class="d-inline-block text-color4"><i class="fi fi-rr-truck-side"></i></span>
                                <h4 class="mb-0">Free Shipping</h4>
                                <p class="mb-0">On all orders over $50 CAD/USD</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="serv-box text-center w-100">
                                <span class="d-inline-block text-color4"><i class="fi fi-rr-time-forward"></i></span>
                                <h4 class="mb-0">30 days return</h4>
                                <p class="mb-0">Possibility of returning goods</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="serv-box text-center w-100">
                                <span class="d-inline-block text-color4"><i class="fi fi-rr-heart"></i></span>
                                <h4 class="mb-0">We are Inclusive</h4>
                                <p class="mb-0">Representing all</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="serv-box text-center w-100">
                                <span class="d-inline-block text-color4"><i class="fi fi-rr-plane"></i></span>
                                <h4 class="mb-0">International warrantly</h4>
                                <p class="mb-0">Postal items to countries</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Services Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 pb-120 position-relative">
            <div class="container">
                <div class="sec-title position-relative w-100">
                    <h2 class="mb-0"><span class="text-color4">Shop Womens</span> New In</h2>
                </div><!-- Section Title -->
                <div class="products-wrap res-row position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="product-box position-relative w-100">
                                <div class="product-img overflow-hidden position-relative w-100">
                                    <a href="product-detail.html" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-1.jpg" alt="Product Image 1"></a>
                                    <div class="product-btns position-absolute">
                                        <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                        <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                        <a class="expand-btn" href="assets/images/resources/product-img2-1.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                    </div>
                                </div>
                                <div class="product-info w-100">
                                    <h4 class="mb-0"><a href="product-detail.html" title="">Jersey Graphic Tee</a></h4>
                                    <span class="price">$89</span>
                                    <div class="products-color d-flex flex-wrap">
                                        <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="product-box position-relative w-100">
                                <div class="product-img overflow-hidden position-relative w-100">
                                    <a href="product-detail.html" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-2.jpg" alt="Product Image 2"></a>
                                    <div class="product-btns position-absolute">
                                        <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                        <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                        <a class="expand-btn" href="assets/images/resources/product-img2-2.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                    </div>
                                </div>
                                <div class="product-info w-100">
                                    <h4 class="mb-0"><a href="product-detail.html" title="">Long strappy dress</a></h4>
                                    <span class="price">$100</span>
                                    <div class="products-color d-flex flex-wrap">
                                        <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="product-box position-relative w-100">
                                <div class="product-img overflow-hidden position-relative w-100">
                                    <a href="product-detail.html" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-3.jpg" alt="Product Image 3"></a>
                                    <div class="product-btns position-absolute">
                                        <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                        <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                        <a class="expand-btn" href="assets/images/resources/product-img2-3.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                    </div>
                                </div>
                                <div class="product-info w-100">
                                    <h4 class="mb-0"><a href="product-detail.html" title="">Long Fit dress</a></h4>
                                    <span class="price">$120</span>
                                    <div class="products-color d-flex flex-wrap">
                                        <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="product-box position-relative w-100">
                                <div class="product-img overflow-hidden position-relative w-100">
                                    <a href="product-detail.html" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-4.jpg" alt="Product Image 4"></a>
                                    <div class="product-btns position-absolute">
                                        <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                        <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                        <a class="expand-btn" href="assets/images/resources/product-img2-4.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                    </div>
                                </div>
                                <div class="product-info w-100">
                                    <h4 class="mb-0"><a href="product-detail.html" title="">Grown cotton T-shirt</a></h4>
                                    <span class="price">$72</span>
                                    <div class="products-color d-flex flex-wrap">
                                        <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Products Wrap -->
                <div class="view-more d-block mt-60 position-relative text-center w-100">
                    <a class="theme-btn bg-color4 brd-btn" href="product-detail.html" title="">View All Products<span></span><span></span><span></span><span></span></a>
                </div><!-- View More -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-120 bg-color5 pb-120 position-relative">
            <div class="container">
                <div class="new-styles position-relative w-100">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="sec-title position-relative w-100">
                                <span class="d-block text-color4">- Welcome to fashion</span>
                                <h2 class="mb-0">Newest Styles</h2>
                                <p class="mb-0">Trying something new is never pretty. But it is pretty awesome. Because no matter how many times.</p>
                                <a class="theme-btn bg-color4" href="product-detail2.html" title="">Shop Now<span></span><span></span><span></span><span></span></a>
                            </div><!-- Section Title -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="products-wrap position-relative w-100">
                                <div class="row prod-caro2 pagi-style1 v2  lft-panel mrg30">
                                    <div class="col-md-4 col-sm-6 col-lg-3">
                                        <div class="product-box position-relative w-100">
                                            <div class="product-img overflow-hidden position-relative w-100">
                                                <a href="product-detail.html" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-5.jpg" alt="Product Image 5"></a>
                                                <div class="product-btns position-absolute">
                                                    <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                                    <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                    <a class="expand-btn" href="assets/images/resources/product-img2-5.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-info w-100">
                                                <h4 class="mb-0"><a href="product-detail.html" title="">Long Fit dress</a></h4>
                                                <span class="price">$120</span>
                                                <div class="products-color d-flex flex-wrap">
                                                    <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                    <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                    <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-3">
                                        <div class="product-box position-relative w-100">
                                            <div class="product-img overflow-hidden position-relative w-100">
                                                <a href="product-detail.html" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-6.jpg" alt="Product Image 6"></a>
                                                <div class="product-btns position-absolute">
                                                    <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                                    <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                    <a class="expand-btn" href="assets/images/resources/product-img2-6.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-info w-100">
                                                <h4 class="mb-0"><a href="product-detail.html" title="">Jacket with pouch pocket</a></h4>
                                                <span class="price">$55</span>
                                                <div class="products-color d-flex flex-wrap">
                                                    <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                    <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                    <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-3">
                                        <div class="product-box position-relative w-100">
                                            <div class="product-img overflow-hidden position-relative w-100">
                                                <a href="product-detail.html" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-7.jpg" alt="Product Image 7"></a>
                                                <div class="product-btns position-absolute">
                                                    <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                                    <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                    <a class="expand-btn" href="assets/images/resources/product-img2-7.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-info w-100">
                                                <h4 class="mb-0"><a href="product-detail.html" title="">New Blend Field Jacket</a></h4>
                                                <span class="price">$80</span>
                                                <div class="products-color d-flex flex-wrap">
                                                    <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                    <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                    <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Products Wrap -->
                        </div>
                    </div>
                </div><!-- New Styles -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 position-relative">
            <div class="container">
                <div class="sec-title position-relative w-100">
                    <h2 class="mb-0"><span class="text-color4">Shop Mens</span> New In</h2>
                </div><!-- Section Title -->
                <div class="products-wrap res-row position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="product-box position-relative w-100">
                                <div class="product-img overflow-hidden position-relative w-100">
                                    <a href="product-detail2.html" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-7.jpg" alt="Product Image 7"></a>
                                    <div class="product-btns position-absolute">
                                        <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                        <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                        <a class="expand-btn" href="assets/images/resources/product-img2-7.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                    </div>
                                </div>
                                <div class="product-info w-100">
                                    <h4 class="mb-0"><a href="product-detail2.html" title="">New Blend Field Jacket</a></h4>
                                    <span class="price">$80</span>
                                    <div class="products-color d-flex flex-wrap">
                                        <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="product-box position-relative w-100">
                                <div class="product-img overflow-hidden position-relative w-100">
                                    <a href="product-detail2.html" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-8.jpg" alt="Product Image 8"></a>
                                    <div class="product-btns position-absolute">
                                        <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                        <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                        <a class="expand-btn" href="assets/images/resources/product-img2-8.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                    </div>
                                </div>
                                <div class="product-info w-100">
                                    <h4 class="mb-0"><a href="product-detail2.html" title="">Skinny mid-rise trousers</a></h4>
                                    <span class="price">$70</span>
                                    <div class="products-color d-flex flex-wrap">
                                        <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="product-box position-relative w-100">
                                <div class="product-img overflow-hidden position-relative w-100">
                                    <a href="product-detail2.html" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-9.jpg" alt="Product Image 9"></a>
                                    <div class="product-btns position-absolute">
                                        <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                        <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                        <a class="expand-btn" href="assets/images/resources/product-img2-9.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                    </div>
                                </div>
                                <div class="product-info w-100">
                                    <h4 class="mb-0"><a href="product-detail2.html" title="">Long Fit T-shirt</a></h4>
                                    <span class="price">$50</span>
                                    <div class="products-color d-flex flex-wrap">
                                        <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="product-box position-relative w-100">
                                <div class="product-img overflow-hidden position-relative w-100">
                                    <a href="product-detail2.html" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-10.jpg" alt="Product Image 10"></a>
                                    <div class="product-btns position-absolute">
                                        <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                        <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                        <a class="expand-btn" href="assets/images/resources/product-img2-10.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                    </div>
                                </div>
                                <div class="product-info w-100">
                                    <h4 class="mb-0"><a href="product-detail2.html" title="">Round neck sweater</a></h4>
                                    <span class="price">$150</span>
                                    <div class="products-color d-flex flex-wrap">
                                        <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Products Wrap -->
                <div class="view-more d-block mt-60 position-relative text-center w-100">
                    <a class="theme-btn bg-color4 brd-btn" href="product-detail2.html" title="">View All Products<span></span><span></span><span></span><span></span></a>
                </div><!-- View More -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 position-relative">
            <div class="container">
                <div class="sec-title position-relative w-100">
                    <span class="d-block text-color1">- Featured Items</span>
                    <h2 class="mb-0"><span class="text-color4">The Seasons</span> Wear</h2>
                </div><!-- Section Title -->
                <div class="featured-products-wrap res-row position-relative w-100">
                    <div class="row mrg20">
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="featured-product-box overflow-hidden position-relative w-100">
                                <div class="featured-product-img overflow-hidden position-relative w-100">
                                    <img class="img-fluid w-100" src="assets/images/resources/featured-product-img2-1.jpg" alt="Featured Product Image 1">
                                </div>
                                <div class="featured-product-cap position-absolute w-100">
                                    <h2 class="mb-0"><a href="product-detail3.html" title="">Night Summer Dresses</a></h2>
                                    <p class="mb-0">Trying something new is never pretty. But it is pretty awesome. Because no matter how many times.</p>
                                    <a class="theme-btn mid-btn bg-white" href="product-detail3.html">Shop Now<span></span><span></span><span></span><span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="featured-product-box overflow-hidden position-relative w-100">
                                <div class="featured-product-img overflow-hidden position-relative w-100">
                                    <img class="img-fluid w-100" src="assets/images/resources/featured-product-img2-2.jpg" alt="Featured Product Image 2">
                                </div>
                                <div class="featured-product-cap position-absolute w-100">
                                    <h2 class="mb-0"><a href="product-detail3.html" title="">Clearance Sales</a></h2>
                                    <p class="mb-0">Trying something new is never pretty. But it is pretty awesome. Because no matter how many times.</p>
                                    <a class="theme-btn mid-btn bg-white" href="product-detail3.html">Shop Now<span></span><span></span><span></span><span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="featured-product-box overflow-hidden position-relative w-100">
                                <div class="featured-product-img overflow-hidden position-relative w-100">
                                    <img class="img-fluid w-100" src="assets/images/resources/featured-product-img2-3.jpg" alt="Featured Product Image 3">
                                </div>
                                <div class="featured-product-cap position-absolute w-100">
                                    <h2 class="mb-0"><a href="product-detail3.html" title="">Newest Styles for Summer</a></h2>
                                    <p class="mb-0">Trying something new is never pretty. But it is pretty awesome. Because no matter how many times.</p>
                                    <a class="theme-btn mid-btn bg-white" href="product-detail3.html">Shop Now<span></span><span></span><span></span><span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Featured Itemss Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-120 position-relative">
            <div class="container">
                <div class="testi-wrap2 bg-color5 position-relative w-100">
                    <div class="row align-items-center mrg30">
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="sec-title position-relative w-100">
                                <span class="d-block text-color1">- Our Reviews</span>
                                <h2 class="mb-0">What our <br> <span class="text-color4">Customers are <br> Saying</span></h2>
                            </div><!-- Section Title -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="testi-inner position-relative w-100">
                                <div class="testi-caro">
                                    <div class="testi-item d-block w-100">
                                        <span class="rounded-circle d-inline-block"><img class="img-fluid" src="assets/images/resources/testi-img2-1.jpg" alt="Testimonial Image 1"></span>
                                        <h4 class="mb-0">Amy Smith</h4>
                                        <p class="mb-0">“This is the best website I have ordered something from. I highly recommend.”</p>
                                    </div>
                                    <div class="testi-item d-block w-100">
                                        <span class="rounded-circle d-inline-block"><img class="img-fluid" src="assets/images/resources/testi-img2-2.jpg" alt="Testimonial Image 2"></span>
                                        <h4 class="mb-0">John Doe</h4>
                                        <p class="mb-0">“This is the best website I have ordered something from. I highly recommend.”</p>
                                    </div>
                                    <div class="testi-item d-block w-100">
                                        <span class="rounded-circle d-inline-block"><img class="img-fluid" src="assets/images/resources/testi-img2-3.jpg" alt="Testimonial Image 3"></span>
                                        <h4 class="mb-0">Jane Wilson</h4>
                                        <p class="mb-0">“This is the best website I have ordered something from. I highly recommend.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Testimonials Wrap 2 -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 position-relative">
            <div class="container">
                <div class="sec-title position-relative w-100">
                    <span class="d-block text-color4">- Instagram Shop</span>
                    <h2 class="mb-0">Share <span class="text-color4">Your Looks</span></h2>
                </div><!-- Section Title -->
            </div>
            <div class="insta-wrap position-relative w-100">
                <div class="row insta-caro nav-style1 v2 pagi-style2 nav-dots-bottom mrg20">
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="insta-item d-block overflow-hidden position-relative w-100">
                            <a href="assets/images/resources/insta-img1-1.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/insta-img1-1.jpg" alt="Instagram Image 1"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="insta-item d-block overflow-hidden position-relative w-100">
                            <a href="assets/images/resources/insta-img1-2.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/insta-img1-2.jpg" alt="Instagram Image 2"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="insta-item d-block overflow-hidden position-relative w-100">
                            <a href="assets/images/resources/insta-img1-3.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/insta-img1-3.jpg" alt="Instagram Image 3"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="insta-item d-block overflow-hidden position-relative w-100">
                            <a href="assets/images/resources/insta-img1-4.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/insta-img1-4.jpg" alt="Instagram Image 4"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="insta-item d-block overflow-hidden position-relative w-100">
                            <a href="assets/images/resources/insta-img1-5.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/insta-img1-5.jpg" alt="Instagram Image 5"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="insta-item d-block overflow-hidden position-relative w-100">
                            <a href="assets/images/resources/insta-img1-6.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/insta-img1-6.jpg" alt="Instagram Image 6"></a>
                        </div>
                    </div>
                </div>
            </div><!-- Instagram Wrap -->
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 position-relative">
            <div class="container">
                <div class="sec-title position-relative w-100">
                    <span class="d-block text-color4">- The Week's</span>
                    <h2 class="mb-0">New Arrivals</h2>
                </div><!-- Section Title -->
                <div class="products-wrap res-row position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="product-box position-relative w-100">
                                <div class="product-img overflow-hidden position-relative w-100">
                                    <a href="product-detail4.html" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-11.jpg" alt="Product Image 11"></a>
                                    <div class="product-btns position-absolute">
                                        <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                        <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                        <a class="expand-btn" href="assets/images/resources/product-img2-11.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                    </div>
                                </div>
                                <div class="product-info w-100">
                                    <h4 class="mb-0"><a href="product-detail4.html" title="">Jersey Graphic Tee Dolce</a></h4>
                                    <span class="price">$99</span>
                                    <div class="products-color d-flex flex-wrap">
                                        <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="product-box position-relative w-100">
                                <div class="product-img overflow-hidden position-relative w-100">
                                    <a href="product-detail4.html" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-12.jpg" alt="Product Image 12"></a>
                                    <div class="product-btns position-absolute">
                                        <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                        <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                        <a class="expand-btn" href="assets/images/resources/product-img2-12.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                    </div>
                                </div>
                                <div class="product-info w-100">
                                    <h4 class="mb-0"><a href="product-detail4.html" title="">Long strappy dress</a></h4>
                                    <span class="price">$200</span>
                                    <div class="products-color d-flex flex-wrap">
                                        <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="product-box position-relative w-100">
                                <div class="product-img overflow-hidden position-relative w-100">
                                    <a href="product-detail4.html" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-13.jpg" alt="Product Image 13"></a>
                                    <div class="product-btns position-absolute">
                                        <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                        <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                        <a class="expand-btn" href="assets/images/resources/product-img2-13.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                    </div>
                                </div>
                                <div class="product-info w-100">
                                    <h4 class="mb-0"><a href="product-detail4.html" title="">Grown cotton T-shirt</a></h4>
                                    <span class="price">$150</span>
                                    <div class="products-color d-flex flex-wrap">
                                        <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="product-box position-relative w-100">
                                <div class="product-img overflow-hidden position-relative w-100">
                                    <a href="product-detail4.html" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img2-14.jpg" alt="Product Image 14"></a>
                                    <div class="product-btns position-absolute">
                                        <a class="wishlist-btn" href="wishlist.html" title=""><i class="fi fi-rr-heart"></i></a>
                                        <a class="cart-btn" href="cart.html" title=""><i class="fi-rr-shopping-bag"></i></a>
                                        <a class="expand-btn" href="assets/images/resources/product-img2-14.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                    </div>
                                </div>
                                <div class="product-info w-100">
                                    <h4 class="mb-0"><a href="product-detail4.html" title="">Jacket with pouch pockett</a></h4>
                                    <span class="price">$250</span>
                                    <div class="products-color d-flex flex-wrap">
                                        <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div><!-- Products Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-120 pb-120 position-relative">
            <div class="container">
                <div class="sponsors-wrap position-relative w-100">
                    <div class="row align-items-center mrg30">
                        <div class="col">
                            <div class="spnsr-item text-center w-100">
                                <a href="javascript:void(0);" title=""><img class="img-fluid" src="assets/images/resources/spnsr-img1-1.png" alt="Sponsor Image 1"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="spnsr-item text-center w-100">
                                <a href="javascript:void(0);" title=""><img class="img-fluid" src="assets/images/resources/spnsr-img1-2.png" alt="Sponsor Image 2"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="spnsr-item text-center w-100">
                                <a href="javascript:void(0);" title=""><img class="img-fluid" src="assets/images/resources/spnsr-img1-3.png" alt="Sponsor Image 3"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="spnsr-item text-center w-100">
                                <a href="javascript:void(0);" title=""><img class="img-fluid" src="assets/images/resources/spnsr-img1-4.png" alt="Sponsor Image 4"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="spnsr-item text-center w-100">
                                <a href="javascript:void(0);" title=""><img class="img-fluid" src="assets/images/resources/spnsr-img1-5.png" alt="Sponsor Image 5"></a>
                            </div>
                        </div>
                    </div>
                </div><!-- Sponsors Wrap -->
            </div>
        </div>
    </section>
@endsection

