@extends('layouts.frontoffice.master')
@section('title', 'Cart')
@section('content')
     <div class="ps-page--simple">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="{{ route('shop')}}">Shop</a></li>
                    <li>Cart</li>
                </ul>
            </div>
        </div>
        
        <div class="ps-section--shopping ps-shopping-cart">
            <div class="container">
                @if(session()->has('cart_delete'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                            <span class="alert-text"><strong>Succès! </strong> <strong>{{ session('cart_delete') }} </strong></span>
                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                @endif
                <div class="ps-section__header">
                    <h1>Shopping Cart</h1>
                </div>
                <div class="ps-section__content">
                    <div class="table-responsive">
                        <table class="table ps-table--shopping-cart ps-table--responsive">
                            <thead>
                                <tr>
                                    <th>Product name</th>
                                    <th>PRICE</th>
                                    <th>QUANTITY</th>
                                    <th>TOTAL</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                             
                                    <input type="hidden" id="site-url" value="{{config('services.site-url.key')}}">
                                    @foreach($cartItems as $item)
                                        <tr>
                                            <td data-label="Product">
                                                <div class="ps-product--cart">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ route('display.product.image',['id'=>$item['associatedModel']['id'], 'path'=>$item['associatedModel']['images'][0]['id']] )}}" alt="" /></a></div>
                                                    <div class="ps-product__content"><a href="product-default.html">{{ $item['name']}}</a>
                                                        <p>Sold By:<strong> {{ $item['associatedModel']['store']['name']}}</strong></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <input type="hidden" name="id$item['associatedModel']['id']" value="$item['associatedModel']['id']">
                                            <td class="price" data-label="Price">FCFA {{ number_format($item['price'], 2) }}</td>
                                            <td data-label="Quantity">
                                                <div class="form-group--number">
                                                    <button class="up" data-price='{{ $item['price']}}' data-product='{{ $item->id}}'>+</button>

                                                    <button class="down" data-price='{{ $item['price']}}'  data-product='{{ $item->id}}'>-</button>

                                                    <input class="form-control" type="text" placeholder="1" value="{{$item['quantity']}}" id='quantity{{$item->id}}' name='quantity'>
                                                </div>
                                            </td>
                                            <td data-label="Total" class='total{{ $item->id}}'>
                                                FCFA {{ number_format($item['price']*$item['quantity'], 2) }}</td>
                                            <td data-label="Actions">
                                                <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="ps-product__remove" type="submit"
                                                            style="border:none; background-color: transparent;"> 
                                                                <i class="icon-cross"></i>
                                                    </button>
                                                </form> 
                                            
                                            </td>
                                        </tr>
                                    @endforeach
                              
                            </tbody>
                        </table>
                    </div>
                    <div class="ps-section__cart-actions">
                        <a class="ps-btn" href="{{ route('shop')}}"><i class="icon-arrow-left"></i> Back to Shop</a>
                        <a class="ps-btn ps-btn--outline" href="{{ route('viewCart')}}" id="update-cart">
                            <i class="icon-sync"></i> Update cart
                        </a></div>
                </div>
                <div class="ps-section__footer">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                            <figure>
                                <figcaption>Coupon Discount</figcaption>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="">
                                </div>
                                <div class="form-group">
                                    <button class="ps-btn ps-btn--outline">Apply</button>
                                </div>
                            </figure>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                            <figure>
                                <figcaption>Calculate shipping</figcaption>
                                <div class="form-group">
                                    <select class="ps-select">
                                        <option value="1">America</option>
                                        <option value="2">Italia</option>
                                        <option value="3">Vietnam</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Town/City">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Postcode/Zip">
                                </div>
                                <div class="form-group">
                                    <button class="ps-btn ps-btn--outline">Update</button>
                                </div>
                            </figure>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-block--shopping-total">
                                <div class="ps-block__header">
                                    <p>Subtotal <span> $683.49</span></p>
                                </div>
                                <div class="ps-block__content">
                                    <ul class="ps-block__product">
                                        <li><span class="ps-block__shop">YOUNG SHOP Shipping</span><span class="ps-block__shipping">Free Shipping</span><span class="ps-block__estimate">Estimate for <strong>Viet Nam</strong><a href="#"> MVMTH Classical Leather Watch In Black ×1</a></span></li>
                                        <li><span class="ps-block__shop">ROBERT’S STORE Shipping</span><span class="ps-block__shipping">Free Shipping</span><span class="ps-block__estimate">Estimate for <strong>Viet Nam</strong><a href="#">Apple Macbook Retina Display 12” ×1</a></span></li>
                                    </ul>
                                    <h3>Total <span>$683.49</span></h3>
                                </div>
                            </div><a class="ps-btn ps-btn--fullwidth" href="checkout.html">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        updateCart = function(id, quantity, add){

            const siteURL = jQuery('#site-url').val();
            
            // SAVE THE DATA
            jQuery.ajax({
                type: "PUT",
                dataType: 'json',
                url: 'http://'+siteURL+'/cart/'+id,
                timeout: 15000,
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                    quantity: quantity,
                    add: add,
                },
                success: function(response, statusCode) {

                    console.log(response);
                    if(statusCode === "success"){

                    }

                },
                error: function(response, statusCode) {

                console.log(response);

                },


            });
            
        }
        const upAll = document.querySelectorAll('.up');
        const downAll = document.querySelectorAll('.down');
        let add;
        upAll.forEach(element => {
            element.addEventListener('click', function(e){
                e.preventDefault();
                let productId = element.dataset.product;
                let price = element.dataset.price;
                let quantity = document.querySelector(`#quantity${productId}`);
                let total = document.querySelector(`.total${productId}`);
                quantity.value = Number(quantity.value) + 1;
                 let totalAmout = new Intl.NumberFormat('en-US', options).format(Number(quantity.value)*Number(price));
                total.textContent = `${totalAmout}`;

                //Update cart
                add = true;
                updateCart(productId, quantity.value, add);
            })
        });

        downAll.forEach(element => {
            element.addEventListener('click', function(e){
                e.preventDefault();
                let productId = element.dataset.product;
                let price = element.dataset.price;
                let quantity = document.querySelector(`#quantity${productId}`);
                let total = document.querySelector(`.total${productId}`);

                if(Number(quantity.value) > 1){

                    quantity.value = Number(quantity.value) - 1;
                    let totalAmout = new Intl.NumberFormat('en-US', options).format(Number(quantity.value)*Number(price));
                    total.textContent = `${totalAmout}`;

                    //update Cart
                    add = false;
                    updateCart(productId, quantity.value, add);
                }
                 
            })
        });
      
    </script>
@endsection