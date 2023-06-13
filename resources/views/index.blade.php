@extends('layouts.public')


@section('content')
<div id="welcome_msg" class="bg-success">
    <div class="container pt-4 pb-4">
        <h3 class="fw-bold text-white">Welcome to the NYSC Portal<br></h3>
    </div>
</div>
<div class="modal fade" role="dialog" tabindex="-1" id="reg_type">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-dark">
                <div id="green_header" class="p-3"><span class="h5 text-dark fw-bold">Registration Options</span>
                </div>
                <div>
                    <div class="mt-4 d-flex"><a class="btn btn-dark me-3" role="button" href="/register">Fresh
                            Registration</a>
                        <p>I have not registered on this portal before and I have not been deployed before by NYSC,
                            click fresh registration</p>
                    </div>
                    <div class="mt-4 d-flex"><button class="btn btn-success disabled me-3" type="button"
                            disabled="">Revalidation</button>
                        <p>I have been deployed in a previous NYSC batch but did not show up in camp, click
                            revalidation</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer"><button class="btn btn-success" type="button"
                    data-bs-dismiss="modal">Close</button></div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-8 border rounded p-5 mb-4 text-center"><a href="" data-bs-toggle="modal"
                data-bs-target="#reg_type">
                <h4>Click here to register for 2022/2023 batch C</h4>
            </a></div>
        <div class="col-sm-4 rounded mb-4"><a class="text-center" href="/login">
                <h5>Login Here</h5>
                <div><img class="mt-2" src="/assets/img/login.png?h=3a1a546261ff491e8e5439c7be996e91"
                        style="border-left-style: none;height: 80px;"></div>
            </a></div>
        <div class="col-sm-12 border rounded p-5 mb-4 text-center">
            <h3 class="text-danger">New: Online Application for Remobilization!!<br></h3><a class="blue-link"
                href="#">Click here to Apply for Remobilisation<br></a>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row justify-content-around mt-4">
        <div class="col-sm-3 border rounded p-3 mb-4 text-center"><img class="img-fluid"
                src="/assets/img/verification.png?h=35ca090b5c2c5e297e4e396c43269605">
            <div class="mt-3"><a href="javascript: void(0)">
                    <div class="p-2 text-center bg-success-light rounded">
                        <h6 class="mb-0 text-dark fw-bold">Verify Certificates</h6>
                    </div>
                    <p class="mb-0 p-2 blue-link">Discharge, Exclusion and Exemption<br></p>
                </a></div>
        </div>
        <div class="col-sm-3 border rounded p-3 mb-4 text-center"><img class="img-fluid"
                src="/assets/img/paymentstatus.png?h=aff5ffc8235ec49cbf1f775623b89eec">
            <div class="mt-3"><a href="javascript: void(0)">
                    <div class="p-2 text-center bg-success-light rounded">
                        <h6 class="mb-0 text-dark fw-bold">Payment Status</h6>
                    </div>
                    <p class="mb-0 p-2 blue-link">To check your Payment Status<br></p>
                </a></div>
        </div>
        <div class="col-sm-3 border rounded p-3 mb-4 text-center"><img class="img-fluid"
                src="/assets/img/paymentstatus.png?h=aff5ffc8235ec49cbf1f775623b89eec">
            <div class="mt-3"><a href="javascript: void(0)">
                    <div class="p-2 text-center bg-success-light rounded">
                        <h6 class="mb-0 text-dark fw-bold">Visit the Main Site<br></h6>
                    </div>
                    <p class="mb-0 p-2 blue-link">Visit NYSC website for information and updates<br></p>
                </a></div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="border-bottom">
        <h4><strong>Guidelines</strong><br></h4>
    </div>
    <div class="row d-md-flex justify-content-around align-items-md-center mt-2">
        <div class="col-sm-6 col-md-3 guideline-card border shadow rounded p-2 mb-3 text-center bg-light"><span
                class="h6"><strong>Foreign P.C.M Requirement</strong><br></span>
            <hr><img class="img-fluid" src="/assets/img/foreign-graduates.png?h=69afe6b95e2ed669d9a143ef718e9dab">
        </div>
        <div class="col-sm-6 col-md-3 guideline-card border shadow rounded p-2 mb-3 text-center bg-light"><span
                class="h6"><strong>Guidelines on Payment</strong><br></span>
            <hr><img class="img-fluid" src="/assets/img/remitapayment.png?h=81cd10baf7514ef8cf55a856a2d47c74">
        </div>
        <div class="col-sm-6 col-md-3 pt-4 pb-4 guideline-card border shadow rounded p-2 mb-3 text-center bg-light">
            <span class="h6"><strong>Change of Date of Birth</strong><br></span>
            <hr><img class="img-fluid" src="/assets/img/calendar.png?h=6501dceb3315218f66490c49b6baffc2">
        </div>
        <div class="col-sm-6 col-md-3 guideline-card border shadow rounded p-2 mb-3 text-center bg-light"><span
                class="h6"><strong>F.A.Qs</strong><br></span>
            <hr><img class="img-fluid" src="/assets/img/faq.png?h=60c8b562ebe0f600369e3026b261004c">
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="border-bottom">
        <h4><strong>Important Information</strong><br></h4>
    </div>
    <div class="row d-md-flex justify-content-around align-items-md-center mt-2">
        <div class="col-sm-4 rounded p-2 mb-3">
            <div class="shadow-sm border p-3">
                <p class="mb-4"><a class="blue-link" href="#">Check Senate List or its equivalents<br></a></p>
                <p class="mb-4"><a class="blue-link" href="#">View Graduation List<br></a></p>
            </div>
        </div>
        <div class="col-sm-4 rounded p-2 mb-3">
            <div class="shadow-sm border p-3">
                <p class="mb-4"><a class="blue-link" href="#">Biometric Instructions<br></a></p>
            </div>
        </div>
        <div class="col-sm-4 rounded p-2 mb-3">
            <div class="shadow-sm border p-3">
                <p class="mb-4"><a class="blue-link" href="#">Accredited Institutions/Programmes<br></a></p>
            </div>
        </div>
    </div>
</div>
@endsection