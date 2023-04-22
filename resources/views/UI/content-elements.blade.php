@extends('layout.master')
@section('title', 'content-elements')
@section('main')
   <section>
        <div class="page-top-wrap w-100 pt-30 bg-color13 pb-110 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/top-banner-bg2.jpg);"></div>
            <div class="container">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}" title="">Home</a></li>
                    <li class="breadcrumb-item active">Content Elements</li>
                </ol>
                <div class="page-title w-100">
                    <span class="d-block text-color4">- Products</span>
                    <h2 class="mb-0">Content Elements</h2>
                </div><!-- Page Title -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 position-relative">
            <div class="container">
                <div class="sec-title position-relative text-center w-100">
                    <h2 class="mb-0 d-inline-block text-decoration-underline">Heading & Body</h2>
                </div><!-- Section Title -->
                <div class="content-box position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-7 col-sm-12 col-lg-7">
                            <div class="heading-style">
                                <h1>Heading 1</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique porttitor sem, sit amet dictum dolor sollicitudin eu. Aenean sollicitudin rhoncus urna, a porttitor</p>
                                <h2>Heading 2</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique porttitor sem, sit amet dictum dolor sollicitudin eu. Aenean sollicitudin rhoncus urna, a porttitor</p>
                                <h3>Heading 3</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique porttitor sem, sit amet dictum dolor sollicitudin eu. Aenean sollicitudin rhoncus urna, a porttitor</p>
                                <h4>Heading 4</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique porttitor sem, sit amet dictum dolor sollicitudin eu. Aenean sollicitudin rhoncus urna, a porttitor</p>
                                <h5>Heading 5</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique porttitor sem, sit amet dictum dolor sollicitudin eu. Aenean sollicitudin rhoncus urna, a porttitor</p>
                                <h6>Heading 6</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique porttitor sem, sit amet dictum dolor sollicitudin eu. Aenean sollicitudin rhoncus urna, a porttitor</p>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <div class="body-style">
                                <h1>Body 1</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique porttitor sem, sit amet dictum sollicitudin</p>
                                <h2>Body 2</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique porttitor sem, sit amet dictum sollicitudin</p>
                                <h3>Body 3</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique porttitor sem, sit amet dictum sollicitudin</p>
                                <h4>Body 4</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique porttitor sem, sit amet dictum sollicitudin</p>
                                <h5>Body 5</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique porttitor sem, sit amet dictum sollicitudin</p>
                                <h6>Body 6</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique porttitor sem, sit amet dictum sollicitudin</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Content Box -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-120 position-relative">
            <div class="container">
                <hr class="mt-0 mb-110">
                <div class="sec-title position-relative text-center w-100">
                    <h2 class="mb-0 d-inline-block text-decoration-underline">Information Boxes</h2>
                </div><!-- Section Title -->
                <div class="alerts-wrap position-relative w-100">
                    <div class="row mrg50">
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="alert alertstyle1 bg-color14 mb-50 alert-dismissible d-flex flex-wrap fade show">
                                <i class="fi fi-rr-info"></i>
                                <div class="alert-inner-info">
                                    <h4 class="mb-0">Information Message</h4>
                                    <p class="mb-0">I am a description. Click the edit button to change this text.</p>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fi fi-rr-cross-small"></i></button>
                            </div><!-- Alert Box -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="alert alertstyle2 bg-color15 mb-50 alert-dismissible d-flex flex-wrap fade show">
                                <i class="fi fi-rr-comment-check"></i>
                                <div class="alert-inner-info">
                                    <h4 class="mb-0">Success Message</h4>
                                    <p class="mb-0">I am a description. Click the edit button to change this text.</p>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fi fi-rr-cross-small"></i></button>
                            </div><!-- Alert Box -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="alert alertstyle3 bg-color16 mb-50 alert-dismissible d-flex flex-wrap fade show">
                                <i class="fi fi-rr-exclamation"></i>
                                <div class="alert-inner-info">
                                    <h4 class="mb-0">Warning Message</h4>
                                    <p class="mb-0">I am a description. Click the edit button to change this text.</p>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fi fi-rr-cross-small"></i></button>
                            </div><!-- Alert Box -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="alert alertstyle4 bg-color17 mb-50 alert-dismissible d-flex flex-wrap fade show">
                                <i class="fi fi-rr-cross-circle"></i>
                                <div class="alert-inner-info">
                                    <h4 class="mb-0">Danger Message</h4>
                                    <p class="mb-0">I am a description. Click the edit button to change this text.</p>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fi fi-rr-cross-small"></i></button>
                            </div><!-- Alert Box -->
                        </div>
                    </div>
                </div><!-- Alerts Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-70 position-relative">
            <div class="container">
                <hr class="mt-0 mb-110">
                <div class="sec-title position-relative text-center w-100">
                    <h2 class="mb-0 d-inline-block text-decoration-underline">Buttons</h2>
                </div><!-- Section Title -->
                <div class="btns-wrap position-relative w-100">
                    <div class="row mrg50">
                        <div class="col-md-4 col-sm-4 col-lg-4">
                            <div class="btn-groups w-100">
                                <a class="theme-btn bg-color1" href="javascript:void(0);" title="">Large Button (fill)<span></span><span></span><span></span><span></span></a> <br>
                                <a class="theme-btn bg-color1 brd-btn" href="javascript:void(0);" title="">Large Button (fill)<span></span><span></span><span></span><span></span></a> <br>
                                <a class="theme-btn bg-color4" href="javascript:void(0);" title="">Large Button (fill)<span></span><span></span><span></span><span></span></a> <br>
                                <a class="theme-btn bg-color4 brd-btn" href="javascript:void(0);" title="">Large Button (fill)<span></span><span></span><span></span><span></span></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-lg-4">
                            <div class="btn-groups w-100">
                                <a class="theme-btn md-btn bg-color1" href="javascript:void(0);" title="">Large Button (fill)<span></span><span></span><span></span><span></span></a> <br>
                                <a class="theme-btn md-btn bg-color1 brd-btn" href="javascript:void(0);" title="">Large Button (fill)<span></span><span></span><span></span><span></span></a> <br>
                                <a class="theme-btn md-btn bg-color4" href="javascript:void(0);" title="">Large Button (fill)<span></span><span></span><span></span><span></span></a> <br>
                                <a class="theme-btn md-btn bg-color4 brd-btn" href="javascript:void(0);" title="">Large Button (fill)<span></span><span></span><span></span><span></span></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-lg-4">
                            <div class="btn-groups w-100">
                                <a class="theme-btn mid-btn bg-color1" href="javascript:void(0);" title="">Large Button (fill)<span></span><span></span><span></span><span></span></a> <br>
                                <a class="theme-btn mid-btn bg-color1 brd-btn" href="javascript:void(0);" title="">Large Button (fill)<span></span><span></span><span></span><span></span></a> <br>
                                <a class="theme-btn mid-btn bg-color4" href="javascript:void(0);" title="">Large Button (fill)<span></span><span></span><span></span><span></span></a> <br>
                                <a class="theme-btn mid-btn bg-color4 brd-btn" href="javascript:void(0);" title="">Large Button (fill)<span></span><span></span><span></span><span></span></a>
                            </div>
                        </div>
                    </div>
                </div><!-- Buttons Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-120 position-relative">
            <div class="container">
                <hr class="mt-0 mb-110">
                <div class="sec-title position-relative text-center w-100">
                    <h2 class="mb-0 d-inline-block text-decoration-underline">Accordions</h2>
                </div><!-- Section Title -->
                <div class="toggles-wrap position-relative w-100">
                    <div class="toggle v2 w-100" id="toggle">
                        <div class="toggle-item w-100">
                            <h4 class="mb-0">What kind of support do you offer?<i class="fi fi-rr-plus-small"></i></h4>
                            <div class="toggle-content w-100">
                                <p class="mb-0">Your email/chat request will be dealt with by a live agent and not by an automated system. Our live support service are offered 24/7, so you can get in contact with us at anytime.</p>
                                <p class="mb-0">If you have not received your card and it has been over 1 hour please email us straight away. If you are having difficulties in redeeming a card, or have any general question we will be glad to hear from you.</p>
                            </div>
                        </div>
                        <div class="toggle-item w-100">
                            <h4 class="mb-0">Why did I only receive part of my order?<i class="fi fi-rr-plus-small"></i></h4>
                            <div class="toggle-content w-100">
                                <p class="mb-0">Your email/chat request will be dealt with by a live agent and not by an automated system. Our live support service are offered 24/7, so you can get in contact with us at anytime.</p>
                                <p class="mb-0">If you have not received your card and it has been over 1 hour please email us straight away. If you are having difficulties in redeeming a card, or have any general question we will be glad to hear from you.</p>
                            </div>
                        </div>
                        <div class="toggle-item w-100">
                            <h4 class="mb-0">What do I do if my order is damaged?<i class="fi fi-rr-plus-small"></i></h4>
                            <div class="toggle-content w-100">
                                <p class="mb-0">Your email/chat request will be dealt with by a live agent and not by an automated system. Our live support service are offered 24/7, so you can get in contact with us at anytime.</p>
                                <p class="mb-0">If you have not received your card and it has been over 1 hour please email us straight away. If you are having difficulties in redeeming a card, or have any general question we will be glad to hear from you.</p>
                            </div>
                        </div>
                        <div class="toggle-item w-100">
                            <h4 class="mb-0">Can I expedite my shipping?<i class="fi fi-rr-plus-small"></i></h4>
                            <div class="toggle-content w-100">
                                <p class="mb-0">Your email/chat request will be dealt with by a live agent and not by an automated system. Our live support service are offered 24/7, so you can get in contact with us at anytime.</p>
                                <p class="mb-0">If you have not received your card and it has been over 1 hour please email us straight away. If you are having difficulties in redeeming a card, or have any general question we will be glad to hear from you.</p>
                            </div>
                        </div>
                        <div class="toggle-item w-100">
                            <h4 class="mb-0">Can I exchange my order?<i class="fi fi-rr-plus-small"></i></h4>
                            <div class="toggle-content w-100">
                                <p class="mb-0">Your email/chat request will be dealt with by a live agent and not by an automated system. Our live support service are offered 24/7, so you can get in contact with us at anytime.</p>
                                <p class="mb-0">If you have not received your card and it has been over 1 hour please email us straight away. If you are having difficulties in redeeming a card, or have any general question we will be glad to hear from you.</p>
                            </div>
                        </div>
                        <div class="toggle-item w-100">
                            <h4 class="mb-0">My discount code is not working, what do I do?<i class="fi fi-rr-plus-small"></i></h4>
                            <div class="toggle-content w-100">
                                <p class="mb-0">Your email/chat request will be dealt with by a live agent and not by an automated system. Our live support service are offered 24/7, so you can get in contact with us at anytime.</p>
                                <p class="mb-0">If you have not received your card and it has been over 1 hour please email us straight away. If you are having difficulties in redeeming a card, or have any general question we will be glad to hear from you.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Toggles Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-120 position-relative">
            <div class="container">
                <hr class="mt-0 mb-110">
                <div class="sec-title position-relative text-center w-100">
                    <h2 class="mb-0 d-inline-block text-decoration-underline">Tabs</h2>
                </div><!-- Section Title -->
                <div class="tabs-wrap2 position-relative w-100">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tb1-1" type="button">Tab 1</button></li>
                        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#tb1-2" type="button">Tab 2</button></li>
                        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#tb1-3" type="button">Tab 3</button></li>
                        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#tb1-4" type="button">Tab 4</button></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tb1-1">
                            <div class="tb-cont-box w-100">
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tb1-2">
                            <div class="tb-cont-box w-100">
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tb1-3">
                            <div class="tb-cont-box w-100">
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tb1-4">
                            <div class="tb-cont-box w-100">
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>                      
                </div><!-- Tabs Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-120 position-relative">
            <div class="container">
                <hr class="mt-0 mb-110">
                <div class="sec-title position-relative text-center w-100">
                    <h2 class="mb-0 d-inline-block text-decoration-underline">Gallery</h2>
                </div><!-- Section Title -->
                <div class="gallery-wrap position-relative w-100">
                    <div class="gallery-caro nav-style1 v2 pagi-style1 w-100">
                        <div class="gallery-item d-block overflow-hidden position-relative w-100"><a href="assets/images/resources/gallery-img2-1.jpg" data-fancybox title=""><img class="d-block img-fluid w-100" src="assets/images/resources/gallery-img2-1.jpg" alt="Gallery Image 1"></a></div>
                        <div class="gallery-item d-block overflow-hidden position-relative w-100"><a href="assets/images/resources/gallery-img2-2.jpg" data-fancybox title=""><img class="d-block img-fluid w-100" src="assets/images/resources/gallery-img2-2.jpg" alt="Gallery Image 2"></a></div>
                    </div>
                    <div class="row gallery-caro2 nav-style1 v2 pagi-style2 nav-dots-bottom mrg30">
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="gallery-item mb-60 overflow-hidden position-relative w-100"><a href="assets/images/resources/gallery-img1-1.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/gallery-img1-1.jpg" alt="Gallery Image 1"></a></div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="gallery-item mb-60 overflow-hidden position-relative w-100"><a href="assets/images/resources/gallery-img1-2.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/gallery-img1-2.jpg" alt="Gallery Image 2"></a></div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="gallery-item mb-60 overflow-hidden position-relative w-100"><a href="assets/images/resources/gallery-img1-3.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/gallery-img1-3.jpg" alt="Gallery Image 3"></a></div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="gallery-item mb-60 overflow-hidden position-relative w-100"><a href="assets/images/resources/gallery-img1-4.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/gallery-img1-4.jpg" alt="Gallery Image 4"></a></div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="gallery-item mb-60 overflow-hidden position-relative w-100"><a href="assets/images/resources/gallery-img1-5.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/gallery-img1-5.jpg" alt="Gallery Image 5"></a></div>
                        </div>
                    </div>
                </div><!-- Gallery Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-120 position-relative">
            <div class="container">
                <hr class="mt-0 mb-110">
                <div class="sec-title position-relative text-center w-100">
                    <h2 class="mb-0 d-inline-block text-decoration-underline">Banners</h2>
                </div><!-- Section Title -->
                <div class="banners-wrap res-row position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="banner-box position-relative w-100">
                                <h3 class="mb-0">Element Examples</h3>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typsetting industry. The Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
                                <a class="theme-btn bg-color1" href="javascript:void(0);" title="">Explore More<span></span><span></span><span></span><span></span></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="banner-box position-relative w-100">
                                <h3 class="mb-0">Element Examples</h3>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typsetting industry. The Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
                                <a class="theme-btn bg-color1 brd-btn" href="javascript:void(0);" title="">Explore More<span></span><span></span><span></span><span></span></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="banner-box position-relative w-100">
                                <h3 class="mb-0">Element Examples</h3>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typsetting industry. The Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
                                <a class="simple-link" href="javascript:void(0);" title="">Explore More</span></a>
                            </div>
                        </div>
                    </div>
                </div><!-- Banners Wrap -->
                <div class="banners-wrap mt-50 position-relative w-100">
                    <div class="banner-box position-relative w-100">
                        <h2 class="mb-0">Call to Action</h2>
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typsetting industry. The Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p> <br>
                        <a class="theme-btn bg-color1" href="javascript:void(0);" title="">Get Started<span></span><span></span><span></span><span></span></a>
                    </div>
                    <div class="banner-box text-center position-relative w-100">
                        <h2 class="mb-0">Call to Action</h2>
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typsetting industry. The Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p> <br>
                        <a class="theme-btn bg-color1" href="javascript:void(0);" title="">Get Started<span></span><span></span><span></span><span></span></a>
                    </div>
                    <div class="banner-box d-flex flex-wrap align-items-center justify-content-between position-relative w-100">
                        <div class="banner-info">
                            <h2 class="mb-0">Call to Action</h2>
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typsetting industry. The Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
                        </div>
                        <div class="banner-btn">
                            <a class="theme-btn bg-color1" href="javascript:void(0);" title="">Get Started<span></span><span></span><span></span><span></span></a>
                        </div>
                    </div>
                </div><!-- Banners Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-90 pb-120 position-relative">
            <div class="container">
                <hr class="mt-0 mb-110">
                <div class="sec-title position-relative text-center w-100">
                    <h2 class="mb-0 d-inline-block text-decoration-underline">Testimonials</h2>
                </div><!-- Section Title -->
                <div class="testi-wrap position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="testi-info-caro">
                                <div class="testi-info-item position-relative w-100">
                                    <div class="testi-img overflow-hidden position-relative w-100">
                                        <img class="img-fluid w-100" src="assets/images/resources/testi-img1-1.jpg" alt="Testimonial Image 1">
                                    </div>
                                    <div class="testi-info-cap position-absolute">
                                        <p class="mb-0">“This is the best website I have ordered something from. I highly recommend.”</p>
                                        <h4 class="mb-0">John Doe</h4>
                                        <em class="d-block">Doula and health Educator</em>
                                    </div>
                                </div>
                                <div class="testi-info-item position-relative w-100">
                                    <div class="testi-img overflow-hidden position-relative w-100">
                                        <img class="img-fluid w-100" src="assets/images/resources/testi-img1-2.jpg" alt="Testimonial Image 2">
                                    </div>
                                    <div class="testi-info-cap position-absolute">
                                        <p class="mb-0">“This is the best website I have ordered something from.”</p>
                                        <h4 class="mb-0">Amy Smith</h4>
                                        <em class="d-block">Doula and health Educator</em>
                                    </div>
                                </div>
                                <div class="testi-info-item position-relative w-100">
                                    <div class="testi-img overflow-hidden position-relative w-100">
                                        <img class="img-fluid w-100" src="assets/images/resources/testi-img1-3.jpg" alt="Testimonial Image 3">
                                    </div>
                                    <div class="testi-info-cap position-absolute">
                                        <p class="mb-0">“This is the best website I have ordered something from. I highly recommend.”</p>
                                        <h4 class="mb-0">James Carter</h4>
                                        <em class="d-block">Doula and health Educator</em>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="testi-imgs-caro nav-style1 v2 mrg30">
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="testi-img d-block overflow-hidden w-100">
                                        <img class="img-fluid w-100" src="assets/images/resources/testi-img1-1.jpg" alt="Testimonial Image 1">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="testi-img d-block overflow-hidden w-100">
                                        <img class="img-fluid w-100" src="assets/images/resources/testi-img1-2.jpg" alt="Testimonial Image 2">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-6">
                                    <div class="testi-img d-block overflow-hidden w-100">
                                        <img class="img-fluid w-100" src="assets/images/resources/testi-img1-3.jpg" alt="Testimonial Image 3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Testimonials Wrap -->
                <div class="testi-wrap2 bg-color5 mt-120 position-relative w-100">
                    <div class="row align-items-center mrg30">
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="sec-title position-relative w-100">
                                <span class="d-block text-color1">- Our Reviews</span>
                                <h2 class="mb-0">What our Customers are Saying</h2>
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
@endsection


 
