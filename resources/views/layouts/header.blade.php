<body class="template-index index-demo2 modal-popup-style">
    <!-- Page Loader -->
    <div id="pre-loader"><img src="{{ asset('default/assets/images/loader.gif')}}" alt="Loading..." /></div>
    <!-- End Page Loader -->

    <!--Page Wrapper-->
    <div class="page-wrapper">
        <!--Header-->
        
        <header id="header" class="header header-main d-flex align-items-center header-2">
            <div class="container">        
                <div class="row">
                    <!--Logo / Menu Toggle-->
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 align-self-center justify-content-start d-flex">
                        <!--Mobile Toggle-->
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open me-3 d-lg-none"><i class="icon an an-times-l"></i><i class="icon an an-bars-l"></i></button>
                        <!--End Mobile Toggle-->
                        <!--Logo-->
                        <div class="logo"><a href="/"><img class="logo-img mh-100" src="{{ asset('default/assets/images/fut_logo.png')}}" alt="Acadomart" title="Acadomart" width="40" /><span>Acadomart</span> </a></div>
                        <!--End Logo-->
                    </div>
                    <!--End Logo / Menu Toggle-->
                    <!--Main Navigation Desktop-->
                    <div class="col-1 col-sm-1 col-md-1 col-lg-6 align-self-center d-menu-col">
                        <!--Desktop Menu-->
                        <div class="row">
                            <div class="col-1 col-sm-12 col-md-12 col-lg-12 align-self-center d-menu-col">
                                <!--Desktop Menu-->
                                <nav class="grid__item" id="AccessibleNav">
                                    <ul id="siteNav" class="site-nav medium center hidearrow">
                                        <!-- <li class="lvl1 parent megamenu"><a href="#;">Home <i class="an an-angle-down-l"></i></a>
                                            <div class="megamenu style1">
                                                <div class="row">
                                                    <div class="col-md-8 col-lg-8">
                                                        <div class="row">
                                                            <div class="lvl-1 col-md-5 col-lg-4">
                                                                <a href="#" class="site-nav lvl-1 menu-title">Home Styles</a>
                                                                <ul class="subLinks">
                                                                    <li class="lvl-2"><a href="index.html" class="site-nav lvl-2">Home 01 - Default</a></li>
                                                                    <li class="lvl-2"><a href="index-demo2.html" class="site-nav lvl-2">Home 02 - Minimal</a></li>
                                                                    <li class="lvl-2"><a href="index-demo3.html" class="site-nav lvl-2">Home 03 - Colorful</a></li>
                                                                    <li class="lvl-2"><a href="index-demo4.html" class="site-nav lvl-2">Home 04 - Modern</a></li>
                                                                    <li class="lvl-2"><a href="index-demo5.html" class="site-nav lvl-2">Home 05 - Kids Clothing</a></li>
                                                                    <li class="lvl-2"><a href="index-demo6.html" class="site-nav lvl-2">Home 06 - Single Product</a></li>
                                                                    <li class="lvl-2"><a href="index-demo7.html" class="site-nav lvl-2">Home 07 - Glamour</a></li>
                                                                    <li class="lvl-2"><a href="index-demo8.html" class="site-nav lvl-2">Home 08 - Simple</a></li>
                                                                    <li class="lvl-2"><a href="index-demo9.html" class="site-nav lvl-2">Home 09 - Cool <span class="lbl nm_label1">Hot</span></a></li>
                                                                    <li class="lvl-2"><a href="index-demo10.html" class="site-nav lvl-2">Home 10 - Cosmetic</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="lvl-1 col-md-5 col-lg-4">
                                                                <a href="#" class="site-nav lvl-1 menu-title">Home Styles</a>
                                                                <ul class="subLinks">
                                                                    <li class="lvl-2"><a href="index-demo11.html" class="site-nav lvl-2">Home 11 - Pets <span class="lbl nm_label3">Popular</span></a></li>
                                                                    <li class="lvl-2"><a href="index-demo12.html" class="site-nav lvl-2">Home 12 - Tools & Parts</a></li>
                                                                    <li class="lvl-2"><a href="index-demo13.html" class="site-nav lvl-2">Home 13 - Watches <span class="lbl nm_label1">Hot</span></a></li>
                                                                    <li class="lvl-2"><a href="index-demo14.html" class="site-nav lvl-2">Home 14 - Food</a></li>
                                                                    <li class="lvl-2"><a href="index-demo15.html" class="site-nav lvl-2">Home 15 - Christmas</a></li>
                                                                    <li class="lvl-2"><a href="index-demo16.html" class="site-nav lvl-2">Home 16 - Phone Case</a></li>
                                                                    <li class="lvl-2"><a href="index-demo17.html" class="site-nav lvl-2">Home 17 - Jewelry</a></li>
                                                                    <li class="lvl-2"><a href="index-demo18.html" class="site-nav lvl-2">Home 18 - Bag <span class="lbl nm_label3">Popular</span></a></li>
                                                                    <li class="lvl-2"><a href="index-demo19.html" class="site-nav lvl-2">Home 19 - Swimwear</a></li>
                                                                    <li class="lvl-2"><a href="index-demo20.html" class="site-nav lvl-2">Home 20 - Furniture <span class="lbl nm_label2">New</span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="lvl-1 col-md-5 col-lg-4">
                                                                <a href="#" class="site-nav lvl-1 menu-title">Home Styles</a>
                                                                <ul class="subLinks">
                                                                    <li class="lvl-2"><a href="index-demo21.html" class="site-nav lvl-2">Home 21 - Party Supplies <span class="lbl nm_label2">New</span></a></li>
                                                                    <li class="lvl-2"><a href="index-demo22.html" class="site-nav lvl-2">Home 22 - Digital <span class="lbl nm_label2">New</span></a></li>
                                                                    <li class="lvl-2"><a href="index-demo23.html" class="site-nav lvl-2">Home 23 - Vogue <span class="lbl nm_label2">New</span></a></li>
                                                                    <li class="lvl-2"><a href="index-demo24.html" class="site-nav lvl-2">Home 24 - Glamour <span class="lbl nm_label2">New</span></a></li>
                                                                </ul>

                                                                <div class="row mm-Banners mt-3">
                                                                    <div class="col-md-12 col-lg-12 imageCol text-center">
                                                                        <div class="menubox position-relative">
                                                                            <a href="index-demo5.html" class="mb-0"><img class="blur-up lazyload" src="{{ asset('default/assets/images/megamenu/megamenu-banner7.png')}}" data-src="{{ asset('default/assets/images/megamenu/megamenu-banner7.png')}}" alt="image"/></a>
                                                                            <p class="position-absolute bottom-0 start-50 translate-middle-x"><a href="index-demo5.html" class="title text-uppercase mb-3">Kids Store</a></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-lg-4">
                                                        <div class="row mm-Banners">
                                                            <div class="col-md-12 col-lg-12 imageCol text-center">
                                                                <div class="menubox position-relative">
                                                                    <a href="index-demo6.html" class="mb-0"><img class="blur-up lazyload" src="{{ asset('default/assets/images/megamenu/megamenu-banner8.png')}}" data-src="{{ asset('default/assets/images/megamenu/megamenu-banner8.png')}}" alt="image"/></a>
                                                                    <p class="position-absolute bottom-0 start-50 translate-middle-x"><a href="index-demo6.html" class="title text-uppercase">Single Product Layout</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> -->
                                        <li class="lvl-2"><a href="/" class="site-nav lvl-2">Home </a></li>
                                    </ul>
                                </nav>
                                <!--End Desktop Menu-->
                            </div>
                        </div>                
                        <!--End Desktop Menu-->
                    </div>
                    <!--End Main Navigation Desktop-->
                    <!--Right Action-->
                    <div class="col-6 col-sm-6 col-md-6 col-lg-3 align-self-center icons-col text-right d-flex justify-content-end">
                        <!--Search-->
                        <div class="site-search iconset"><i class="icon an an-search-l"></i><span class="tooltip-label">Search</span></div>
                        <!--End Search-->
                        <!--Wishlist-->
                        
                        <!--End Wishlist-->
                        <!--Setting Dropdown-->
                        <div class="user-link iconset"><i class="icon an an-user-2"></i><span class="tooltip-label">Account</span></div>
                        <div id="userLinks">
                            <ul class="user-links">
                                <li><a href="{{ route('login') }} ">Login</a></li>
                                <!-- <li><a href="register.html">Sign Up</a></li>
                                <li><a href="my-wishlist.html">Wishlist</a></li>
                                <li><a href="compare-style1.html">Compare</a></li> -->
                            </ul>
                        </div>
                        <!--End Setting Dropdown-->
                        <!--Minicart Drawer-->
                        
                        <!--End Minicart Drawer-->
                        <!--Setting Dropdown-->
                        
                        
                        <!--End Setting Dropdown-->
                    </div>
                    <!--End Right Action-->
                </div>
            </div>
            <!--Search Popup-->
            <div id="search-popup" class="search-drawer">
                <div class="container">
                    <span class="closeSearch an an-times-l"></span>
                    <form class="form minisearch" id="header-search" action="#" method="get">
                        <label class="label"><span>Search</span></label>
                        <div class="control">
                            <div class="searchField">
                                <div class="search-category">
                                    <!-- <select id="rgsearch-category" name="rgsearch[category]" data-default="All Categories">
                                        <option value="00" label="All Categories" selected="selected">All Categories</option>
                                        <optgroup id="rgsearch-shop" label="Shop">
                                            <option value="0">- All</option>
                                            <option value="1">- Men</option>
                                            <option value="2">- Women</option>
                                            <option value="3">- Shoes</option>
                                            <option value="4">- Blouses</option>
                                            <option value="5">- Pullovers</option>
                                            <option value="6">- Bags</option>
                                            <option value="7">- Accessories</option>
                                        </optgroup>
                                    </select> -->
                                </div>
                                <div class="input-box">
                                    <button type="submit" title="Search" class="action search" disabled=""><i class="icon an an-search-l"></i></button>
                                    <input type="text" name="q" value="" placeholder="Search by keyword or #" class="input-text">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--End Search Popup-->
        </header>
        <!--End Header-->
        <!--Mobile Menu-->
        <div class="mobile-nav-wrapper" role="navigation">
            <div class="closemobileMenu"><i class="icon an an-times-l pull-right"></i> Close Menu</div>
            <ul id="MobileNav" class="mobile-nav">
                <li class="lvl1 bottom-link"><a href="/">Home</a></li>
                <li class="acLink"></li>
                <li class="lvl1 bottom-link"><a href="login.html">Login</a></li>
                <!-- <li class="lvl1 bottom-link"><a href="register.html">Signup</a></li>
                <li class="lvl1 bottom-link"><a href="my-wishlist.html">Wishlist</a></li>
                <li class="lvl1 bottom-link"><a href="compare-style1.html">Compare</a></li>
                <li class="help bottom-link"><b>NEED HELP?</b><br>Call: +41 525 523 5687</li> -->
            </ul>
        </div>
        <!--End Mobile Menu-->