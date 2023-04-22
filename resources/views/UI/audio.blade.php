@extends('layout.master')
@section('title', 'audio')
@section('main')
    <section>
        <div class="page-top-wrap w-100 pt-30 bg-color22 pb-110 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/top-banner-bg.jpg);"></div>
            <div class="container">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}" title="">Home</a></li>
                    <li class="breadcrumb-item"><a href="blog.html" title="">Blog</a></li>
                    <li class="breadcrumb-item active">Audio</li>
                </ol>
                <div class="page-title w-100">
                    <span class="d-block text-color4">- Blog</span>
                    <h2 class="mb-0">Audio</h2>
                </div><!-- Page Title -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 pb-120 position-relative">
            <div class="container">
                <div class="post-detail position-relative w-100">
                    <div class="post-detail-img audio position-relative w-100">
                        <iframe height="300" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/195390349&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                    </div>
                    <div class="post-detail-content w-100">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <div class="post-gallery position-relative w-100">
                            <div class="row mrg30">
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <div class="post-gallery-box no-shadow overflow-hidden position-relative w-100"><a href="assets/images/resources/post-gallery-img2-1.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/post-gallery-img2-1.jpg" alt="Post Gallery Image 1"></a></div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <div class="post-gallery-box no-shadow overflow-hidden position-relative w-100"><a href="assets/images/resources/post-gallery-img2-2.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/post-gallery-img2-2.jpg" alt="Post Gallery Image 2"></a></div>
                                </div>
                            </div>
                        </div><!-- Post Gallery -->
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and sc rambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <blockquote><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section.</p></blockquote>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class="post-detail-share d-flex flex-wrap align-items-center w-100">
                        <h5 class="mb-0">Share on:</h5>
                        <div class="share-links d-flex flex-wrap">
                            <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i>Facebook</a>
                            <a href="https://www.twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i>Twitter</a>
                            <a href="https://www.linkedin.com/" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i>Linkedin</a>
                        </div>
                    </div>
                    <div class="post-detail-author-info bg-color5 align-items-center d-flex flex-wrap w-100">
                        <img class="img-fluid rounded-circle" src="assets/images/resources/author-img.jpg" alt="Author Image 1" height="100" width="100">
                        <div class="post-detail-info-inner">
                            <h5 class="mb-0">Theresa Underwood</h5>
                            <p class="mb-0">Email is a crucial channel in any marketing mix, and never has this been truer than for today’s entrepreneur. Curious what to say? How to say it? How often to hit “send”? Each bite-sized lesson delivers core concepts, guiding questions, and tactical how-to resources. Email is a crucial channel in any marketing mix, and never has this been truer than for today’s entrepreneur.</p>
                            <div class="share-links d-flex flex-wrap">
                                <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.pinterest.com/" title="Pinterest" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                <a href="https://www.linkedin.com/" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div><!-- Post Detail Author Info -->
                    <div class="comments-thread position-relative w-100">
                        <h3>Comments:</h3>
                        <ul class="comments list-unstyled mb-0 w-100">
                            <li>
                                <div class="comment d-flex flex-wrap w-100">
                                    <img class="img-fluid rounded-circle" src="assets/images/resources/comment-img1.jpg" alt="Comment Image 1" height="60" width="60">
                                    <div class="comment-detail">
                                        <h5>Annette Black</h5>
                                        <span class="post-detail-date-reply text-color4">Februrary 14, 2021<a href="javascript:void(0);" title=""><i class="fas fa-reply"></i></a></span>
                                        <p>Email is a crucial channel in any marketing mix, and never has this been truer than for today’s entrepreneur. Curious what to say? How to say it? How often to hit “send”? Each bite-sized lesson delivers core concepts, guiding questions, and tactical how-to resources. Email is a crucial channel in any marketing mix, and never has this been truer than for today’s entrepreneur.</p>
                                    </div>
                                </div><!-- Comments -->
                            </li>
                            <li>
                                <div class="comment d-flex flex-wrap w-100">
                                    <img class="img-fluid rounded-circle" src="assets/images/resources/comment-img2.jpg" alt="Comment Image 2" height="60" width="60">
                                    <div class="comment-detail">
                                        <h5>Wade Warren</h5>
                                        <span class="post-detail-date-reply text-color4">Februrary 14, 2021<a href="javascript:void(0);" title=""><i class="fas fa-reply"></i></a></span>
                                        <p>How to say it? How often to hit “send”? Each bite-sized lesson delivers core concepts, guiding questions, and tactical how-to resources.  Email is a crucial channel in any marketing mix, and never has this been truer than for today’s entrepreneur.</p>
                                    </div>
                                </div><!-- Comments -->
                            </li>
                            <li>
                                <div class="comment d-flex flex-wrap w-100">
                                    <img class="img-fluid rounded-circle" src="assets/images/resources/comment-img3.jpg" alt="Comment Image 3" height="60" width="60">
                                    <div class="comment-detail">
                                        <h5>Ronald Richards</h5>
                                        <span class="post-detail-date-reply text-color4">Februrary 14, 2021<a href="javascript:void(0);" title=""><i class="fas fa-reply"></i></a></span>
                                        <p>Curious what to say? How to say it? How often to hit “send”? Each bite-sized lesson delivers core concepts, guiding questions, and tactical how-to resources.  Email is a crucial channel in any marketing mix, and never has this been truer than for today’s entrepreneur. Email is a crucial channel in any marketing mix, and never has this been truer than for today’s entrepreneur. Curious what to say? Email is a crucial channel in any marketing mix, and never has this been truer than for today’s entrepreneur. Curious what to say?</p>
                                    </div>
                                </div><!-- Comments -->
                            </li>
                        </ul><!-- Comments -->
                    </div><!-- Comments Thread -->
                    <div class="comment-reply bg-color5 position-relative w-100">
                        <h3>Leave a comment</h3>
                        <form>
                            <div class="row mrg30">
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <div class="field-box v2 position-relative w-100">
                                        <label>Name</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <div class="field-box v2 position-relative w-100">
                                        <label>Email</label>
                                        <input type="email">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <div class="field-box v2 position-relative w-100">
                                        <label>Company Name</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <div class="field-box v2 position-relative w-100">
                                        <label>Website</label>
                                        <input type="url">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="field-box v2 position-relative w-100">
                                        <label>Comment</label>
                                        <textarea placeholder="Write your comment here..."></textarea>
                                    </div>
                                    <div class="field-btn position-relative w-100">
                                        <button class="theme-btn bg-color1" type="submit">Send<span></span><span></span><span></span><span></span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!-- Comment Reply -->
                </div><!-- Post Detail -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pb-120 position-relative">
            <div class="container">
                <div class="sec-title-wrap d-flex flex-wrap align-items-end justify-content-between w-100">
                    <div class="sec-title position-relative">
                        <span class="d-block text-color4">- Blog</span>
                        <h2 class="mb-0">Recent Post</h2>
                    </div><!-- Section Title -->
                    <div class="sec-btn">
                        <a class="theme-btn bg-color1 brd-btn" href="blog.html" title="">View All<span></span><span></span><span></span><span></span></a>
                    </div>
                </div><!-- Section Title Wrap -->
                <div class="posts-wrap res-row position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="post-box w-100">
                                <div class="post-img overflow-hidden position-relative w-100">
                                    <a href="blog-detail.html" title=""><img class="img-fluid w-100" src="assets/images/resources/post-img1-1.jpg" alt="Post Image 1"></a>
                                </div>
                                <div class="post-info w-100">
                                    <h4 class="mb-0"><a href="blog-detail.html" title="">They're born from love and bred for individuality</a></h4>
                                    <span class="post-date d-block"><a href="javascript:void(0);" title="">Jun 16, 2021</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="post-box w-100">
                                <div class="post-img overflow-hidden position-relative w-100">
                                    <a href="blog-detail.html" title=""><img class="img-fluid w-100" src="assets/images/resources/post-img1-2.jpg" alt="Post Image 2"></a>
                                </div>
                                <div class="post-info w-100">
                                    <h4 class="mb-0"><a href="blog-detail.html" title="">They're born from love and bred for individuality</a></h4>
                                    <span class="post-date d-block"><a href="javascript:void(0);" title="">Jun 16, 2021</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="post-box w-100">
                                <div class="post-img overflow-hidden position-relative w-100">
                                    <a href="blog-detail2.html" title=""><img class="img-fluid w-100" src="assets/images/resources/post-img1-3.jpg" alt="Post Image 3"></a>
                                </div>
                                <div class="post-info w-100">
                                    <h4 class="mb-0"><a href="blog-detail2.html" title="">They're born from love and bred for individuality</a></h4>
                                    <span class="post-date d-block"><a href="javascript:void(0);" title="">Jun 16, 2021</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Posts Wrap -->
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


