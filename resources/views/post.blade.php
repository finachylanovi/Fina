<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Original - Lifestyle Blog Template</title>

    <!-- Favicon -->
    <link rel="icon" href="assets/img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

    <!-- Subscribe Modal -->
    <div class="subscribe-newsletter-area">
        <div class="modal fade" id="subsModal" tabindex="-1" role="dialog" aria-labelledby="subsModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-body">
                        <h5 class="title">Subscribe to my newsletter</h5>
                        <form action="#" class="newsletterForm" method="post">
                            <input type="email" name="email" id="subscribesForm2" placeholder="Your e-mail here">
                            <button type="submit" class="btn original-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Breaking News Area -->
                    <div class="col-12 col-sm-8">
                        <div class="breaking-news-area">
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                    <li><a href="#">Hello World!</a></li>
                                    <li><a href="#">Hello Universe!</a></li>
                                    <li><a href="#">Hello Original!</a></li>
                                    <li><a href="#">Hello Earth!</a></li>
                                    <li><a href="#">Hello Colorlib!</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Top Social Area -->
                    <div class="col-12 col-sm-4">
                        <div class="top-social-area">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo Area -->
        <div class="logo-area text-center">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <a href="/blog" class="original-logo"><img src="assets/img/core-img/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nav Area -->
        <div class="original-nav-area" id="stickyNav">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between">

                        <!-- Subscribe btn -->
                        <div class="subscribe-btn">
                            <a href="#" class="btn subscribe-btn" data-toggle="modal" data-target="#subsModal">Subscribe</a>
                        </div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu" id="originalNav">
                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="/blog">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="#">Catagory</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Catagory 1</a></li>
                                            <li><a href="#">Catagory 1</a></li>
                                            <li><a href="#">Catagory 1</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Catagory 2</a></li>
                                                    <li><a href="#">Catagory 2</a></li>
                                                    <li><a href="#">Catagory 2</a>
                                                        <ul class="dropdown">
                                                            <li><a href="#">Catagory 3</a></li>
                                                            <li><a href="#">Catagory 3</a></li>
                                                            <li><a href="#">Catagory 3</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Catagory 2</a></li>
                                                    <li><a href="#">Catagory 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Catagory 1</a></li>
                                            <li><a href="#">Catagory 1</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/post">Single Post</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>

                                <!-- Search Form  -->
                                <div id="search-wrapper">
                                    <form action="#">
                                        <input type="text" id="search" placeholder="Search something...">
                                        <div id="close-icon"></div>
                                        <input class="d-none" type="submit" value="">
                                    </form>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Single Blog Area Start ##### -->
    <div class="single-blog-wrapper section-padding-0-100">

        <!-- Single Blog Area  -->
        <div class="single-blog-area blog-style-2 mb-50">
            <div class="single-blog-thumbnail">
                <img src="assets/original/img/bg-img/b5.jpg" alt="">
                <div class="post-tag-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="post-date">
                                    <a href="#">12 <span>march</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- ##### Post Content Area ##### -->
                <div class="col-12 col-lg-9">
                    <!-- Single Blog Area  -->
                    <div class="single-blog-area blog-style-2 mb-50">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag">Lifestyle</a>
                            <h4><a href="#" class="post-headline mb-0">Party people in the house</a></h4>
                            <div class="post-meta mb-50">
                                <p>By <a href="#">james smith</a></p>
                                <p>3 comments</p>
                            </div>
                            <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus. Quisque molestie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. Donec sagittis lacus sit amet augue sodales, vel cursus enim tristique. Maecenas vitae massa ut est consectetur sagittis quis vitae tortor. Sed et massa vel nisi dapibus pretium et et leo.</p>

                            <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Morbi sodales, dolor id ultricies dictum, diam odio tempor purus, at ultrices elit nulla ac nisl. Vestibulum enim sapien, blandit finibus elit vitae, venenatis tempor enim. Ut varius eros at fringilla aliquet. Sed sed sodales quam. Nam fermentum sed turpis sollicitudin lobortis.</p>

                            <p>Proin a nibh dignissim, volutpat mauris vitae, pellentesque nisi. In euismod non ligula at gravida. Nunc blandit eget enim vel mattis. Sed semper, purus ac suscipit scelerisque, eros dui fermentum tortor, vitae facilisis lacus nulla sit amet diam. Nullam eget sagittis mi. Suspendisse vitae volutpat lorem. Cras porta velit id sagittis ultrices. Maecenas efficitur tellus ac aliquam molestie. Morbi vel ipsum gravida, ultricies nunc sed, posuere purus. Donec ipsum lectus, congue ut fermentum vitae, molestie hendrerit erat. Sed lacinia accumsan egestas. Cras ac ipsum a ante placerat pellentesque.</p>
                        </div>
                    </div>


    <!-- ##### Instagram Feed Area Start ##### -->
    <div class="instagram-feed-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="insta-title">
                        <h5>Follow us @ Instagram</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Instagram Slides -->
        <div class="instagram-slides owl-carousel">
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="assets/img/instagram-img/1.png" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="assets/img/instagram-img/2.png" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="assets/img/instagram-img/3.png" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="assets/img/instagram-img/4.png" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="assets/img/instagram-img/5.png" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="assets/img/instagram-img/6.png" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed">
                <img src="assets/img/instagram-img/7.png" alt="">
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Instagram Feed Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Footer Nav Area -->
                    <div class="classy-nav-container breakpoint-off">
                        <!-- Classy Menu -->
                        <nav class="classy-navbar justify-content-center">

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>

                            <!-- Menu -->
                            <div class="classy-menu">

                                <!-- close btn -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!-- Footer Social Area -->
                    <div class="footer-social-area mt-30">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

   <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="assets/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="assets/js/plugins.js"></script>
    <!-- Active js -->
    <script src="assets/js/active.js"></script>

</body>

</html>