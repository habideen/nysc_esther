<div class="col-md-4 col-lg-3">
  <h1 class="h5 fw-bold mb-3">Registration Steps</h1>
  <ul>
    <li class="mb-3">
      <a class="{{ Request::segment(4) == '1' ? 'step-active' : ''}}" href="/student/reg/step/1">NIN
        Validation</a>&nbsp;
    </li>
    <li class="mb-3">
      <a class="{{ Request::segment(4) == '2' ? 'step-active' : ''}}" href="/student/reg/step/2">Institution
        Validation</a>
    </li>
    <li class="mb-3">
      <a class="{{ Request::segment(4) == '3' ? 'step-active' : ''}}" href="/student/reg/step/3">User
        Information</a>
    </li>
    <li class="mb-3">
      <a class="{{ Request::segment(4) == '4' ? 'step-active' : ''}}" href="/student/reg/step/4">Profile
        Image</a>
    </li>
    <li class="mb-3">
      <a class="{{ Request::segment(4) == '5' ? 'step-active' : ''}}" href="/student/reg/step/5">Other
        Information</a>
    </li>
    <li class="mb-3">
      <a class="{{ Request::segment(4) == '6' ? 'step-active' : ''}}" href="/student/reg/step/6">Next of Kin</a>
    </li>
    <li class="mb-3">
      <a class="{{ Request::segment(4) == '7' ? 'step-active' : ''}}" href="/student/reg/step/7">Institution
        Attended</a>
    </li>
    <li class="mb-3">
      <a class="{{ Request::segment(4) == '8' ? 'step-active' : ''}}" href="/student/reg/step/8">Military
        Information</a>
    </li>
    <li class="mb-3">
      <a class="{{ Request::segment(4) == '9' ? 'step-active' : ''}}" href="/student/reg/step/9">Complete
        Registration</a>
    </li>
  </ul>
</div>