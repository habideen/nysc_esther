<!DOCTYPE html>
<html lang="en">

<head>
  @include('components.style')
  @yield('css')
</head>

<body>
  @include('components.panel_topnav')
  <div class="container mt-5 mb-5">
    <div class="row">
      @if (Request::segment(1) == 'admin')
      @include('components.admin_sidebar')
      @elseif (Request::segment(2) == 'reg')
      @include('components.student_reg_sidebar')
      @else
      @include('components.student_sidebar')
      @endif

      @yield('content')
    </div>
  </div>
  @include('components.public_footer')
  @include('components.script')
  @yield('script')
</body>

</html>