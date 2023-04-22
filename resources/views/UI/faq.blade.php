@extends('layout.master')
@section('title', 'Faq')
@section('main')
    <section>
        <div class="page-top-wrap w-100 pt-30 bg-color22 pb-110 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/top-banner-bg.jpg);"></div>
            <div class="container">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}" title="">Home</a></li>
                    <li class="breadcrumb-item active">FAQs</li>
                </ol>
                <div class="page-title w-100">
                    <span class="d-block text-color4">- FAQs</span>
                    <h2 class="mb-0">Frequently Asked Questions</h2>
                </div><!-- Page Title -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 pb-120 position-relative">
            <div class="container">
                <div class="sec-title position-relative text-center w-100">
                    <h2 class="mb-0">Frequently Asked Questions</h2>
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



