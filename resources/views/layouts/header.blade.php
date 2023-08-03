<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <!-- <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a> -->
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <a class="js-arrow" href="{{route('home')}}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li>
                    <a href="{{route('order_index')}}">
                        <i class="fas fa-table"></i>Orders</a>
                </li>
                <li>
                    <a href="{{route('customer_index')}}">
                        <i class="fas  fa-user"></i>Customer</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-users"></i>User Management </a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="{{route('user')}}">Users</a>
                        </li>
                        <li>
                            <a href="{{route('role')}}">Roles & Permissions</a>
                        </li>
                        <li>
                            <a href="{{route('coupen_index')}}">Coupens</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas  fa-plus-square"></i>Product</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="{{route('product_index')}}">Products</a>
                        </li>
                        <li>
                            <a href="{{route('productvariation')}}">Variations</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="form.html">
                        <i class="far fa-check-square"></i>Payments/Invoices</a>
                </li>
            </ul>
        </div>
    </nav>
</header>