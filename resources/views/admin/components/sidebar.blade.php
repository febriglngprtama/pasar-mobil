<ul class=" navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        <div class="sidebar-brand-text mx-3">Pasar Mobil</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <li
        class="nav-item
     {{ Request::is('admin/product*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="/admin/product">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Products</span>
        </a>
    </li>
</ul>
