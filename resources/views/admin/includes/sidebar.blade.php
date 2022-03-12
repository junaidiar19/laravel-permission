<nav id="sidebar" class="sidebar js-sidebar">
  <div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="index.html">
      <span class="align-middle">Admin Online Course</span>
    </a>

    <ul class="sidebar-nav">
      <li class="sidebar-header">
        Pages
      </li>

      <li class="sidebar-item {{ (request()->routeIs('admin.dashboard')) ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ route('admin.dashboard') }}">
          <i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>
        </a>
      </li>

      @can('show course')
      <li class="sidebar-item {{ (request()->routeIs('admin.course')) ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ route('admin.course') }}">
          <i class="align-middle" data-feather="film"></i> <span class="align-middle">Kursus</span>
        </a>
      </li>
      @endcan
      
      @can('show order')
      <li class="sidebar-item {{ (request()->routeIs('admin.order')) ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ route('admin.order') }}">
          <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Order</span>
        </a>
      </li>
      @endcan

    </ul>
  </div>
</nav>