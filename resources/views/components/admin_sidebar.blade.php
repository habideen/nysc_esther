<div class="col-md-4 col-lg-3">
  <h1 class="h5 fw-bold mb-3">Actions</h1>
  <ul>
    <li class="mb-3">
      <a class="{{ Request::segment(2) == 'dashboard' ? 'step-active' : ''}}" href="/admin/dashboard">My
        Dashboard</a>&nbsp;
    </li>
    <li class="mb-3 d-none">
      <a class="{{ Request::segment(2) == 'upload_new_students' ? 'step-active' : ''}}"
        href="/admin/upload_new_students">Upload
        New Student</a>
    </li>
    <li class="mb-3">
      <a class="{{ Request::segment(2) == 'view_institutions' ? 'step-active' : ''}}"
        href="/admin/view_institutions">View
        Institutions</a>
    </li>
    <li class="mb-3">
      <a class="{{ Request::segment(2) == 'update_batch' ? 'step-active' : ''}}" href="/admin/update_batch">Update
        Batch</a>
    </li>
    <li class="mb-3">
      <a class="{{ Request::segment(2) == 'update_password' ? 'step-active' : ''}}" href="/admin/update_password">Change
        Password<br></a>
    </li>
    <li class="mb-3">
      <a href="/logout">Logout</a>
    </li>
  </ul>
</div>