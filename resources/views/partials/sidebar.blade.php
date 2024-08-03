<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a style="color: white;">FINETRACKER</a>

            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <a href="{{ url('/template') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/categories') }}">
                        <i class="fas fa-tags"></i>
                        <p>Categories</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/expenses') }}">
                        <i class="fas fa-money-bill"></i>
                        <p>Expenses</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/revenues') }}">
                        <i class="fas fa-chart-line"></i>
                        <p>Revenues</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
