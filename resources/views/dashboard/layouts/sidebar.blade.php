<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3 sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' :''}}" aria-current="page" href="/dashboard">
          <span data-feather="home" class="align-text-bottom"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/book/all') ? 'active' :''}}" href="/dashboard/book/all">
          <span data-feather="book" class="align-text-bottom"></span>
          Book
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="users" class="align-text-bottom"></span>
          Publisher
        </a>
      </li> --}}
    </ul>
</nav>