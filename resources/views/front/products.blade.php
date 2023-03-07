@extends('layouts.master')

@section('content')

<div id="page-content">
    <!--Best Seller With Tabs-->
    <section class="section product-slider tab-slider-product">
        <div class="container">
            <div class="tabs-listing">
                <div class="tab_container">
                    <h3 class="tab_drawer_heading d_active body-font text-uppercase text-center" rel="tab1"> <i class="an an-angle-down-r" aria-hidden="true"></i></h3>
                    <div id="tab1" class="tab_content">
                        <div class="grid-products">
                            <div class="row">
                                @if($business->products->count() > 0)
                                    @foreach($business->products as $key => $product)
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                        <!-- start product image -->
                                        <div class="product-image">
                                            <!-- start product image -->
                                            <a href="product-layout1.html" class="product-img">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload" data-src="{{ asset('images/products/'.$product->cover_image) }}" src="{{ asset('images/products/'.$product->cover_image) }}" alt="image" title="">
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload" data-src="{{ asset('images/products/'.$product->cover_image) }}" src="{{ asset('images/products/'.$product->cover_image) }}" alt="image" title="">
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
                                                        <a class="btn-icon btn btn-addto-cart pro-addtocart-popup" href="#pro-addtocart-popup">
                                                            <i class="icon an an-cart-l"></i> <span class="tooltip-label">Contact</span>
                                                        </a>
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
                                                <a href="product-layout1.html">{{$product->name}}</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <!-- <span class="old-price">$199.00</span> -->
                                                <span class="price">$219.00</span>
                                            </div>
                                        
                                            
                                        </div>
                                        <!-- End product details -->
                                    </div> 
                                    @endforeach

                                @else
                                    <div class="text-center alert alert-info">
                                        <h3>Ooops, please check back later, no products uploaded for this business yet.</h3>
                                        <a href="/" class="btn btn-primary">Back Home</a>
                                    </div>
                                @endif
                                
                            </div>
                        </div>
                        <!-- <div class="view-collection text-center mt-3 mt-md-4">
                            <a href="shop-top-filter.html" class="btn btn-primary">View Collection</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Best Seller With Tabs-->
</div>

@endsection