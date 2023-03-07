@extends('layouts.master')

@section('content')

<div id="page-content">
    <!--Home slider-->
    <section class="slideshow slideshow-wrapper">
        <div class="home-slideshow">
            <div class="slide">
                <div class="blur-up lazyload">
                    <img class="blur-up lazyload desktop-hide" data-src="{{ asset('default/assets/images/agromat.jpg')}}" src="{{ asset('default/assets/images/agromat.jpg')}}" alt="HIGH CONVERTING" title="HIGH CONVERTING" />
                    
                    <div class="container">
                        <div class="slideshow-content slideshow-overlay middle d-flex justify-content-center align-items-center">
                            <div class="slideshow-content-in text-center">
                                <div class="wrap-caption animation style1 px-2" >
                                    <h2 class="h1 mega-title ss-mega-title fs-1 text-capitalize text-white" style="background-color:rgba(0, 0, 0, 0.5);">Entreprenuership Centre, <br> Federal University of Technology, Minna.</h2>
                                    <em> <span class="text-white" style="background-color:rgba(0, 0, 0, 0.5); font-size: 19px;">Turning Academic Ideas into Viable Businesses and Ventures</span></em>
                                    
                                    <!-- <span class="mega-subtitle fs-6 ss-sub-title d-md-block d-lg-block d-none text-white">Turning Academic Ideas into Viable Businesses and Ventures</span> -->
                                    <!-- <div class="ss-btnWrap mt-3 mt-md-0">
                                        <a class="btn btn-lg border-0 btn-primary" href="shop-top-filter.html">Shop Women</a>
                                        <a class="btn btn-lg border-0 btn-primary" href="shop-top-filter.html">Shop Men</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!--End Home slider-->

    <!--Best Seller With Tabs-->
    <section class="section product-slider tab-slider-product">
        <div class="container">
            <div class="section-header">
                <!-- <h2>Turning Academic Ideas into Viable Businesses and Ventures</h2> -->
                <!-- <p>Browse the huge variety of our best seller</p> -->
            </div>
            <div class="tabs-listing">
                <div class="tab_container">
                    <h3 class="tab_drawer_heading d_active body-font text-uppercase text-center" rel="tab1"> <i class="an an-angle-down-r" aria-hidden="true"></i></h3>
                    <div id="tab1" class="tab_content">
                        <div class="grid-products">
                            <div class="row">
                                @foreach($businesses as $key => $business)
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#" class="product-img">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{ asset('images/business/'.$business->cover_image) }}" src="{{ asset('images/business/'.$business->cover_image) }}" alt="image" title="">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{ asset('images/business/'.$business->cover_image) }}" src="{{ asset('images/business/'.$business->cover_image) }}" alt="image" title="">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                        
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->

                                        <!--Product Button-->
                                        <div class="button-set style2">
                                            <ul>
                                                <li>
                                                    <!--Cart Button-->
                                                    <!-- <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                        <i class="icon an an-cart-l"></i> <span class="tooltip-label">Contact</span>
                                                    </a> -->
                                                    <!--end Cart Button-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--End Product Button-->
                                    </div>
                                    <!-- end product image -->
                                    <!--start product details -->
                                    <div class="product-details text-left">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">{{ $business->name }}</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <!-- <span class="old-price">$199.00</span> -->
                                            <!-- <span class="price">$219.00</span> -->
                                        </div>
                                       
                                        
                                    </div>
                                    <!-- End product details -->
                                    <div class="view-collection text-center mt-3 mt-md-4">
                                        @if($business->link == "")
                                            <a href="{{ route('show.business', ['slug' => $business->slug]) }}" class="btn btn-primary">View Business</a>
                                        @else
                                            <a href="{{ $business->link }}" target="_blank" class="btn btn-primary">View Business</a>
                                        @endif
                                    </div>
                                </div> 
                                @endforeach
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Best Seller With Tabs-->
</div>

@endsection