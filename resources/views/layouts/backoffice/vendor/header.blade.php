 <div class="ps-page--single">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">Pages</a></li>
                    <li><a href="vendor-store.html">Vendor Pages</a></li>
                    <li>Vendor Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
        <div class="ps-vendor-dashboard pro">
        <div class="container">
            <div class="ps-section__header">
                <h3>Vendor Dasboard</h3>
                <p>Welcome to your Dashboard, here you can manage store, products, orders and settings.</p>
            </div>
       
            <div class="ps-section__content">
                <ul class="ps-section__links">
                    <li class="active"><a href="{{ route('db.vendor.index')}}">Dashboard</a></li>
                    <li><a href="{{ route('product')}}">Products</a></li>
                    <li><a href="#">Order</a></li>
                    <li><a href="#">Setting</a></li>
                    <li><a href="{{ route('store')}}">View Store</a></li>
                </ul>