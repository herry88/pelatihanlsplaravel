<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
<<<<<<< HEAD
        <li><a class="nav-link" href="{{ route('home') }}"><i class="far fa-square"></i>
                <span>Dashboard</span></a>
        </li>

        <li class="menu-header">Data Menu</li>
        @if (Auth::user()->level == 'admin')
=======
        <li><a class="nav-link" href="#"><i class="far fa-square"></i> <span>Dashboard</span></a></li>
        @if (\Auth::user()->level == 'admin')
            <li class="menu-header">Data Menu</li>

>>>>>>> 70a5d6ea5410ea4e58b9b5c40bfbd17e36771484
            <li><a class="nav-link" href="{{ route('category.index') }}"><i class="far fa-square"></i> <span>Data
                        Category</span></a></li>
            <li><a class="nav-link" href="{{ route('product.index') }}"><i class="far fa-square"></i> <span>Data
                        Product</span></a></li>
<<<<<<< HEAD
            <li><a class="nav-link" href="{{ route('order.index') }}"><i class="far fa-square"></i>
                    <span>Order</span></a></li>
            <li><a class="nav-link" href="#"><i class="far fa-square"></i> <span>Transaction</span></a></li>
        @else
            <li><a class="nav-link" href="{{ route('order.index') }}"><i class="far fa-square"></i> <span>Order</span></a></li>
            <li><a class="nav-link" href="#"><i class="far fa-square"></i> <span>Transaction</span></a></li>
        @endif
=======
            <li><a class="nav-link" href="{{ route('transaksi.index') }}"><i class="far fa-square"></i> <span>Order</span></a></li>
            <li><a class="nav-link" href="#"><i class="far fa-square"></i> <span>Transaction</span></a></li>

        @else
            <li><a class="nav-link" href="{{ route('transaksi.index') }}"><i class="far fa-square"></i> <span>Order</span></a></li>
            <li><a class="nav-link" href="#"><i class="far fa-square"></i> <span>Transaction</span></a></li>
        @endif



>>>>>>> 70a5d6ea5410ea4e58b9b5c40bfbd17e36771484
    </ul>


</aside>
