<ul class="nav flex-column pt-3 pt-md-0">
    <li class="nav-item">
        <a href="{{ route('admin.index') }}" class="d-flex mb-3 align-items-center">
            <span class="mt-1 mx-1 sidebar-text">
                ADMIN
            </span>
        </a>
    </li>
    <li class="nav-item {{ request()->routeIs('admin.index') ? 'active' : '' }}">
        <a href="{{ route('admin.index') }}" class="nav-link">
            <span class="sidebar-icon fa-fw fa fa-home"></span>
            <span class="sidebar-text">{{ __('Dashboard') }}</span>
        </a>
    </li>
</ul>
