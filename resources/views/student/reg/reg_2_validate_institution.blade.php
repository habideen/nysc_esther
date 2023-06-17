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
    <link rel="stylesheet" href="/assets/fonts/fontawesome5-overrides.min.css?h=320bd0471c3e8d6b9dd55c98e185506c">
    <link rel="stylesheet" href="/assets/css/bg_img_animation.css?h=1de2aac0762a31881c0f093caed796d2">
    <link rel="stylesheet" href="/assets/css/color.css?h=d41d8cd98f00b204e9800998ecf8427e">
    <link rel="stylesheet" href="/assets/css/demo.css?h=cd41e849ed41933699dbe875e461deaa">
    <link rel="stylesheet" href="/assets/css/full-screen-navbar-search.css?h=fd4a213646c85259a1b74385e02cccf4">
    <link rel="stylesheet" href="/assets/css/Navigation-with-Button.css?h=3a20a193fed307061355e7d4a42f7e18">
    <link rel="stylesheet" href="/assets/css/styles.css?h=a2c32dad2a12229ca4a062adbb1f0694">
</head>

<body>
    <!-- Start: Navigation with Button -->
    <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button">
        <div class="container"><a class="navbar-brand" href="../"><img class="nav-logo"
                    src="/assets/img/banner1.png?h=d40c9ae1f52dad1d312039d01fceb5cb"></a><button
                data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                    class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse border-start" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="../">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../reg_1_nin.html">Continue Reg.</a></li>
                    <li class="nav-item"><a class="nav-link" href="/student/dashboard.html">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Password</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href="logout.html">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav><!-- End: Navigation with Button -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <h1 class="h5 fw-bold mb-3">Registration Steps</h1>
                <ul>
                    <li class="mb-3"><a class="step-active" href="../reg_1_nin.html">NIN Validation</a>&nbsp;</li>
                    <li class="mb-3"><a href="../reg_2_validate_institution.html">Institution Validation</a></li>
                    <li class="mb-3"><a href="../reg_3_user_information.html">User Information</a></li>
                    <li class="mb-3"><a href="../reg_4_profile_picture.html">Profile Image</a></li>
                    <li class="mb-3"><a href="../reg_5_other_information.html">Other Information</a></li>
                    <li class="mb-3"><a href="../reg_6_next_of_kin.html">Next of Kin</a></li>
                    <li class="mb-3"><a href="../reg_7_institution_attended.html">Institution Attended</a></li>
                    <li class="mb-3"><a href="../reg_8_military_info.html">Military Information</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-8 col-lg-9">
                <div id="green_header" class="p-3 mt-5 mt-md-0"><span class="h4 text-dark fw-bold">Institution that
                        cleared you for service</span></div>
                <form class="mt-4" method="post">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group"><label class="form-label">Institution<span
                                        class="ms-2 text-danger">*</span></label>
                                <div><select class="form-select" id="institution_id" name="institution_id" required="">
                                        <option value="undefined">Select Institution</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="form-group"><label class="form-label">Matric. Number<span
                                        class="ms-2 text-danger">*</span></label>
                                <div><input class="form-control" type="text" id="matric_no" name="matric_no"
                                        required=""></div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="form-group"><label class="form-label" id="first_name" name="first_name">UTME
                                    No.<span class="ms-2 text-danger">*</span></label>
                                <div><input class="form-control" type="text" id="jamb_reg_no" name="jamb_reg_no"
                                        required=""></div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="form-group"><label class="form-label" id="first_name"
                                    name="first_name">Graduation Year<span
                                        class="ms-2 text-danger">*</span></label><select class="form-select"
                                    id="graduation_date" name="graduation_date" required="">
                                    <option value="undefined"></option>
                                </select></div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mt-5"><button class="btn btn-danger form-control" id="validate_btn"
                                    type="submit" name="validate_btn">Validate Now</button></div>
                        </div>
                        <div class="col-12 mt-5">
                            <p class="text-danger mb-3">Not Validated</p>
                            <p class="text-success mb-3">Validated</p>
                            <div>
                                <p class="mb-3"><span
                                        class="fw-bold me-3 d-block d-md-inline">Institution:</span>Obafemi Awolowo
                                    University</p>
                                <p class="mb-3"><span class="fw-bold me-3 d-block d-md-inline-block">Matriculation
                                        Number:</span>CSC/2017/174</p>
                                <p class="mb-3"><span class="fw-bold me-3 d-block d-md-inline-block">UTME Registration
                                        Number:</span>77689810JC</p>
                                <p class="mb-3"><span class="fw-bold me-3 d-block d-md-inline-block">Course of
                                        Study:</span>Computer Science and Engineering</p>
                                <p class="mb-3"><span class="fw-bold me-3 d-block d-md-inline-block">Graduation
                                        Date:</span>4 July, 2023</p>
                                <p class="mb-3"><span
                                        class="fw-bold me-3 d-block d-md-inline-block">Qualification:</span>BSc</p>
                                <p class="mb-3"><span
                                        class="fw-bold me-3 d-block d-md-inline-block">Fullname:</span>ADEOJO Esther
                                    Fumbi</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group"><button class="btn btn-success form-control" type="submit">Save
                                    changes &amp; continue</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer id="footer" class="pt-4 pb-4 bg-success text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Powered by ####</p>
                </div>
                <div class="col">
                    <p>Copyright © 2023 National Youth Service Corps. All rights reserved.<br></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/js/bootstrap.bundle.min.js">
    </script>
    <script src="/assets/js/custom.js?h=09a83b9cacb9296dceaa6a28c8382e9f"></script>
    <script src="/assets/js/full-screen-navbar-search.js?h=acb42710ac8f7ed0706959ab3a64e69e"></script>
</body>

</html>