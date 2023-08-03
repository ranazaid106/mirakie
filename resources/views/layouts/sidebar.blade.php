<aside class="menu-sidebar d-none d-lg-block">
  <div class="logo">
    <!-- <a href="#">
      <img src="images/icon/logo.png" alt="Cool Admin" />
    </a> -->
  </div>
  <div class="menu-sidebar__content js-scrollbar1">
    <nav class="navbar-sidebar">
      <ul class="list-unstyled navbar__list">
        <li class=" has-sub">
          <a class="js-arrow" href="{{route('home')}}">
            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
        </li>
        <li>
          <a href="{{route('order_index')}}">
            <i class="fas fa-table"></i>Orders</a>
        </li>
          @can('View Customer')
        <li>
          <a href="{{route('customer_index')}}">
            <i class="fas  fa-user"></i>Customer</a>
        </li>
         @endcan
           @if (auth()->user()->can('View User', App\User::class) || auth()->user()->can('View Role', Spatie\Permission\Models\Role::class) || auth()->user()->can('View Coupen', App\Coupen::class))
        <li class="has-sub">
          <a class="js-arrow" href="#">
            <i class="fas fa-users"></i>User Management </a>
          <ul class="list-unstyled navbar__sub-list js-sub-list">
                @can('View User')
            <li>
              <a href="{{route('user')}}">Users</a>
            </li>
               @endcan
            @can('View Role')
            <li>
              <a href="{{route('role')}}">Roles & Permissions</a>
            </li>
                  @endcan
            @can('View Coupen')
            <li>
              <a href="{{route('coupen_index')}}">Coupens</a>
            </li>
             @endcan
          </ul>
        </li>
  @endif
        @if (auth()->user()->can('View Product', App\Product::class) || auth()->user()->can('View Product Variation', App\ProductVariation::class))
        <li class="has-sub">
          <a class="js-arrow" href="#">
            <i class="fas  fa-plus-square"></i>Product</a>
          <ul class="list-unstyled navbar__sub-list js-sub-list">
               @can('View Product')
            <li>
              <a href="{{route('product_index')}}">Products</a>
            </li>
                  @endcan
            {{-- @can('View Product Variation')
            <li>
              <a href="{{route('productvariation')}}">Variations</a>
            </li>
               @endcan --}}
          </ul>
        </li>
               @endif

        <li>
          <a href="{{url('details')}}">
            <i class="far  fa-files-o"></i>Data Details</a>
        </li>
        <li>
          <a href="{{url('PaymentsInvoices')}}">
            <i class="far fa-check-square"></i>Payments/Invoices</a>
        </li>
        
      </ul>
    </nav>
  </div>
</aside>