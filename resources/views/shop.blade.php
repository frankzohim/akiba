@extends('layouts.frontoffice.master')
@section('title', 'Shop')
@section('content')
      @php
                                         $ids= '';
                                            for($i=0; $i< count($products); $i++){
                                                if($i == count($products)-1)
                                                $ids = $ids.$products[$i]['id'];
                                                else {
                                                    $ids = $ids.$products[$i]['id'].',';
                                                }
                                            }

                                            echo "<script>  ids = '$ids'; </script>";
                            @endphp
    <div class="ps-panel--sidebar" id="cart-mobile">
        <div class="ps-panel__header">
            <h3>Shopping Cart</h3>
        </div>
        <div class="navigation__content">
            <div class="ps-cart--mobile">
                <div class="ps-cart__content">
                    <div class="ps-product--cart-mobile">
                        <div class="ps-product__thumbnail"><a href="#"><img src="img/products/clothing/7.jpg" alt=""></a></div>
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
    <!--include ../../data/menu/menu-product-categories-->
    <div class="ps-panel--sidebar" id="navigation-mobile">
        <div class="ps-panel__header">
            <h3>Categories</h3>
        </div>
        <div class="ps-panel__content">
            <div class="menu--product-categories">
                <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
                <div class="menu__content">
                    <ul class="menu--mobile">
                        <li><a href="#.html">Hot Promotions</a>
                        </li>
                        <li class="menu-item-has-children has-mega-menu"><a href="#">Consumer Electronic</a><span class="sub-toggle"></span>
                            <div class="mega-menu">
                                <div class="mega-menu__column">
                                    <h4>Electronic<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="#.html">Home Audio &amp; Theathers</a>
                                        </li>
                                        <li><a href="#.html">TV &amp; Videos</a>
                                        </li>
                                        <li><a href="#.html">Camera, Photos &amp; Videos</a>
                                        </li>
                                        <li><a href="#.html">Cellphones &amp; Accessories</a>
                                        </li>
                                        <li><a href="#.html">Headphones</a>
                                        </li>
                                        <li><a href="#.html">Videosgames</a>
                                        </li>
                                        <li><a href="#.html">Wireless Speakers</a>
                                        </li>
                                        <li><a href="#.html">Office Electronic</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="#.html">Digital Cables</a>
                                        </li>
                                        <li><a href="#.html">Audio &amp; Video Cables</a>
                                        </li>
                                        <li><a href="#.html">Batteries</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="#.html">Clothing &amp; Apparel</a>
                        </li>
                        <li><a href="#.html">Home, Garden &amp; Kitchen</a>
                        </li>
                        <li><a href="#.html">Health &amp; Beauty</a>
                        </li>
                        <li><a href="#.html">Yewelry &amp; Watches</a>
                        </li>
                        <li class="menu-item-has-children has-mega-menu"><a href="#">Computer &amp; Technology</a><span class="sub-toggle"></span>
                            <div class="mega-menu">
                                <div class="mega-menu__column">
                                    <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li><a href="#.html">Computer &amp; Tablets</a>
                                        </li>
                                        <li><a href="#.html">Laptop</a>
                                        </li>
                                        <li><a href="#.html">Monitors</a>
                                        </li>
                                        <li><a href="#.html">Networking</a>
                                        </li>
                                        <li><a href="#.html">Drive &amp; Storages</a>
                                        </li>
                                        <li><a href="#.html">Computer Components</a>
                                        </li>
                                        <li><a href="#.html">Security &amp; Protection</a>
                                        </li>
                                        <li><a href="#.html">Gaming Laptop</a>
                                        </li>
                                        <li><a href="#.html">Accessories</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="#.html">Babies &amp; Moms</a>
                        </li>
                        <li><a href="#.html">Sport &amp; Outdoor</a>
                        </li>
                        <li><a href="#.html">Phones &amp; Accessories</a>
                        </li>
                        <li><a href="#.html">Books &amp; Office</a>
                        </li>
                        <li><a href="#.html">Cars &amp; Motocycles</a>
                        </li>
                        <li><a href="#.html">Home Improments</a>
                        </li>
                        <li><a href="#.html">Vouchers &amp; Services</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--+createMenu(product_categories, 'menu--mobile')-->
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
                <li class="menu-item-has-children"><a href="index">Home</a><span class="sub-toggle"></span>
                    <ul class="sub-menu">
                        <li><a href="index.html">Marketplace Full Width</a>
                        </li>
                        <li><a href="home-autopart.html">Home Auto Parts</a>
                        </li>
                        <li><a href="home-technology.html">Home Technology</a>
                        </li>
                        <li><a href="home-organic.html">Home Organic</a>
                        </li>
                        <li><a href="home-marketplace.html">Home Marketplace V1</a>
                        </li>
                        <li><a href="home-marketplace-2.html">Home Marketplace V2</a>
                        </li>
                        <li><a href="home-marketplace-3.html">Home Marketplace V3</a>
                        </li>
                        <li><a href="home-marketplace-4.html">Home Marketplace V4</a>
                        </li>
                        <li><a href="home-electronic.html">Home Electronic</a>
                        </li>
                        <li><a href="home-furniture.html">Home Furniture</a>
                        </li>
                        <li><a href="home-kid.html">Home Kids</a>
                        </li>
                        <li><a href="homepage-photo-and-video.html">Home photo and picture</a>
                        </li>
                        <li><a href="home-medical.html">Home Medical</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="shop-default">Shop</a><span class="sub-toggle"></span>
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
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="">Pages</a><span class="sub-toggle"></span>
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
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="">Blogs</a><span class="sub-toggle"></span>
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
    <div class="ps-breadcrumb">
        <div class="ps-container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Shop</li>
            </ul>
        </div>
    </div>
    <div class="ps-page--shop">
        <div class="ps-container">
            <div class="ps-shop-banner">
                <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on"><a href="#"><img src="img/slider/shop-default/1.jpg" alt=""></a><a href="#"><img src="img/slider/shop-default/2.jpg" alt=""></a></div>
            </div>
            <div class="ps-shop-brand"><a href="#"><img src="img/brand/1.jpg" alt=""></a><a href="#"><img src="img/brand/2.jpg" alt=""></a><a href="#"><img src="img/brand/3.jpg" alt=""></a><a href="#"><img src="img/brand/4.jpg" alt=""></a><a href="#"><img src="img/brand/5.jpg" alt=""></a><a href="#"><img src="img/brand/6.jpg" alt=""></a><a href="#"><img src="img/brand/7.jpg" alt=""></a><a href="#"><img src="img/brand/8.jpg" alt=""></a></div>
            <div class="ps-shop-categories">
                <div class="row align-content-lg-stretch">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--category-2" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="img/categories/shop/1.jpg" alt=""></div>
                            <div class="ps-block__content">
                                <h4>Clothing &amp; Apparel</h4>
                                <ul>
                                    <li><a href="shop-default.html">Accessories</a></li>
                                    <li><a href="shop-default.html">Bags</a></li>
                                    <li><a href="shop-default.html">Kid's Fashion</a></li>
                                    <li><a href="shop-default.html">Mens</a></li>
                                    <li><a href="shop-default.html">Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--category-2" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="img/categories/shop/2.jpg" alt=""></div>
                            <div class="ps-block__content">
                                <h4>Garden &amp; Kitchen</h4>
                                <ul>
                                    <li><a href="shop-default.html">Cookware</a></li>
                                    <li><a href="shop-default.html">Decoration</a></li>
                                    <li><a href="shop-default.html">Furniture</a></li>
                                    <li><a href="shop-default.html">Garden Tools</a></li>
                                    <li><a href="shop-default.html">Home Improvement</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--category-2" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="img/categories/shop/3.jpg" alt=""></div>
                            <div class="ps-block__content">
                                <h4>Consumer Electrics</h4>
                                <ul>
                                    <li><a href="shop-default.html">Air Conditioners</a></li>
                                    <li><a href="shop-default.html">Audios &amp; Theaters</a></li>
                                    <li><a href="shop-default.html">Car Electronics</a></li>
                                    <li><a href="shop-default.html">Office Electronics</a></li>
                                    <li><a href="shop-default.html">Refrigerations</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--category-2" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="img/categories/shop/4.jpg" alt=""></div>
                            <div class="ps-block__content">
                                <h4>Health &amp; Beauty</h4>
                                <ul>
                                    <li><a href="shop-default.html">Equipments</a></li>
                                    <li><a href="shop-default.html">Hair Care</a></li>
                                    <li><a href="shop-default.html">Perfumer</a></li>
                                    <li><a href="shop-default.html">Skin Care</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--category-2" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="img/categories/shop/5.jpg" alt=""></div>
                            <div class="ps-block__content">
                                <h4>Computers &amp; Technologies</h4>
                                <ul>
                                    <li><a href="shop-default.html">Desktop PC</a></li>
                                    <li><a href="shop-default.html">Laptop</a></li>
                                    <li><a href="shop-default.html">Smartphones</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--category-2" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="img/categories/shop/6.jpg" alt=""></div>
                            <div class="ps-block__content">
                                <h4>Jewelry &amp; Watches</h4>
                                <ul>
                                    <li><a href="shop-default.html">Gemstones Jewelry</a></li>
                                    <li><a href="shop-default.html">Men's Watches</a></li>
                                    <li><a href="shop-default.html">Women's Watches</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--category-2" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="img/categories/shop/7.jpg" alt=""></div>
                            <div class="ps-block__content">
                                <h4>Phone &amp; Accessories</h4>
                                <ul>
                                    <li><a href="shop-default.html">Iphone 8</a></li>
                                    <li><a href="shop-default.html">Iphone X</a></li>
                                    <li><a href="shop-default.html">Samsung Note 8</a></li>
                                    <li><a href="shop-default.html">Samsung S8</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--category-2" data-mh="categories">
                            <div class="ps-block__thumbnail"><img src="img/categories/shop/8.jpg" alt=""></div>
                            <div class="ps-block__content">
                                <h4>Sport &amp; Outdoor</h4>
                                <ul>
                                    <li><a href="shop-default.html">Freezer Burn</a></li>
                                    <li><a href="shop-default.html">Frigde Cooler</a></li>
                                    <li><a href="shop-default.html">Wine Cabinets</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-layout--shop">
                <div class="ps-layout__left">
                    <aside class="widget widget_shop">
                        <h4 class="widget-title">Categories</h4>
                        <ul class="ps-list--categories">
                            <li class="menu-item-has-children"><a href="shop-default.html">Clothing &amp; Apparel</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="shop-default.html">Womens</a>
                                    </li>
                                    <li><a href="shop-default.html">Mens</a>
                                    </li>
                                    <li><a href="shop-default.html">Bags</a>
                                    </li>
                                    <li><a href="shop-default.html">Sunglasses</a>
                                    </li>
                                    <li><a href="shop-default.html">Accessories</a>
                                    </li>
                                    <li><a href="shop-default.html">Kid's Fashion</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="shop-default.html">Garden &amp; Kitchen</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="shop-default.html">Cookware</a>
                                    </li>
                                    <li><a href="shop-default.html">Decoration</a>
                                    </li>
                                    <li><a href="shop-default.html">Furniture</a>
                                    </li>
                                    <li><a href="shop-default.html">Garden Tools</a>
                                    </li>
                                    <li><a href="shop-default.html">Home Improvement</a>
                                    </li>
                                    <li><a href="shop-default.html">Powers And Hand Tools</a>
                                    </li>
                                    <li><a href="shop-default.html">Utensil &amp; Gadget</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="shop-default.html">Consumer Electrics</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children"><a href="shop-default.html">Air Conditioners</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                        <ul class="sub-menu">
                                            <li><a href="shop-default.html">Accessories</a>
                                            </li>
                                            <li><a href="shop-default.html">Type Hanging Cell</a>
                                            </li>
                                            <li><a href="shop-default.html">Type Hanging Wall</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="shop-default.html">Audios &amp; Theaters</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                        <ul class="sub-menu">
                                            <li><a href="shop-default.html">Headphone</a>
                                            </li>
                                            <li><a href="shop-default.html">Home Theater System</a>
                                            </li>
                                            <li><a href="shop-default.html">Speakers</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="shop-default.html">Car Electronics</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                        <ul class="sub-menu">
                                            <li><a href="shop-default.html">Audio &amp; Video</a>
                                            </li>
                                            <li><a href="shop-default.html">Car Security</a>
                                            </li>
                                            <li><a href="shop-default.html">Radar Detector</a>
                                            </li>
                                            <li><a href="shop-default.html">Vehicle GPS</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="shop-default.html">Office Electronics</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                        <ul class="sub-menu">
                                            <li><a href="shop-default.html">Printers</a>
                                            </li>
                                            <li><a href="shop-default.html">Projectors</a>
                                            </li>
                                            <li><a href="shop-default.html">Scanners</a>
                                            </li>
                                            <li><a href="shop-default.html">Store &amp; Business</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="shop-default.html">TV Televisions</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                        <ul class="sub-menu">
                                            <li><a href="shop-default.html">4K Ultra HD TVs</a>
                                            </li>
                                            <li><a href="shop-default.html">LED TVs</a>
                                            </li>
                                            <li><a href="shop-default.html">OLED TVs</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="shop-default.html">Washing Machines</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                        <ul class="sub-menu">
                                            <li><a href="shop-default.html">Type Drying Clothes</a>
                                            </li>
                                            <li><a href="shop-default.html">Type Horizontal</a>
                                            </li>
                                            <li><a href="shop-default.html">Type Vertical</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-default.html">Refrigerators</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="shop-default.html">Health &amp; Beauty</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="shop-default.html">Equipments</a>
                                    </li>
                                    <li><a href="shop-default.html">Hair Care</a>
                                    </li>
                                    <li><a href="shop-default.html">Perfumer</a>
                                    </li>
                                    <li><a href="shop-default.html">Skin Care</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="shop-default.html">Computers &amp; Technologies</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="shop-default.html">Desktop PC</a>
                                    </li>
                                    <li><a href="shop-default.html">Laptop</a>
                                    </li>
                                    <li><a href="shop-default.html">Smartphones</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="shop-default.html">Jewelry &amp; Watches</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="shop-default.html">Gemstone Jewelry</a>
                                    </li>
                                    <li><a href="shop-default.html">Men's Watches</a>
                                    </li>
                                    <li><a href="shop-default.html">Women's Watches</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="shop-default.html">Phones &amp; Accessories</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="shop-default.html">Iphone 8</a>
                                    </li>
                                    <li><a href="shop-default.html">Iphone X</a>
                                    </li>
                                    <li><a href="shop-default.html">Sam Sung Note 8</a>
                                    </li>
                                    <li><a href="shop-default.html">Sam Sung S8</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="shop-default.html">Sport &amp; Outdoor</a><span class="sub-toggle"><i class="fa fa-angle-down"></i></span>
                                <ul class="sub-menu">
                                    <li><a href="shop-default.html">Freezer Burn</a>
                                    </li>
                                    <li><a href="shop-default.html">Fridge Cooler</a>
                                    </li>
                                    <li><a href="shop-default.html">Wine Cabinets</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop-default.html">Babies &amp; Moms</a>
                            </li>
                            <li><a href="shop-default.html">Books &amp; Office</a>
                            </li>
                            <li><a href="shop-default.html">Cars &amp; Motocycles</a>
                            </li>
                        </ul>
                    </aside>
                    <aside class="widget widget_shop">
                        <h4 class="widget-title">BY BRANDS</h4>
                        <form class="ps-form--widget-search" action="do_action" method="get">
                            <input class="form-control" type="text" placeholder="">
                            <button><i class="icon-magnifier"></i></button>
                        </form>
                        <figure class="ps-custom-scrollbar" data-height="250">
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-1" name="brand" />
                                <label for="brand-1">Adidas (3)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-2" name="brand" />
                                <label for="brand-2">Amcrest (1)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-3" name="brand" />
                                <label for="brand-3">Apple (2)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-4" name="brand" />
                                <label for="brand-4">Asus (19)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-5" name="brand" />
                                <label for="brand-5">Baxtex (20)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-6" name="brand" />
                                <label for="brand-6">Adidas (11)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-7" name="brand" />
                                <label for="brand-7">Casio (9)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-8" name="brand" />
                                <label for="brand-8">Electrolux (0)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-9" name="brand" />
                                <label for="brand-9">Gallaxy (0)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-10" name="brand" />
                                <label for="brand-10">Samsung (0)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-11" name="brand" />
                                <label for="brand-11">Sony (0)</label>
                            </div>
                        </figure>
                        <figure>
                            <h4 class="widget-title">By Price</h4>
                            <div id="nonlinear"></div>
                            <p class="ps-slider__meta">Price:<span class="ps-slider__value">$<span class="ps-slider__min"></span></span>-<span class="ps-slider__value">$<span class="ps-slider__max"></span></span></p>
                        </figure>
                        <figure>
                            <h4 class="widget-title">By Price</h4>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="review-1" name="review">
                                <label for="review-1"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i></span><small>(13)</small></label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="review-2" name="review">
                                <label for="review-2"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star"></i></span><small>(13)</small></label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="review-3" name="review">
                                <label for="review-3"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><small>(5)</small></label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="review-4" name="review">
                                <label for="review-4"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><small>(5)</small></label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="review-5" name="review">
                                <label for="review-5"><span><i class="fa fa-star rate"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><small>(1)</small></label>
                            </div>
                        </figure>
                        <figure>
                            <h4 class="widget-title">By Color</h4>
                            <div class="ps-checkbox ps-checkbox--color color-1 ps-checkbox--inline">
                                <input class="form-control" type="checkbox" id="color-1" name="size" />
                                <label for="color-1"></label>
                            </div>
                            <div class="ps-checkbox ps-checkbox--color color-2 ps-checkbox--inline">
                                <input class="form-control" type="checkbox" id="color-2" name="size" />
                                <label for="color-2"></label>
                            </div>
                            <div class="ps-checkbox ps-checkbox--color color-3 ps-checkbox--inline">
                                <input class="form-control" type="checkbox" id="color-3" name="size" />
                                <label for="color-3"></label>
                            </div>
                            <div class="ps-checkbox ps-checkbox--color color-4 ps-checkbox--inline">
                                <input class="form-control" type="checkbox" id="color-4" name="size" />
                                <label for="color-4"></label>
                            </div>
                            <div class="ps-checkbox ps-checkbox--color color-5 ps-checkbox--inline">
                                <input class="form-control" type="checkbox" id="color-5" name="size" />
                                <label for="color-5"></label>
                            </div>
                            <div class="ps-checkbox ps-checkbox--color color-6 ps-checkbox--inline">
                                <input class="form-control" type="checkbox" id="color-6" name="size" />
                                <label for="color-6"></label>
                            </div>
                            <div class="ps-checkbox ps-checkbox--color color-7 ps-checkbox--inline">
                                <input class="form-control" type="checkbox" id="color-7" name="size" />
                                <label for="color-7"></label>
                            </div>
                            <div class="ps-checkbox ps-checkbox--color color-8 ps-checkbox--inline">
                                <input class="form-control" type="checkbox" id="color-8" name="size" />
                                <label for="color-8"></label>
                            </div>
                        </figure>
                        <figure class="sizes">
                            <h4 class="widget-title">BY SIZE</h4><a href="#">L</a><a href="#">M</a><a href="#">S</a><a href="#">XL</a>
                        </figure>
                    </aside>
                </div>
                <div class="ps-layout__right">
                    <div class="ps-block--shop-features">
                        <div class="ps-block__header">
                            <h3>Best Sale Items</h3>
                            <div class="ps-block__navigation"><a class="ps-carousel__prev" href="#recommended1"><i class="icon-chevron-left"></i></a><a class="ps-carousel__next" href="#recommended1"><i class="icon-chevron-right"></i></a></div>
                        </div>
                        <div class="ps-block__content">
                            <div class="owl-slider" id="recommended1" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                               
                           
                            @foreach ($products as $product)
                                   
                                <div class="ps-product">
                                    <div class="ps-product__thumbnail"><a href="{{ route('details', ['id'=>$product['id']])}}"><img src="{{ route('display.product.image',['id'=>$product['id'], 'path'=>$product['images'][0]['id']] )}}" alt="" /></a>
                                        <div class="ps-product__badge hot">Hot</div>
                                        <ul class="ps-product__actions">
                                             <li>
                                                <a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a>
                                            </li>
                                            <li>
                                               
                                                <form action="{{ route('cart.store') }}" method="POST" id="addCartForm">	
                                                    @csrf
                                                     
                                                    <input class="form-control" id='quantity' name='quantity' type="hidden" value='1'>
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                                            <button type='submit' style="border:none; background-color: transparent;">
                                                            <i class="icon-bag2"></i>
                                                        </button>
                                                        </a>
                                                        
                                                                                    
                                                        <input type="hidden" id="productId" name="productId" value="{{ $product['id'] }}">
                                                           
                                                </form>
                                            </li>

                                           

                                            <li>
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a>
                                            </li>

                                           
                                        </ul>
                                    </div>
                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">{{ $product['store']['name']}}</a>
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">{{ $product['name']}}</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__price sale" id="product-price-{{$product['id']}}">{{ $product['price']}} </p>
                                        </div>
                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">{{ $product['name']}}</a>
                                            {{-- <p class="ps-product__price sale">$1025.00</p> --}}
                                        </div>
                                    </div>
                                </div>
							@endforeach
                            
                            </div>
                        </div>
                    </div>
                    <div class="ps-block--shop-features">
                        <div class="ps-block__header">
                            <h3>Recommended Items</h3>
                            <div class="ps-block__navigation"><a class="ps-carousel__prev" href="#recommended"><i class="icon-chevron-left"></i></a><a class="ps-carousel__next" href="#recommended"><i class="icon-chevron-right"></i></a></div>
                        </div>
                        <div class="ps-block__content">
                            <div class="owl-slider" id="recommended" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                                <div class="ps-product">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/recommended/1.jpg" alt="" /></a>
                                        <div class="ps-product__badge">-37%</div>
                                        <ul class="ps-product__actions">
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Ciate Palemore Lipstick Bold Red Color</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__price sale">$42.99 <del>$60.00 </del></p>
                                        </div>
                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Ciate Palemore Lipstick Bold Red Color</a>
                                            <p class="ps-product__price sale">$42.99 <del>$60.00 </del></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/recommended/2.jpg" alt="" /></a>
                                        <div class="ps-product__badge">-37%</div>
                                        <ul class="ps-product__actions">
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Set 30 Piece Korea StartSkin Natural Mask</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__price sale">$32.99 <del>$60.00 </del></p>
                                        </div>
                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Set 30 Piece Korea StartSkin Natural Mask</a>
                                            <p class="ps-product__price sale">$32.99 <del>$60.00 </del></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/recommended/3.jpg" alt="" /></a>
                                        <div class="ps-product__badge">-25%</div>
                                        <ul class="ps-product__actions">
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Baxter Care Hair Kit For Bearded Mens</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>02</span>
                                            </div>
                                            <p class="ps-product__price sale">$93.00 <del>$60.00 </del></p>
                                        </div>
                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Baxter Care Hair Kit For Bearded Mens</a>
                                            <p class="ps-product__price sale">$93.00 <del>$60.00 </del></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/recommended/4.jpg" alt="" /></a>
                                        <div class="ps-product__badge">-46%</div>
                                        <ul class="ps-product__actions">
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__price sale">$13.00 <del>$20.00 </del></p>
                                        </div>
                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                                            <p class="ps-product__price sale">$13.00 <del>$20.00 </del></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/recommended/5.jpg" alt="" /></a>
                                        <div class="ps-product__badge">-46%</div>
                                        <ul class="ps-product__actions">
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__price sale">$13.00 <del>$20.00 </del></p>
                                        </div>
                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                                            <p class="ps-product__price sale">$13.00 <del>$20.00 </del></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/recommended/6.jpg" alt="" /></a>
                                        <div class="ps-product__badge">-28%</div>
                                        <ul class="ps-product__actions">
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">LG White Front Load Steam Washer</a>
                                            <div class="ps-product__rating">
                                                <select class="ps-rating" data-read-only="true">
                                                    <option value="1">1</option>
                                                    <option value="1">2</option>
                                                    <option value="1">3</option>
                                                    <option value="1">4</option>
                                                    <option value="2">5</option>
                                                </select><span>01</span>
                                            </div>
                                            <p class="ps-product__price sale">$1025.00 <del>$1422.00 </del></p>
                                        </div>
                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">LG White Front Load Steam Washer</a>
                                            <p class="ps-product__price sale">$1025.00 <del>$1422.00 </del></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-product">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/recommended/7.jpg" alt="" /></a>
                                        <ul class="ps-product__actions">
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
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
                                            <p class="ps-product__price">$599.00</p>
                                        </div>
                                        <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                            <p class="ps-product__price">$599.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-shopping ps-tab-root">
                        <div class="ps-shopping__header">
                            <p><strong> 36</strong> Products found</p>
                            <div class="ps-shopping__actions">
                                <select class="ps-select" data-placeholder="Sort Items">
                                    <option>Sort by latest</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by average rating</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                </select>
                                <div class="ps-shopping__view">
                                    <p>View</p>
                                    <ul class="ps-tab-list">
                                        <li class="active"><a href="#tab-1"><i class="icon-grid"></i></a></li>
                                        <li><a href="#tab-2"><i class="icon-list4"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ps-tabs">
                            <div class="ps-tab active" id="tab-1">
                                <div class="ps-shopping-product">
                                    <div class="row">
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/1.jpg" alt="" /></a>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">ROBERT’S STORE</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                                        <p class="ps-product__price">$1310.00</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                                        <p class="ps-product__price">$1310.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/1.jpg" alt="" /></a>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                                        <p class="ps-product__price">$1150.00</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                                        <p class="ps-product__price">$1150.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/2.jpg" alt="" /></a>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless Speaker</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price">$42.99 - $60.00</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless Speaker</a>
                                                        <p class="ps-product__price">$42.99 - $60.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/3.jpg" alt="" /></a>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
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
                                                        <p class="ps-product__price">$125.30</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                                        <p class="ps-product__price">$125.30</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/4.jpg" alt="" /></a>
                                                    <div class="ps-product__badge hot">hot</div>
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
                                                        <p class="ps-product__price">$55.99</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                                        <p class="ps-product__price">$55.99</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/5.jpg" alt="" /></a>
                                                    <div class="ps-product__badge">-37%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                                        <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/6.jpg" alt="" /></a>
                                                    <div class="ps-product__badge">-5%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Youngshop</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>01</span>
                                                        </div>
                                                        <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                                        <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/7.jpg" alt="" /></a>
                                                    <div class="ps-product__badge">-16%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Youngshop</a>
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
                                                        <p class="ps-product__price sale">$567.89 <del>$670.20 </del></p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                                        <p class="ps-product__price sale">$567.89 <del>$670.20 </del></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/8.jpg" alt="" /></a>
                                                    <div class="ps-product__badge">-16%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young shop</a>
                                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                                        <div class="ps-product__rating">
                                                            <select class="ps-rating" data-read-only="true">
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="2">5</option>
                                                            </select><span>02</span>
                                                        </div>
                                                        <p class="ps-product__price sale">$35.89 <del>$42.20 </del></p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                                        <p class="ps-product__price sale">$35.89 <del>$42.20 </del></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/9.jpg" alt="" /></a>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young shop</a>
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
                                                        <p class="ps-product__price">$35.89</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                                        <p class="ps-product__price">$35.89</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/10.jpg" alt="" /></a>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
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
                                                        <p class="ps-product__price">$29.39 - $39.99</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                                        <p class="ps-product__price">$29.39 - $39.99</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/11.jpg" alt="" /></a>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
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
                                                        <p class="ps-product__price">$13.43</p>
                                                    </div>
                                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                                        <p class="ps-product__price">$13.43</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-pagination">
                                    <ul class="pagination">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">Next Page<i class="icon-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ps-tab" id="tab-2">
                                <div class="ps-shopping-product">
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/1.jpg" alt="" /></a>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                                <p class="ps-product__vendor">Sold by:<a href="#">ROBERT’S STORE</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price">$1310.00</p><a class="ps-btn" href="#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/1.jpg" alt="" /></a>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                                <p class="ps-product__vendor">Sold by:<a href="#">Young Shop</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price">$1150.00</p><a class="ps-btn" href="#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/2.jpg" alt="" /></a>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless Speaker</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Sold by:<a href="#">Go Pro</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price">$42.99 - $60.00</p><a class="ps-btn" href="#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/3.jpg" alt="" /></a>
                                        </div>
                                        <div class="ps-product__container">
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
                                                <p class="ps-product__vendor">Sold by:<a href="#">Go Pro</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price">$125.30</p><a class="ps-btn" href="#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/4.jpg" alt="" /></a>
                                        </div>
                                        <div class="ps-product__container">
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
                                                <p class="ps-product__vendor">Sold by:<a href="#">Global Office</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price">$55.99</p><a class="ps-btn" href="#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/5.jpg" alt="" /></a>
                                            <div class="ps-product__badge">-37%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Sold by:<a href="#">Robert's Store</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p><a class="ps-btn" href="#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/6.jpg" alt="" /></a>
                                            <div class="ps-product__badge">-5%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Sold by:<a href="#">Youngshop</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p><a class="ps-btn" href="#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/7.jpg" alt="" /></a>
                                            <div class="ps-product__badge">-16%</div>
                                        </div>
                                        <div class="ps-product__container">
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
                                                <p class="ps-product__vendor">Sold by:<a href="#">Youngshop</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">$567.89 <del>$670.20 </del></p><a class="ps-btn" href="#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/8.jpg" alt="" /></a>
                                            <div class="ps-product__badge">-16%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>02</span>
                                                </div>
                                                <p class="ps-product__vendor">Sold by:<a href="#">Young shop</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">$35.89 <del>$42.20 </del></p><a class="ps-btn" href="#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/9.jpg" alt="" /></a>
                                        </div>
                                        <div class="ps-product__container">
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
                                                <p class="ps-product__vendor">Sold by:<a href="#">Young shop</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price">$35.89</p><a class="ps-btn" href="#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/10.jpg" alt="" /></a>
                                        </div>
                                        <div class="ps-product__container">
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
                                                <p class="ps-product__vendor">Sold by:<a href="#">Go Pro</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price">$29.39 - $39.99</p><a class="ps-btn" href="#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/11.jpg" alt="" /></a>
                                        </div>
                                        <div class="ps-product__container">
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
                                                <p class="ps-product__vendor">Sold by:<a href="#">Robert's Store</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price">$13.43</p><a class="ps-btn" href="#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-pagination">
                                    <ul class="pagination">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">Next Page<i class="icon-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="shop-filter-lastest" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="list-group"><a class="list-group-item list-group-item-action" href="#">Sort by</a><a class="list-group-item list-group-item-action" href="#">Sort by average rating</a><a class="list-group-item list-group-item-action" href="#">Sort by latest</a><a class="list-group-item list-group-item-action" href="#">Sort by price: low to high</a><a class="list-group-item list-group-item-action" href="#">Sort by price: high to low</a><a class="list-group-item list-group-item-action text-center" href="#" data-dismiss="modal"><strong>Close</strong></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-newsletter">
        <div class="container">
            <form class="ps-form--newsletter" action="do_action" method="post">
                <div class="row">
                    <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-form__left">
                            <h3>Newsletter</h3>
                            <p>Subcribe to get information about products and coupons</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-form__right">
                            <div class="form-group--nest">
                                <input class="form-control" type="email" placeholder="Email address">
                                <button class="ps-btn">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
     <script> 
      console.log(ids);
            formatPrice(ids.split(','));
        </script>
@endsection