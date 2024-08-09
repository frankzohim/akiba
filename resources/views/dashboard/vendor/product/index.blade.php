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

                @if(Session::get("success"))
                       
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                @endif
                               
                    <div class="row">

                       @if(count($products))
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
                                        @php
                                         $ids= '';
                                            for($i=0; $i< count($products); $i++){
                                                if($i == count($products)-1)
                                                $ids = $ids.$products[$i]['id'];
                                            else {
                                                $ids = $ids.$products[$i]['id'].',';
                                            }
                                            }
                                            
                                        
                                         
                                            echo "<script> let ids = '$ids'; </script>";
                                        @endphp
                                        @foreach($products as $product)
                                            <tr>
                                                <td><a href="#"><img src="{{ route('display.product.image',['id'=>$product['id'], 'path'=>$product['images'][0]['id']] )}}" alt="" width="50"></a></td>
                                                <td><a href="#">{{ $product['name']}}...</a>
                                                  
                                                </td>
                                                <td>
                                                    {{ $product['sku']}}
                                                </td>
                                                <td>
                                                    <p id="product-price-{{$product['id']}}">{{ $product['price']}} 
                                                    </p>
                                                </td>
                                                <td>
                                                    {{ $product['brand']['name']}}
                                                </td>
                                                <td>
                                                    {{ $product['category']['name']}}
                                                </td>
                                                <td>
                                                    <p class="ps-tag--in-stock">In Stock</p>
                                                    <p id="product-date-{{$product['id']}}">
                                                        @php
                                                         $date = strtotime($product['date']);
                                                        @endphp
                                                        Published: {{date('d M, Y', $date)}}
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="{{ route('product.edit', ['id'=>$product['id']])}}">Edit</a>
                                                    <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#deleteModal{{ $product['id'] }}">Delete</a></div>
                                            </div>
                                             <!-- Modal -->
                                            <div class="modal fade" id="deleteModal{{ $product['id'] }}" tabindex="-1" 
                                                    role="dialog" aria-labelledby="exampleModalLabel{{ $product['id'] }}" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Deletion</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="get" action="{{ route('product.delete',['id' => $product['id']]) }}" id="delete-form{{$product['id']}}">
                                                            @csrf
                                                            <p>{{ __('Do you really want to delete this item') }}</p>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                            <button type="submit" class="btn btn-primary">Yes</button>
                                                        </div>
                                                        </form>
                                                        </div>
                                                </div>
                                            </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                       
                                    </tbody>
                                </table>
                                
                            </figure>
                        </div>
                            
                        @else
                               <div class="ps-newsletter">
                                <div class="container">
                                    <form class="ps-form--newsletter" action="do_action" method="post">
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <div class="ps-form__left">
                                                    <h3>No Products</h3>
                                                    <p>Click on "New Product" to add one</p>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endif
                    </div>
          
                 
         
         @include('layouts.backoffice.vendor.footer')
  
         <script> 
            // let ids=[
            //     @foreach($products as $p)
            //   [$product['id']]
            // @endforeach
            // ];
            
            
            formatPrice(ids.split(','));
        </script>
       
@endsection