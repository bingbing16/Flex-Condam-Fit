<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
        @if (Auth::user()->profile_photo_path)
            <img class="h-8 w-8 rounded-full object-cover" src="/storage/{{Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->name }}" />
        @else
            <img class="h-8 w-8 rounded-full object-cover" src="{{Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> 
        @endif

          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
          <span class="text-secondary text-small">ADMINISTRATOR</span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('redirect') }}">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-title">Category</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-crosshairs-gps menu-icon"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('category') }}">Exercise Category</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ url('nutrition-category') }}">Calories Category</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-title">Exercises</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-crosshairs-gps menu-icon"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('exercises') }}">View Exercises</a></li>
          <!-- <li class="nav-item"> <a class="nav-link" href="{{ url('admin/exercises/create') }}">Add Exercises</a></li> -->
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('stretching') }}">
        <span class="menu-title">Stretching</span>
        <i class="mdi mdi-chart-bar menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('nutrition') }}">
        <span class="menu-title">Nutrition</span>
        <i class="mdi mdi-chart-bar menu-icon"></i>
      </a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" href="{{ url('user') }}">
        <span class="menu-title">User</span>
        <i class="mdi mdi-chart-bar menu-icon"></i>
      </a>
    </li> -->
    <li class="nav-item">
      <a class="nav-link" href="{{ url('devs') }}">
        <span class="menu-title">Developer</span>
        <i class="mdi mdi-table-large menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('setting') }}">
        <span class="menu-title">Settings</span>
        <i class="mdi mdi-table-large menu-icon"></i>
      </a>
    </li>
  </ul>
</nav>