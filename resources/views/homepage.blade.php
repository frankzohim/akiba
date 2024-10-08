@extends('layouts.frontoffice.master')
@section('title', 'Akiba - E-commerce Website')
@section('content')
 <div class="ps-panel--sidebar" id="cart-mobile">
        <div class="ps-panel__header">
            <h3>Shopping Cart</h3>
        </div>
        <div class="navigation__content">
            <div class="ps-cart--mobile">
                <div class="ps-cart__content">
                    <div class="ps-product--cart-mobile">
                        <div class="ps-product__thumbnail"><a href="#"><img src="{{asset('assets/img/products/clothing/7.jpg')}}" alt=""></a></div>
                        <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                            <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                        </div>
                    </div>
                </div>
                <div class="ps-cart__footer">
                    <h3>Sub Total:<strong>$59.99</strong></h3>
                    <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-panel--sidebar" id="navigation-mobile">
        <div class="ps-panel__header">
            <h3>Categories</h3>
        </div>
        <div class="ps-panel__content">
            <ul class="menu--mobile">
                <li><a href="#">Hot Promotions</a>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="#">Consumer Electronic</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Electronic<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="#">Home Audio &amp; Theathers</a>
                                </li>
                                <li><a href="#">TV &amp; Videos</a>
                                </li>
                                <li><a href="#">Camera, Photos &amp; Videos</a>
                                </li>
                                <li><a href="#">Cellphones &amp; Accessories</a>
                                </li>
                                <li><a href="#">Headphones</a>
                                </li>
                                <li><a href="#">Videosgames</a>
                                </li>
                                <li><a href="#">Wireless Speakers</a>
                                </li>
                                <li><a href="#">Office Electronic</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="#">Digital Cables</a>
                                </li>
                                <li><a href="#">Audio &amp; Video Cables</a>
                                </li>
                                <li><a href="#">Batteries</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="#">Clothing &amp; Apparel</a>
                </li>
                <li><a href="#">Home, Garden &amp; Kitchen</a>
                </li>
                <li><a href="#">Health &amp; Beauty</a>
                </li>
                <li><a href="#">Yewelry &amp; Watches</a>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="#">Computer &amp; Technology</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="#">Computer &amp; Tablets</a>
                                </li>
                                <li><a href="#">Laptop</a>
                                </li>
                                <li><a href="#">Monitors</a>
                                </li>
                                <li><a href="#">Networking</a>
                                </li>
                                <li><a href="#">Drive &amp; Storages</a>
                                </li>
                                <li><a href="#">Computer Components</a>
                                </li>
                                <li><a href="#">Security &amp; Protection</a>
                                </li>
                                <li><a href="#">Gaming Laptop</a>
                                </li>
                                <li><a href="#">Accessories</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="#">Babies &amp; Moms</a>
                </li>
                <li><a href="#">Sport &amp; Outdoor</a>
                </li>
                <li><a href="#">Phones &amp; Accessories</a>
                </li>
                <li><a href="#">Books &amp; Office</a>
                </li>
                <li><a href="#">Cars &amp; Motocycles</a>
                </li>
                <li><a href="#">Home Improments</a>
                </li>
                <li><a href="#">Vouchers &amp; Services</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="navigation--list">
        <div class="navigation__content"><a class="navigation__item ps-toggle--sidebar" href="#menu-mobile"><i class="icon-menu"></i><span> Menu</span></a><a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><i class="icon-list4"></i><span> Categories</span></a><a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i><span> Search</span></a><a class="navigation__item ps-toggle--sidebar" href="#cart-mobile"><i class="icon-bag2"></i><span> Cart</span></a></div>
    </div>
    <div class="ps-panel--sidebar" id="search-sidebar">
        <div class="ps-panel__header">
            <form class="ps-form--search-mobile" action="index.html" method="get">
                <div class="form-group--nest">
                    <input class="form-control" type="text" placeholder="Search something...">
                    <button><i class="icon-magnifier"></i></button>
                </div>
            </form>
        </div>
        <div class="navigation__content"></div>
    </div>
    <div class="ps-panel--sidebar" id="menu-mobile">
        <div class="ps-panel__header">
            <h3>Menu</h3>
        </div>
        <div class="ps-panel__content">
            <ul class="menu--mobile">
                <li class="menu-item-has-children"><a href="index.html">Home</a><span class="sub-toggle"></span>
                    <ul class="sub-menu">
                        <li><a href="index.html">Marketplace Full Width</a>
                        </li>
                        <li><a href="homepage-2.html">Home Auto Parts</a>
                        </li>
                        <li><a href="homepage-10.html">Home Technology</a>
                        </li>
                        <li><a href="homepage-9.html">Home Organic</a>
                        </li>
                        <li><a href="homepage-3.html">Home Marketplace V1</a>
                        </li>
                        <li><a href="homepage-4.html">Home Marketplace V2</a>
                        </li>
                        <li><a href="homepage-5.html">Home Marketplace V3</a>
                        </li>
                        <li><a href="homepage-6.html">Home Marketplace V4</a>
                        </li>
                        <li><a href="homepage-7.html">Home Electronic</a>
                        </li>
                        <li><a href="homepage-8.html">Home Furniture</a>
                        </li>
                        <li><a href="homepage-kids.html">Home Kids</a>
                        </li>
                        <li><a href="homepage-photo-and-video.html">Home photo and picture</a>
                        </li>
                        <li><a href="home-medical.html">Home Medical</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="shop-default.html">Shop</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="shop-default.html">Shop Default</a>
                                </li>
                                <li><a href="shop-default.html">Shop Fullwidth</a>
                                </li>
                                <li><a href="shop-categories.html">Shop Categories</a>
                                </li>
                                <li><a href="shop-sidebar.html">Shop Sidebar</a>
                                </li>
                                <li><a href="shop-sidebar-without-banner.html">Shop Without Banner</a>
                                </li>
                                <li><a href="shop-carousel.html">Shop Carousel</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Product Layout<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="product-default.html">Default</a>
                                </li>
                                <li><a href="product-extend.html">Extended</a>
                                </li>
                                <li><a href="product-full-content.html">Full Content</a>
                                </li>
                                <li><a href="product-box.html">Boxed</a>
                                </li>
                                <li><a href="product-sidebar.html">Sidebar</a>
                                </li>
                                <li><a href="product-default.html">Fullwidth</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Product Types<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="product-default.html">Simple</a>
                                </li>
                                <li><a href="product-default.html">Color Swatches</a>
                                </li>
                                <li><a href="product-image-swatches.html">Images Swatches</a>
                                </li>
                                <li><a href="product-countdown.html">Countdown</a>
                                </li>
                                <li><a href="product-multi-vendor.html">Multi-Vendor</a>
                                </li>
                                <li><a href="product-instagram.html">Instagram</a>
                                </li>
                                <li><a href="product-affiliate.html">Affiliate</a>
                                </li>
                                <li><a href="product-on-sale.html">On sale</a>
                                </li>
                                <li><a href="product-video.html">Video Featured</a>
                                </li>
                                <li><a href="product-groupped.html">Grouped</a>
                                </li>
                                <li><a href="product-out-stock.html">Out Of Stock</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Woo Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="shopping-cart.html">Shopping Cart</a>
                                </li>
                                <li><a href="checkout.html">Checkout</a>
                                </li>
                                <li><a href="whishlist.html">Whishlist</a>
                                </li>
                                <li><a href="compare.html">Compare</a>
                                </li>
                                <li><a href="order-tracking.html">Order Tracking</a>
                                </li>
                                <li><a href="my-account.html">My Account</a>
                                </li>
                                <li><a href="checkout-2.html">Checkout 2</a>
                                </li>
                                <li><a href="shipping.html">Shipping</a>
                                </li>
                                <li><a href="payment.html">Payment</a>
                                </li>
                                <li><a href="payment-success.html">Payment Success</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="#">Pages</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Basic Page<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="about-us.html">About Us</a>
                                </li>
                                <li><a href="contact-us.html">Contact</a>
                                </li>
                                <li><a href="faqs.html">Faqs</a>
                                </li>
                                <li><a href="comming-soon.html">Comming Soon</a>
                                </li>
                                <li><a href="404-page.html">404 Page</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="become-a-vendor.html">Become a Vendor</a>
                                </li>
                                <li><a href="vendor-store.html">Vendor Store</a>
                                </li>
                                <li><a href="vendor-dashboard-free.html">Vendor Dashboard Free</a>
                                </li>
                                <li><a href="vendor-dashboard-pro.html">Vendor Dashboard Pro</a>
                                </li>
                                <li><a href="store-list.html">Store List</a>
                                </li>
                                <li><a href="store-list.html">Store List 2</a>
                                </li>
                                <li><a href="store-detail.html">Store Detail</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Account Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="user-information.html">User Information</a>
                                </li>
                                <li><a href="addresses.html">Addresses</a>
                                </li>
                                <li><a href="invoices.html">Invoices</a>
                                </li>
                                <li><a href="invoice-detail.html">Invoice Detail</a>
                                </li>
                                <li><a href="notifications.html">Notifications</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="#">Blogs</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Blog Layout<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="blog-grid.html">Grid</a>
                                </li>
                                <li><a href="blog-list.html">Listing</a>
                                </li>
                                <li><a href="blog-small-thumb.html">Small Thumb</a>
                                </li>
                                <li><a href="blog-left-sidebar.html">Left Sidebar</a>
                                </li>
                                <li><a href="blog-right-sidebar.html">Right Sidebar</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Single Blog<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li><a href="blog-detail.html">Single 1</a>
                                </li>
                                <li><a href="blog-detail-2.html">Single 2</a>
                                </li>
                                <li><a href="blog-detail-3.html">Single 3</a>
                                </li>
                                <li><a href="blog-detail-4.html">Single 4</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="homepage-1">
        <div class="ps-home-banner ps-home-banner--1">
            <div class="ps-container">
                <div class="ps-section__left">
                    <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
                        <div class="ps-banner bg--cover" data-background="{{asset('assets/img/slider/home-1/slide-1.jpg')}}"><a class="ps-banner__overlay" href="shop-default.html.htm"></a></div>
                        <div class="ps-banner bg--cover" data-background="{{asset('assets/img/slider/home-1/slide-2.jpg')}}"><a class="ps-banner__overlay" href="shop-default.html.htm"></a></div>
                        <div class="ps-banner bg--cover" data-background="{{asset('assets/img/slider/home-1/slide-3.jpg')}}"><a class="ps-banner__overlay" href="shop-default.html.htm"></a></div>
                    </div>
                </div>
                <div class="ps-section__right"><a class="ps-collection" href="#"><img src="{{asset('assets/img/slider/home-1/promotion-1.jpg')}}" alt=""></a><a class="ps-collection" href="#"><img src="{{asset('assets/img/slider/home-1/promotion-2.jpg')}}" alt=""></a></div>
            </div>
        </div>
    </div>
    <div id="homepage-5">
        
  
        <div class="ps-search-trending">
            <div class="container">
                <div class="ps-section__header">
                    <h3>Search Trending<span>Updated at 9:00AM</span></h3>
                </div>
                <div class="ps-section__content">
                    <div class="ps-block--categories-tabs ps-tab-root">
                        <div class="ps-block__header">
                            <div class="ps-carousel--nav ps-tab-list owl-slider" data-owl-auto="false" data-owl-speed="1000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="8" data-owl-item-xs="3" data-owl-item-sm="4" data-owl-item-md="6" data-owl-item-lg="6" data-owl-duration="500" data-owl-mousedrag="on"><a class="active" href="#tab-1"><i class="icon-star"></i><span>Hot Trending</span></a><a href="#tab-2"><i class="icon-smartphone"></i><span>Cell Phones</span></a><a href="#tab-3"><i class="icon-desktop"></i><span>Computers</span></a><a href="#tab-4"><i class="icon-lampshade"></i><span>Furnitures</span></a><a href="#tab-5"><i class="icon-shirt"></i><span>T-Shirts</span></a><a href="#tab-6"><i class="icon-baby-bottle"></i><span>Baby & Mom</span></a><a href="#tab-7"><i class="icon-baseball"></i><span>Sports</span></a><a href="#tab-8"><i class="icon-book2"></i><span>Book & Office</span></a><a href="#tab-9"><i class="icon-car-siren"></i><span>Cars</span></a></div>
                        </div>
                        <div class="ps-tabs">
                            <div class="ps-tabs">
                                <div class="ps-tab active" id="tab-1">
                                    <div class="ps-block__item">
                                        
                                        <a href="shop-default.html"><img src="
                                        {{asset('assets/img/categories/home-5/1.jpg')}}" alt="#television"><span>#television</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/2.jpg')}}" alt="#camera"><span>#camera</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/3.jpg')}}" alt="#watch"><span>#watch</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/4.jpg')}}" alt="#chair"><span>#chair</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/5.jpg')}}" alt="#sneaker"><span>#sneaker</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/6.jpg')}}" alt="#xbox"><span>#xbox</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/7.jpg')}}" alt="#gopro"><span>#gopro</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/8.jpg')}}" alt="#lipstick"><span>#lipstick</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/9.jpg')}}" alt="#phone"><span>#phone</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/10.jpg')}}" alt="#laptop"><span>#laptop</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/11.jpg')}}" alt="#speaker"><span>#speaker</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/12.jpg')}}" alt="#book"><span>#book</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/13.jpg')}}" alt="#blender"><span>#blender</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/14.jpg')}}" alt="#bag"><span>#bag</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/15.jpg')}}" alt="#smartphone"><span>#smartphone</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/16.jpg')}}" alt="#camping"><span>#camping</span></a>
                                    </div>
                                </div>
                                <div class="ps-tab" id="tab-2">
                                    <div class="ps-block__item">
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/3.jpg')}}" alt="#watch"><span>#watch</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/4.jpg')}}" alt="#chair"><span>#chair</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/5.jpg')}}" alt="#sneaker"><span>#sneaker</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/6.jpg')}}" alt="#xbox"><span>#xbox</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/7.jpg')}}" alt="#gopro"><span>#gopro</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/8.jpg')}}" alt="#lipstick"><span>#lipstick</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/9.jpg')}}" alt="#phone"><span>#phone</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/10.jpg')}}" alt="#laptop"><span>#laptop</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/11.jpg')}}" alt="#speaker"><span>#speaker</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/12.jpg')}}" alt="#book"><span>#book</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/13.jpg')}}" alt="#blender"><span>#blender</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/14.jpg')}}" alt="#bag"><span>#bag</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/15.jpg')}}" alt="#smartphone"><span>#smartphone</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/16.jpg')}}" alt="#camping"><span>#camping</span></a>
                                    </div>
                                </div>
                                <div class="ps-tab" id="tab-3">
                                    <div class="ps-block__item">
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/4.jpg')}}" alt="#chair"><span>#chair</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/5.jpg')}}" alt="#sneaker"><span>#sneaker</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/6.jpg')}}" alt="#xbox"><span>#xbox</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/7.jpg')}}" alt="#gopro"><span>#gopro</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/8.jpg')}}" alt="#lipstick"><span>#lipstick</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/9.jpg')}}" alt="#phone"><span>#phone</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/10.jpg')}}" alt="#laptop"><span>#laptop</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/11.jpg')}}" alt="#speaker"><span>#speaker</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/12.jpg')}}" alt="#book"><span>#book</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/13.jpg')}}" alt="#blender"><span>#blender</span></a>
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/14.jpg')}}" alt="#bag"><span>#bag</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/15.jpg')}}" alt="#smartphone"><span>#smartphone</span></a>
                                        
                                        <a href="shop-default.html"><img src="{{asset('assets/img/categories/home-5/16.jpg')}}" alt="#camping"><span>#camping</span></a>
                                    </div>
                                </div>
                                <div class="ps-tab" id="tab-4">
                                    <div class="ps-block__item"><a href="shop-default.html"><img src="img/categories/home-5/5.jpg" alt="#sneaker"><span>#sneaker</span></a><a href="shop-default.html"><img src="img/categories/home-5/6.jpg" alt="#xbox"><span>#xbox</span></a><a href="shop-default.html"><img src="img/categories/home-5/7.jpg" alt="#gopro"><span>#gopro</span></a><a href="shop-default.html"><img src="img/categories/home-5/8.jpg" alt="#lipstick"><span>#lipstick</span></a><a href="shop-default.html"><img src="img/categories/home-5/9.jpg" alt="#phone"><span>#phone</span></a><a href="shop-default.html"><img src="img/categories/home-5/10.jpg" alt="#laptop"><span>#laptop</span></a><a href="shop-default.html"><img src="img/categories/home-5/11.jpg" alt="#speaker"><span>#speaker</span></a><a href="shop-default.html"><img src="img/categories/home-5/12.jpg" alt="#book"><span>#book</span></a><a href="shop-default.html"><img src="img/categories/home-5/13.jpg" alt="#blender"><span>#blender</span></a><a href="shop-default.html"><img src="img/categories/home-5/14.jpg" alt="#bag"><span>#bag</span></a><a href="shop-default.html"><img src="img/categories/home-5/15.jpg" alt="#smartphone"><span>#smartphone</span></a><a href="shop-default.html"><img src="img/categories/home-5/16.jpg" alt="#camping"><span>#camping</span></a>
                                    </div>
                                </div>
                                <div class="ps-tab" id="tab-5">
                                    <div class="ps-block__item"><a href="shop-default.html"><img src="img/categories/home-5/6.jpg" alt="#xbox"><span>#xbox</span></a><a href="shop-default.html"><img src="img/categories/home-5/7.jpg" alt="#gopro"><span>#gopro</span></a><a href="shop-default.html"><img src="img/categories/home-5/8.jpg" alt="#lipstick"><span>#lipstick</span></a><a href="shop-default.html"><img src="img/categories/home-5/9.jpg" alt="#phone"><span>#phone</span></a><a href="shop-default.html"><img src="img/categories/home-5/10.jpg" alt="#laptop"><span>#laptop</span></a><a href="shop-default.html"><img src="img/categories/home-5/11.jpg" alt="#speaker"><span>#speaker</span></a><a href="shop-default.html"><img src="img/categories/home-5/12.jpg" alt="#book"><span>#book</span></a><a href="shop-default.html"><img src="img/categories/home-5/13.jpg" alt="#blender"><span>#blender</span></a><a href="shop-default.html"><img src="img/categories/home-5/14.jpg" alt="#bag"><span>#bag</span></a><a href="shop-default.html"><img src="img/categories/home-5/15.jpg" alt="#smartphone"><span>#smartphone</span></a><a href="shop-default.html"><img src="img/categories/home-5/16.jpg" alt="#camping"><span>#camping</span></a>
                                    </div>
                                </div>
                                <div class="ps-tab" id="tab-6">
                                    <div class="ps-block__item"><a href="shop-default.html"><img src="img/categories/home-5/7.jpg" alt="#gopro"><span>#gopro</span></a><a href="shop-default.html"><img src="img/categories/home-5/8.jpg" alt="#lipstick"><span>#lipstick</span></a><a href="shop-default.html"><img src="img/categories/home-5/9.jpg" alt="#phone"><span>#phone</span></a><a href="shop-default.html"><img src="img/categories/home-5/10.jpg" alt="#laptop"><span>#laptop</span></a><a href="shop-default.html"><img src="img/categories/home-5/11.jpg" alt="#speaker"><span>#speaker</span></a><a href="shop-default.html"><img src="img/categories/home-5/12.jpg" alt="#book"><span>#book</span></a><a href="shop-default.html"><img src="img/categories/home-5/13.jpg" alt="#blender"><span>#blender</span></a><a href="shop-default.html"><img src="img/categories/home-5/14.jpg" alt="#bag"><span>#bag</span></a><a href="shop-default.html"><img src="img/categories/home-5/15.jpg" alt="#smartphone"><span>#smartphone</span></a><a href="shop-default.html"><img src="img/categories/home-5/16.jpg" alt="#camping"><span>#camping</span></a>
                                    </div>
                                </div>
                                <div class="ps-tab" id="tab-7">
                                    <div class="ps-block__item"><a href="shop-default.html"><img src="img/categories/home-5/8.jpg" alt="#lipstick"><span>#lipstick</span></a><a href="shop-default.html"><img src="img/categories/home-5/9.jpg" alt="#phone"><span>#phone</span></a><a href="shop-default.html"><img src="img/categories/home-5/10.jpg" alt="#laptop"><span>#laptop</span></a><a href="shop-default.html"><img src="img/categories/home-5/11.jpg" alt="#speaker"><span>#speaker</span></a><a href="shop-default.html"><img src="img/categories/home-5/12.jpg" alt="#book"><span>#book</span></a><a href="shop-default.html"><img src="img/categories/home-5/13.jpg" alt="#blender"><span>#blender</span></a><a href="shop-default.html"><img src="img/categories/home-5/14.jpg" alt="#bag"><span>#bag</span></a><a href="shop-default.html"><img src="img/categories/home-5/15.jpg" alt="#smartphone"><span>#smartphone</span></a><a href="shop-default.html"><img src="img/categories/home-5/16.jpg" alt="#camping"><span>#camping</span></a>
                                    </div>
                                </div>
                                <div class="ps-tab" id="tab-7">
                                    <div class="ps-block__item"><a href="shop-default.html"><img src="img/categories/home-5/9.jpg" alt="#phone"><span>#phone</span></a><a href="shop-default.html"><img src="img/categories/home-5/10.jpg" alt="#laptop"><span>#laptop</span></a><a href="shop-default.html"><img src="img/categories/home-5/11.jpg" alt="#speaker"><span>#speaker</span></a><a href="shop-default.html"><img src="img/categories/home-5/12.jpg" alt="#book"><span>#book</span></a><a href="shop-default.html"><img src="img/categories/home-5/13.jpg" alt="#blender"><span>#blender</span></a><a href="shop-default.html"><img src="img/categories/home-5/14.jpg" alt="#bag"><span>#bag</span></a><a href="shop-default.html"><img src="img/categories/home-5/15.jpg" alt="#smartphone"><span>#smartphone</span></a><a href="shop-default.html"><img src="img/categories/home-5/16.jpg" alt="#camping"><span>#camping</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-deal-of-day">
            <div class="container">
                <div class="ps-section__header">
                    <div class="ps-block--countdown-deal">
                        <div class="ps-block__left">
                            <h3>Deal of the day  </h3>
                        </div>
                        <div class="ps-block__right">
                            <figure>
                                <figcaption>End in:</figcaption>
                                <ul class="ps-countdown" data-time="December 30, 2021 15:37:25">
                                    <li><span class="days"></span></li>
                                    <li><span class="hours"></span></li>
                                    <li><span class="minutes"></span></li>
                                    <li><span class="seconds"></span></li>
                                </ul>
                            </figure>
                        </div>
                    </div><a href="shop-default.html">View all</a>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="1000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="4" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('assets/img/products/home/1.jpg')}}" alt=""></a>
                                <div class="ps-product__badge">-16%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <p class="ps-product__price sale">$567.99 <del>$670.00 </del><small>18% off</small></p>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <div class="ps-product__progress-bar ps-progress" data-value="72">
                                        <div class="ps-progress__value"><span></span></div>
                                        <p>Sold:80</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href="product-default.html">
                                <img src="{{asset('assets/img/products/home/2.jpg')}}" alt=""></a>
                                <div class="ps-product__badge out-stock">Out Of Stock</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <p class="ps-product__price">$101.99<small>18% off</small></p>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <div class="ps-product__progress-bar ps-progress" data-value="96">
                                        <div class="ps-progress__value"><span></span></div>
                                        <p>Sold:19</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href="product-default.html">
                                <img src="{{asset('assets/img/products/home/3.jpg')}}" alt=""></a>
                                <div class="ps-product__badge">-25%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del><small>18% off</small></p>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>02</span>
                                    </div>
                                    <div class="ps-product__progress-bar ps-progress" data-value="77">
                                        <div class="ps-progress__value"><span></span></div>
                                        <p>Sold:73</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href="product-default.html">
                                <img src="{{asset('assets/img/products/home/4.jpg')}}" alt=""></a>
                                <div class="ps-product__badge out-stock">Out Of Stock</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <p class="ps-product__price">$320.00<small>18% off</small></p>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Colorr</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <div class="ps-product__progress-bar ps-progress" data-value="4">
                                        <div class="ps-progress__value"><span></span></div>
                                        <p>Sold:78</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href="product-default.html">
                                <img src="{{asset('assets/img/products/home/5.jpg')}}" alt=""></a>
                                <div class="ps-product__badge out-stock">Out Of Stock</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <p class="ps-product__price">$85.00<small>18% off</small></p>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Set 14-Piece Knife From KichiKit</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <div class="ps-product__progress-bar ps-progress" data-value="25">
                                        <div class="ps-progress__value"><span></span></div>
                                        <p>Sold:91</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href="product-default.html">
                                <img src="{{asset('assets/img/products/home/6.jpg')}}" alt=""></a>
                                <div class="ps-product__badge out-stock">Out Of Stock</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <p class="ps-product__price">$92.00<small>18% off</small></p>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Magic Bullet NutriBullet Pro 900 Series Blender</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                    </div>
                                    <div class="ps-product__progress-bar ps-progress" data-value="69">
                                        <div class="ps-progress__value"><span></span></div>
                                        <p>Sold:48</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href="product-default.html">
                                <img src="{{asset('assets/img/products/home/7.jpg')}}" alt=""></a>
                                <div class="ps-product__badge">-46%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del><small>18% off</small></p>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>02</span>
                                    </div>
                                    <div class="ps-product__progress-bar ps-progress" data-value="52">
                                        <div class="ps-progress__value"><span></span></div>
                                        <p>Sold:78</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product ps-product--inner">
                            <div class="ps-product__thumbnail"><a href="product-default.html">
                                <img src="{{asset('assets/img/products/home/7.jpg')}}" alt=""></a>
                                <div class="ps-product__badge">-46%</div>
                                <ul class="ps-product__actions">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                </ul>
                            </div>
                            <div class="ps-product__container">
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del><small>18% off</small></p>
                                <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>02</span>
                                    </div>
                                    <div class="ps-product__progress-bar ps-progress" data-value="78">
                                        <div class="ps-progress__value"><span></span></div>
                                        <p>Sold:20</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-product-box">
            <div class="container">
                <div class="ps-home-promotions"><a href="#"><img src="img/promotions/home-5/simple.jpg" alt=""></a></div>
                <div class="ps-block--product-box">
                    <div class="ps-block__header">
                        <h3><i class="icon-laundry"></i> Consumer Electronic</h3>
                        <ul>
                            <li><a href="shop-default.html">TV Televisions</a></li>
                            <li><a href="shop-default.html">Air Conditioner</a></li>
                            <li><a href="shop-default.html">Washing Machine</a></li>
                            <li><a href="shop-default.html">Refrigerator</a></li>
                            <li><a href="shop-default.html">Refrigerator</a></li>
                            <li><a href="shop-default.html">Microwave</a></li>
                        </ul>
                    </div>
                    <div class="ps-block__content">
                        <div class="ps-block__left">
                            <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on"><a href="shop-default.html"><img src="img/promotions/home-5/electronic-1.jpg" alt=""></a><a href="shop-default.html"><img src="img/promotions/home-5/electronic-2.jpg" alt=""></a></div>
                            <div class="ps-block__products ps-tab-root">
                                <ul class="ps-tab-list">
                                    <li class="current"><a href="#product-box-1">New Arrivals</a></li>
                                    <li><a href="#product-box-2">Best Seller</a></li>
                                    <li><a href="#product-box-3">Sale</a></li>
                                </ul>
                                <div class="ps-tabs">
                                    <div class="ps-tab active" id="product-box-1">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/1.jpg" alt=""></a>
                                                        <div class="ps-product__badge">-16%</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless</a>
                                                            <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/2.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$101.99</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                                            <p class="ps-product__price">$101.99</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/3.jpg" alt=""></a>
                                                        <div class="ps-product__badge">-25%</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>02</span>
                                                            </div>
                                                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/4.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$320.00</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                                            <p class="ps-product__price">$320.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-tab" id="product-box-2">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/3.jpg" alt=""></a>
                                                        <div class="ps-product__badge">-25%</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>02</span>
                                                            </div>
                                                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/4.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$320.00</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                                            <p class="ps-product__price">$320.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/5.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$85.00</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                                            <p class="ps-product__price">$85.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/6.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Store</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$92.00</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                                                            <p class="ps-product__price">$92.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-tab" id="product-box-3">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/2.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$101.99</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                                            <p class="ps-product__price">$101.99</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/3.jpg" alt=""></a>
                                                        <div class="ps-product__badge">-25%</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>02</span>
                                                            </div>
                                                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/4.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$320.00</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                                            <p class="ps-product__price">$320.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/5.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$85.00</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                                            <p class="ps-product__price">$85.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-block__right">
                            <figure>
                                <figcaption>Recommended For You</figcaption>
                                <div class="ps-product--horizontal">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/1.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                                    </div>
                                </div>
                                <div class="ps-product--horizontal">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/2.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$101.99</p>
                                    </div>
                                </div>
                                <div class="ps-product--horizontal">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/3.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>02</span>
                                        </div>
                                        <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                    </div>
                                </div>
                                <div class="ps-product--horizontal">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/4.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$320.00</p>
                                    </div>
                                </div>
                                <div class="ps-product--horizontal">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/5.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$85.00</p>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="ps-block--product-box">
                    <div class="ps-block__header">
                        <h3><i class="icon-shirt"></i> Clothing & Appreal</h3>
                        <ul>
                            <li><a href="shop-default.html">Women</a></li>
                            <li><a href="shop-default.html">Men</a></li>
                            <li><a href="shop-default.html">Girl</a></li>
                            <li><a href="shop-default.html">Boy</a></li>
                            <li><a href="shop-default.html">Baby</a></li>
                            <li><a href="shop-default.html">Accessories</a></li>
                        </ul>
                    </div>
                    <div class="ps-block__content">
                        <div class="ps-block__left">
                            <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on"><a href="shop-default.html"><img src="img/promotions/home-5/clothing-2.jpg" alt=""></a><a href="shop-default.html"><img src="img/promotions/home-5/clothing-1.jpg" alt=""></a></div>
                            <div class="ps-block__products ps-tab-root">
                                <ul class="ps-tab-list">
                                    <li class="current"><a href="#product-box-1">New Arrivals</a></li>
                                    <li><a href="#product-box-2">Best Seller</a></li>
                                    <li><a href="#product-box-3">Sale</a></li>
                                </ul>
                                <div class="ps-tabs">
                                    <div class="ps-tab active" id="product-box-1">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/1.jpg" alt=""></a>
                                                        <div class="ps-product__badge">-16%</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                                            <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/2.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$101.99</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                                            <p class="ps-product__price">$101.99</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/3.jpg" alt=""></a>
                                                        <div class="ps-product__badge">-25%</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>02</span>
                                                            </div>
                                                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/4.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$320.00</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                                            <p class="ps-product__price">$320.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-tab" id="product-box-2">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/3.jpg" alt=""></a>
                                                        <div class="ps-product__badge">-25%</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>02</span>
                                                            </div>
                                                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/4.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$320.00</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                                            <p class="ps-product__price">$320.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/5.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$85.00</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                                            <p class="ps-product__price">$85.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/6.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Store</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Paul’s Smith Sneaker InWhite Color</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$92.00</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Paul’s Smith Sneaker InWhite Color</a>
                                                            <p class="ps-product__price">$92.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-tab" id="product-box-3">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/2.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$101.99</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                                            <p class="ps-product__price">$101.99</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/3.jpg" alt=""></a>
                                                        <div class="ps-product__badge">-25%</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>02</span>
                                                            </div>
                                                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/4.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$320.00</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                                            <p class="ps-product__price">$320.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/5.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$85.00</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                                            <p class="ps-product__price">$85.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-block__right">
                            <figure>
                                <figcaption>Recommended For You</figcaption>
                                <div class="ps-product--horizontal">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/1.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                                    </div>
                                </div>
                                <div class="ps-product--horizontal">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/2.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$101.99</p>
                                    </div>
                                </div>
                                <div class="ps-product--horizontal">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/3.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>02</span>
                                        </div>
                                        <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                    </div>
                                </div>
                                <div class="ps-product--horizontal">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/4.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$320.00</p>
                                    </div>
                                </div>
                                <div class="ps-product--horizontal">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/5.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$85.00</p>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="ps-block--product-box">
                    <div class="ps-block__header">
                        <h3><i class="icon-shirt"></i> Home, Garden & Kitchen</h3>
                        <ul>
                            <li><a href="shop-default.html">Furniture</a></li>
                            <li><a href="shop-default.html">Home Decor</a></li>
                            <li><a href="shop-default.html">Cookware</a></li>
                            <li><a href="shop-default.html">Utensil & Gadget</a></li>
                            <li><a href="shop-default.html">Garden Tools</a></li>
                        </ul>
                    </div>
                    <div class="ps-block__content">
                        <div class="ps-block__left">
                            <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on"><a href="shop-default.html"><img src="img/promotions/home-5/kitchen-2.jpg" alt=""></a><a href="shop-default.html"><img src="img/promotions/home-5/kitchen-1.jpg" alt=""></a></div>
                            <div class="ps-block__products ps-tab-root">
                                <ul class="ps-tab-list">
                                    <li class="current"><a href="#product-box-1">New Arrivals</a></li>
                                    <li><a href="#product-box-2">Best Seller</a></li>
                                    <li><a href="#product-box-3">Sale</a></li>
                                </ul>
                                <div class="ps-tabs">
                                    <div class="ps-tab active" id="product-box-1">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/1.jpg" alt=""></a>
                                                        <div class="ps-product__badge">-16%</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                                            <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/2.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$101.99</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                                                            <p class="ps-product__price">$101.99</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/3.jpg" alt=""></a>
                                                        <div class="ps-product__badge">-25%</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>02</span>
                                                            </div>
                                                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/4.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Colorr</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$320.00</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Colorr</a>
                                                            <p class="ps-product__price">$320.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-tab" id="product-box-2">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/3.jpg" alt=""></a>
                                                        <div class="ps-product__badge">-25%</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>02</span>
                                                            </div>
                                                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/4.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Colorr</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$320.00</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Colorr</a>
                                                            <p class="ps-product__price">$320.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/5.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Set 14-Piece Knife From KichiKit</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$85.00</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Set 14-Piece Knife From KichiKit</a>
                                                            <p class="ps-product__price">$85.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/6.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Store</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Magic Bullet NutriBullet Pro 900 Series Blender</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$92.00</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Magic Bullet NutriBullet Pro 900 Series Blender</a>
                                                            <p class="ps-product__price">$92.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-tab" id="product-box-3">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/2.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$101.99</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                                                            <p class="ps-product__price">$101.99</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/3.jpg" alt=""></a>
                                                        <div class="ps-product__badge">-25%</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>02</span>
                                                            </div>
                                                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/4.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Colorr</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$320.00</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Colorr</a>
                                                            <p class="ps-product__price">$320.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                                                <div class="ps-product">
                                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/5.jpg" alt=""></a>
                                                        <div class="ps-product__badge out-stock">Out Of Stock</div>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Set 14-Piece Knife From KichiKit</a>
                                                            <div class="ps-product__rating">
                                                                <select class="ps-rating" data-read-only="true">
                                                                    <option value="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="1">3</option>
                                                                    <option value="1">4</option>
                                                                    <option value="2">5</option>
                                                                </select><span>01</span>
                                                            </div>
                                                            <p class="ps-product__price">$85.00</p>
                                                        </div>
                                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Set 14-Piece Knife From KichiKit</a>
                                                            <p class="ps-product__price">$85.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-block__right">
                            <figure>
                                <figcaption>Recommended For You</figcaption>
                                <div class="ps-product--horizontal">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/1.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                                    </div>
                                </div>
                                <div class="ps-product--horizontal">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/2.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$101.99</p>
                                    </div>
                                </div>
                                <div class="ps-product--horizontal">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/3.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>02</span>
                                        </div>
                                        <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                                    </div>
                                </div>
                                <div class="ps-product--horizontal">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/4.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Colorr</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$320.00</p>
                                    </div>
                                </div>
                                <div class="ps-product--horizontal">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/5.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Set 14-Piece Knife From KichiKit</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price">$85.00</p>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection