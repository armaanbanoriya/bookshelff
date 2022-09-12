<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
        data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ url('category/display') }}"
                class="nav-link {{ 'category/display' == request()->path() ? 'active' : '' }}">
                <i class="nav-icon fas fa-mountain"></i>
                <p>
                    Categories
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('subimages/display') }}"
                class="nav-link {{ 'subimages/display' == request()->path() ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Sub Images
                </p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ url('product/display') }}"
                class="nav-link {{ 'product/display' == request()->path() ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Products
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('coupon/display') }}"
                class="nav-link {{ 'coupon/display' == request()->path() ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Coupons
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('banner/display') }}"
                class="nav-link {{ 'banner/display' == request()->path() ? 'active' : '' }} ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    View Banner
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('admin/order') }}"
                class="nav-link {{ 'admin/order' == request()->path() ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Orders
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Logout
                </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>


    </ul>
</nav>
