@extends('layouts.student')


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div id="green_header" class="p-3 mt-5 mt-md-0"><span class="h4 text-dark fw-bold">NIN Validation</span>
    </div>
    <form class="mt-4" method="post">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="form-group"><label class="form-label">National Identity Number (NIN)<span
                            class="ms-2 text-danger">*</span></label>
                    <div class="input-group"><input class="form-control" type="text" id="national_identity_number"
                            name="national_identity_number" pattern="^[0-9]+$" maxlength="11" minlength="11"
                            required="">
                        <div class="input-group-append"><button class="btn btn-danger" type="button">Fetch</button>
                        </div>
                    </div><span class="font-size-12">Enter your NIN number and fetch to validate</span>
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="form-group"><label class="form-label">Birthdate<span
                            class="ms-2 text-danger">*</span></label>
                    <div><input class="form-control" type="text" id="birthdate" readonly="" name="birthdate"
                            required=""></div><span class="font-size-12">DD-MM-YYYY</span>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="form-group"><label class="form-label">Surname<span class="ms-2 text-danger">*</span></label>
                    <div><input class="form-control" type="text" id="last_name" name="last_name"
                            pattern="^[a-zA-Z \-]+$" required="" minlength="2" maxlength="30"></div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="form-group"><label class="form-label" id="first_name" name="first_name">First
                        Name<span class="ms-2 text-danger">*</span></label>
                    <div><input class="form-control" type="text" required="" pattern="^[a-zA-Z \-]+$" minlength="2"
                            maxlength="30"></div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="form-group"><label class="form-label">Middle Name</label>
                    <div><input class="form-control" type="text" id="middle_name" name="middle_name" minlength="2"
                            maxlength="30" pattern="^[a-zA-Z \-]+$"></div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group mt-5"><button class="btn btn-success form-control" type="submit">Save
                        changes &amp; continue</button></div>
            </div>
        </div>
    </form>
</div>
@endsection