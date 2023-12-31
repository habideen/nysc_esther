<!-- Start: Navigation with Button -->
<nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button">
  <div class="container">
    <a class="navbar-brand" href="/"><img class="nav-logo"
        src="/assets/img/banner1.png?h=d40c9ae1f52dad1d312039d01fceb5cb"></a><button data-bs-toggle="collapse"
      class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span
        class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse border-start" id="navcol-1">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="javascript: void(0)">Payment Status</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="javascript: void(0)">Contact Us</a>
        </li>

        @if (Auth::user())
        <li class="nav-item">
          <a class="nav-link text-success"
            href="/{{ Auth::user()->account_type == 'Student' ? 'student' : 'admin' }}/dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger" href="/logout">Logout</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link text-danger" href="/login">Login</a>
        </li>
        @endif

      </ul>
    </div>
  </div>
</nav>
<!-- End: Navigation with Button -->