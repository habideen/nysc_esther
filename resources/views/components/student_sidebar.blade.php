<div class="col-md-4 col-lg-3">
  <h1 class="h5 fw-bold mb-3">Actions</h1>
  <ul>
    <li class="mb-3">
      <a class="{{ Request::segment(2) == 'dashboard' ? 'step-active' : ''}}" href="/student/dashboard">My
        Dashboard</a>&nbsp;
    </li>
    <li class="mb-3">
      <a class="{{ Request::segment(2) == 'update_password' ? 'step-active' : ''}}"
        href="/student/update_password">Change
        Password<br></a>
    </li>
    <li class="mb-3">
      <a class="{{ Request::segment(2) == 'course_correction' ? 'step-active' : ''}} text-muted disabled"
        href="javascript: void(0)">Course Correction</a>
    </li>
    <li class="mb-3">
      <a class="{{ Request::segment(2) == 'ppa_letter' ? 'step-active' : ''}}" href="/student/ppa_letter">PPA Letter</a>
    </li>
    <li class="mb-3">
      <a class="{{ Request::segment(2) == 'lga_clearance' ? 'step-active' : ''}}" href="/student/lga_clearance">LGA
        Clearance</a>
    </li>
    <li class="mb-3">
      <a class="{{ Request::segment(2) == 'disciplinary_case' ? 'step-active' : ''}} text-muted disabled"
        href="javascript: void(0)">Disciplinary Case</a>
    </li>
    <li class="mb-3">
      <a href="/logout">Logout</a>
    </li>
  </ul>
</div>