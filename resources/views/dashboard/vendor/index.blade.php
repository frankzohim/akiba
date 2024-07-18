@extends('layouts.frontoffice.master')
@section('title', 'Vendor Dashboard')
@section('content')

 @include('layouts.backoffice.vendor.header')
                
                @if($stores != [])
                 
                    <form class="ps-form--vendor-datetimepicker" action="index.html" method="get">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text" id="time-from">From</span></div>
                                    <input class="form-control" aria-label="Username" aria-describedby="time-from">
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text" id="time-form">To</span></div>
                                    <input class="form-control" aria-label="Username" aria-describedby="time-to">
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                                <button class="ps-btn"><i class="icon-sync2"></i> Update</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                            <figure class="ps-block--vendor-status">
                                <figcaption>Commission Due</figcaption>
                                <table class="table ps-table ps-table--vendor-status">
                                    <tbody>
                                        <tr>
                                            <td>Product</td>
                                            <td>$12.1010,444</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping</td>
                                            <td>$00.000</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Total</strong></td>
                                            <td>$12.1010,444</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </figure>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                            <figure class="ps-block--vendor-status">
                                <figcaption>Commission Paid</figcaption>
                                <table class="table ps-table ps-table--vendor-status">
                                    <tbody>
                                        <tr>
                                            <td>Product</td>
                                            <td>$12.1010,444</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping</td>
                                            <td>$00.000</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Total</strong></td>
                                            <td>$12.1010,444</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </figure>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                            <figure class="ps-block--vendor-status">
                                <figcaption>Order Totals (25)</figcaption>
                                <canvas id="line-chart"></canvas>
                            </figure>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                            <figure class="ps-block--vendor-status">
                                <figcaption>Product Totals (3)</figcaption>
                                <canvas id="pie-chart"></canvas>
                            </figure>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                            <figure class="ps-block--vendor-status">
                                <figcaption>Recent Orders</figcaption>
                                <table class="table ps-table ps-table--vendor">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Product</th>
                                            <th>Totals</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">MS46891357</a>
                                                <p>Nov 4, 2017</p>
                                            </td>
                                            <td><a href="#">1 x Marshall Kilburn Portable...</a>
                                                <p>Shipping</p>
                                            </td>
                                            <td>
                                                <p>$295.47</p>
                                                <p>$0.00</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">MS46891357</a>
                                                <p>Nov 2, 2017</p>
                                            </td>
                                            <td><a href="#">1 x Unero Military Classical Ba...</a>
                                                <p>Shipping</p>
                                            </td>
                                            <td>
                                                <p>$45.39</p>
                                                <p>$0.00</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="ps-block__footer"><a href="#">View All Orders</a></div>
                            </figure>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                            <figure class="ps-block--vendor-status">
                                <figcaption>Recent Products</figcaption>
                                <table class="table ps-table ps-table--vendor">
                                    <thead>
                                        <tr>
                                            <th><i class="icon-picture"></i></th>
                                            <th>Product</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#"><img src="img/products/electronic/1.jpg" alt="" width="50"></a></td>
                                            <td><a href="#">Marshall Kilburn Wireless...</a>
                                                <p>$295.47</p>
                                            </td>
                                            <td>
                                                <p class="ps-tag--in-stock">In Stock</p>
                                                <p>Published: Oct 10, 2021</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#"><img src="img/products/electronic/2.jpg" alt="" width="50"></a></td>
                                            <td><a href="#">Marshall Kilburn Wireless...</a>
                                                <p>$295.47</p>
                                            </td>
                                            <td>
                                                <p class="ps-tag--in-stock">In Stock</p>
                                                <p>Published: Oct 10, 2021</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="ps-block__footer"><a href="#">View All Orders</a></div>
                            </figure>
                        </div>
                    </div>
                @else
                     <div class="ps-form--vendor-datetimepicker">
                        <div class="row">
                            <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <div class="ps-form__left">
                                    <h3>No Store Found</h3>
                                    <p>You need to add a store to start selling, store must be validated.</p>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <div class="ps-form__right">
                                    <div class="form-group--nest">
                                        <a href="{{ route('db.store.create')}}">
                                            <button class="ps-btn"><i class="icon-plus"></i> Add Store</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                @endif
            
         @include('layouts.backoffice.vendor.footer')
@endsection