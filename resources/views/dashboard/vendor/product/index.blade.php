@extends('layouts.frontoffice.master')
@section('title', 'Products')
@section('content')

 @include('layouts.backoffice.vendor.header')
                 
                <div class="d-flex flex-row-reverse bd-highlight">
                    <div class="p-2 bd-highlight"> 
                        <div class="ps-section__actions">
                            <a class="ps-btn success" href="{{ route('db.product.create')}}">
                                <i class="icon icon-plus mr-2"></i>New Product
                            </a>
                        </div>
                    </div>

                </div>

                   
                    <div class="row">

                       
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <figure class="ps-block--vendor-status">
                                <figcaption>Products</figcaption>
                                <table class="table ps-table ps-table--vendor">
                                    <thead>
                                        <tr>
                                            <th><i class="icon-picture"></i></th>
                                            <th>Product</th>
                                            <th>SKU</th>
                                            <th>Price</th>
                                            <th>Brand</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#"><img src="{{ asset('assets/img/products/electronic/1.jpg')}}" alt="" width="50"></a></td>
                                            <td><a href="#">Marshall Kilburn Wireless...</a>
                                                <p>$295.47</p>
                                            </td>
                                            <td>
                                                AB123456789-1
                                            </td>
                                            <td>
                                                <p>$295.47</p>
                                            </td>
                                            <td>
                                                Nike
                                            </td>
                                            <td>
                                                Shoes
                                            </td>
                                            <td>
                                                <p class="ps-tag--in-stock">In Stock</p>
                                                <p>Published: Oct 10, 2021</p>
                                            </td>
                                            <td>
                                                 <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                                        </div>
                                            </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                                
                            </figure>
                        </div>
                    </div>
          
                 
         
         @include('layouts.backoffice.vendor.footer')
@endsection