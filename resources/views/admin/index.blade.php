@extends('layouts.admin_master')

@section('content')    

    <div class="col-xl-9 col-lg-10 col-md-12">
        <!-- Tab panes -->
        <div class="tab-content dashboard-content">
            <!-- Dashboard -->
            <div id="dashboard" class="tab-pane fade active show">
            
                <div class="row user-profile mt-4">
                    
                    <div class="col-12 col-lg-6">
                        <ul class="profile-order mt-3 mt-lg-0">
                            <li>
                                <h3 class="mb-1">16</h3>
                                All Orders
                            </li>
                            <li>
                                <h3 class="mb-1">02</h3>
                                Awaiting Payments
                            </li>
                            <li>
                                <h3 class="mb-1">00</h3>
                                Awaiting Shipment
                            </li>
                            <li>
                                <h3 class="mb-1">01</h3>
                                Awaiting Delivery
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <!-- End Dashboard -->

           
            
            <!-- End Wishlist -->
        </div>
        <!-- End Tab panes -->
    </div>
                
@endsection