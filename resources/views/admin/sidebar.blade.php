<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}"> <img alt="image" src="{{ asset('/admin/assets/img/takhira.jpg') }}" class="header-logo" /> <span
            class="logo-name">Takhira</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>

        <li class="dropdown">
          <a href="{{ route('dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>

        <li class="dropdown">
            <a href="{{ route('admin.banner.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Silider</span></a>
          </li>

          <li class="dropdown">
            <a href="{{ route('admin.service.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Service</span></a>
          </li>

          <li class="dropdown">
            <a href="{{ route('admin.news.index') }}" class="nav-link"><i data-feather="monitor"></i><span>News</span></a>
          </li>


          <li class="dropdown">
            <a href="{{ route('admin.facts.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Facts</span></a>
          </li>


          <li class="dropdown">
            <a href="{{ route('admin.teacher.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Teachers</span></a>
          </li>

          <li class="dropdown">
            <a href="{{ route('admin.category.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Categories</span></a>
          </li>

          <li class="dropdown">
            <a href="{{ route('admin.course.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Course</span></a>
          </li>

          <li class="dropdown">
            <a href="{{ route('admin.contact.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Contact</span></a>
          </li>


      </ul>
    </aside>
  </div>
