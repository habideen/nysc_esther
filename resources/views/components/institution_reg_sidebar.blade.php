<div class="col-md-4 col-lg-3">
  <h1 class="h5 fw-bold mb-1">Actions</h1>
  <h6 class="text-muted mb-3">({{Auth::user()->account_type}})</h6>
  <ul>
    <li class="mb-3">
      <a class="{{ Request::segment(2) == 'dashboard' ? 'step-active' : ''}}" href="/institution/dashboard">My
        Dashboard</a>&nbsp;
    </li>
    <li class="mb-3">
      <a class="{{ Request::segment(2) == 'upload_new_students' ? 'step-active' : ''}}"
        href="/institution/upload_new_students">Upload
        New Students</a>
    </li>
    <li class="mb-3">
      <a class="{{ Request::segment(2) == 'view_students' ? 'step-active' : ''}}" href="/institution/view_students">View
        Students</a>
    </li>
    <li class="mb-3">
      <a class="{{ Request::segment(2) == 'update_password' ? 'step-active' : ''}}"
        href="/institution/update_password">Change
        Password<br></a>
    </li>
    <li class="mb-3">
      <a href="/logout">Logout</a>
    </li>
  </ul>
</div>