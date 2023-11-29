<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
      <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="sidebarMenuLabel">Wpu Blog</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                <span data-feather ="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }} " href="/dashboard/posts">
              <span data-feather ="file-text"></span>
                My Posts
              </a>
            </li>
          </ul>

          @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }} " href="/dashboard/categories">
              <span data-feather ="grid"></span>
                Post Categories
              </a>
            </li>
        </ul>
        @endcan

        </div>
      </div>
    </div>