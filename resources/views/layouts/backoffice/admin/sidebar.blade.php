 <div class="ps-main__sidebar">
            <div class="ps-sidebar">
                <div class="ps-sidebar__top">
                    <div class="ps-block--user-wellcome">
                        <div class="ps-block__left"><img src="{{ asset('backoffice/admin/img/user/admin.jpg')}}" alt="" /></div>
                        <div class="ps-block__right">
                            <p>Hello,<a href="#">Soho Store</a></p>
                        </div>
                          <form method="POST" action="{{ route('logout') }}" id="logout">
                                        @csrf
                        </form>
                        <div class="ps-block__action">
                            <a href="#" id='icon_exit' >
                            <i class="icon-exit"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ps-block--earning-count"><small>Earning</small>
                        <h3>$12,560.55</h3>
                    </div>
                </div>
                <div class="ps-sidebar__content">
                    <div class="ps-sidebar__center">
                        <ul class="menu">
                            <li><a class="active" href="{{ route('admin.dashboard')}}"><i class="icon-home"></i>Dashboard</a></li>
                            <li><a href="Categories.html"><i class="icon-papers"></i>Categories</a></li>
                            <li><a href="{{route('brand')}}"><i class="icon-shield-check"></i>Brands</a></li>
                            <li><a href="Categories.html"><i class="icon-server"></i>Stores</a></li>
                            <li><a href="products.html"><i class="icon-database"></i>Products</a></li>
                            <li><a href="products.html"><i class="icon-radar"></i>Variations</a></li>
                            <li><a href="orders.html"><i class="icon-bag2"></i>Orders</a></li>
                            <li><a href="orders.html"><i class="icon-cart"></i>Carts</a></li>
                            <li><a href="Categories.html"><i class="icon-cash-dollar"></i>Payments</a></li>
                            <li><a href="customers.html"><i class="icon-users2"></i>Customers</a></li>
                            <li><a href="Categories.html"><i class="icon-users"></i>Vendors</a></li>
                            <li><a href="Categories.html"><i class="icon-users-plus"></i>Shippers</a></li>
                            <li><a href="coupons.html"><i class="icon-percent-circle"></i>Coupons</a></li>
                            <li><a href="coupons.html"><i class="icon-library"></i>Searches</a></li>
                            <li><a href="coupons.html"><i class="icon-panorama"></i>Surveys</a></li>
                            <li><a href="coupons.html"><i class="icon-envelope"></i>Contacts</a></li>
                            <li><a href="settings.html"><i class="icon-cog"></i>Settings</a></li>
                        </ul>
                    </div>
                    <div class="ps-sidebar__footer">
                        <div class="ps-copyright"><img src="{{ asset('backoffice/admin/img/logo.png')}}" alt="">
                            <p>&copy;2020 Marfury marketplace. <br/> All rights reversed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>