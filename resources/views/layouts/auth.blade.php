<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>NYSC</title>
  <meta name="twitter:description" content="This is twitter description">
  <meta name="twitter:image" content="/assets/img/connect.svg?h=e88df30aad1d2f2dbbde61e65af08b05">
  <meta property="og:description" content="This is open graph description.">
  <meta property="og:image" content="/assets/img/connect.svg?h=e88df30aad1d2f2dbbde61e65af08b05">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="NYSC twitter description">
  <link rel="icon" type="image/svg+xml" sizes="512x512"
    href="/assets/img/connect.svg?h=e88df30aad1d2f2dbbde61e65af08b05">
  <link rel="icon" type="image/svg+xml" sizes="512x512"
    href="/assets/img/connect.svg?h=e88df30aad1d2f2dbbde61e65af08b05">
  <link rel="icon" type="image/svg+xml" sizes="512x512"
    href="/assets/img/connect.svg?h=e88df30aad1d2f2dbbde61e65af08b05">
  <link rel="icon" type="image/svg+xml" sizes="512x512"
    href="/assets/img/connect.svg?h=e88df30aad1d2f2dbbde61e65af08b05">
  <link rel="icon" type="image/svg+xml" sizes="512x512"
    href="/assets/img/connect.svg?h=e88df30aad1d2f2dbbde61e65af08b05">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Asul">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  @include('components.style')
  @yield('css')
  <style>
    .container.footer {
      min-width: 100%;
      padding-left: 0;
      padding-right: 0;
    }

    @media (max-width: 575px) {
      .container.content {
        padding: 30px !important;
      }
    }
  </style>
</head>

<body class="position-relative">
  <ul class="list-unstyled cb-slideshow">
    <li><span>Text</span>
      <div></div>
    </li>
    <li><span>Text</span>
      <div></div>
    </li>
    <li><span>Text</span>
      <div></div>
    </li>
    <li><span>Text</span>
      <div></div>
    </li>
    <li><span>Text</span>
      <div></div>
    </li>
    <li><span>Text</span>
      <div></div>
    </li>
  </ul>
  @yield('content')

  <div class="container footer">
    @include('components.public_footer')
  </div>

  @include('components.script')
  @yield('script')
</body>

</html>