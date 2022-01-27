<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blog</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/templatemo_misc.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/templatemo_style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/testimonails-slider.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
        <header>
            <div id="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="home-account">
                                <a href="#">Home</a>
                                <a href="#">My account</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cart-info">
                                <i class="fa fa-shopping-cart"></i>
                                (<a href="#">5 items</a>) in your cart (<a href="#">$45.80</a>)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="logo">
                                <a href="#"><img src="/images/logo.png" title="Grill Template" alt="Grill Website Template" ></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="main-menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about-us.html">About</a></li>
                                    <li><a href="products.html">Products</a></li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="search-box">
                                <form name="search_form" method="get" class="search_form">
                                    <input id="search" type="text" />
                                    <input type="submit" id="search-button" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        <footer>
            <div class="container">
                <div class="top-footer">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="subscribe-form">
                                <span>Get in touch with us</span>
                                <form method="get" class="subscribeForm">
                                    <input id="subscribe" type="text" />
                                    <input type="submit" id="submitButton" />
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="social-bottom">
                                <span>Follow us:</span>
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-rss"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-footer">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="about">
                                <h4 class="footer-title">About Grill</h4>
                                <p>Grill is free HTML5 template by <span class="blue">template</span><span class="green">mo</span> and it is a free responsive bootstrap layout that can be applied for any purpose.
                                    <br><br>Credit goes to <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for photos used in this template. Nam commodo erat quis ligula placerat viverra.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="shop-list">
                                <h4 class="footer-title">Shop Categories</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>New Grill Menu</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Healthy Fresh Juices</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Spicy Delicious Meals</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Simple Italian Pizzas</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Pure Good Yogurts</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>Ice-cream for kids</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="recent-posts">
                                <h4 class="footer-title">Recent posts</h4>
                                <div class="recent-post">
                                    <div class="recent-post-thumb">
                                        <img src="/images/recent-post1.jpg" alt="">
                                    </div>
                                    <div class="recent-post-info">
                                        <h6><a href="#">Delicious and Healthy Menus</a></h6>
                                        <span>24/12/2084</span>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="recent-post-thumb">
                                        <img src="/images/recent-post2.jpg" alt="">
                                    </div>
                                    <div class="recent-post-info">
                                        <h6><a href="#">Simple and effective meals</a></h6>
                                        <span>18/12/2084</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="more-info">
                                <h4 class="footer-title">More info</h4>
                                <p>Sed dignissim, diam id molestie faucibus, purus nisl pretium quam, in pulvinar velit massa id elit.</p>
                                <ul>
                                    <li><i class="fa fa-phone"></i>010-020-0340</li>
                                    <li><i class="fa fa-globe"></i>123 Dagon Studio, Yakin Street, Digital Estate</li>
                                    <li><i class="fa fa-envelope"></i><a href="#">info@company.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-footer">
                    <p>
                        	<span>Copyright © 2084 <a href="#">Your Company Name</a>
                            | Design: <a rel="nofollow" href="http://www.templatemo.com" target="_parent"><span class="blue">template</span><span class="green">mo</span></a></span>
                    </p>
                </div>

            </div>
        </footer>
</body>
<script src="{{ asset('js/vendor/jquery-1.11.0.min.js')}}"></script>
<script src="{{ asset('js/vendor/jquery.gmap3.min.js')}}"></script>
<script src="{{ asset('js/plugins.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>

</html>
