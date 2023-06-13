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
</head>

<body>
  @include('components.public_nav')
  @yield('content')
  @include('components.public_footer')
  @include('components.script')
  @yield('script')
</body>

</html>