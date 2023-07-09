@extends('layouts.panel')

@section('title') Reg: User Information @endsection


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div id="green_header" class="p-3 mt-5 mt-md-0">
        <span class="h4 text-dark fw-bold">User Information (Stage 3 of 8)</span>
    </div>
    <form class="mt-4" method="post">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="form-group"><label class="form-label">Birthdate<span
                            class="ms-2 text-danger">*</span></label>
                    <div><input class="form-control" type="text" id="birthdate" readonly="" name="birthdate"
                            required=""></div><span class="font-size-12">DD-MM-YYYY</span>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="form-group"><label class="form-label">Title<span
                            class="ms-2 text-danger">*</span></label><select class="form-select" id="title" required=""
                        name="title">
                        <option value=""></option>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Dr">Dr</option>
                        <option value="Prof">Prof</option>
                    </select></div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="form-group"><label class="form-label">Surname<span
                            class="ms-2 text-danger">*</span></label><input class="form-control" type="text"
                        id="last_name" name="last_name" pattern="^[a-zA-Z \-]+$" required="" minlength="2"
                        maxlength="30"></div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="form-group"><label class="form-label">First Name<span
                            class="ms-2 text-danger">*</span></label><input class="form-control" type="text"
                        id="first_name" required="" pattern="^[a-zA-Z \-]+$" minlength="2" maxlength="30"
                        name="first_name"></div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="form-group"><label class="form-label">Middle Name</label><input class="form-control"
                        type="text" id="middle_name" name="middle_name" minlength="2" maxlength="30"
                        pattern="^[a-zA-Z \-]+$"></div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="form-group"><label class="form-label" id="first_name" name="first_name">Gender<span
                            class="ms-2 text-danger">*</span></label></div><select class="form-select" id="gender"
                    required="" name="gender">
                    <option value=""></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="form-group"><label class="form-label" id="first_name-1" name="first_name">Marital
                        Status<span class="ms-2 text-danger">*</span></label>
                </div><select class="form-select" id="marital_status" required="" name="marital_status">
                    <option value=""></option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                </select>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="form-group"><label class="form-label" id="first_name-1" name="first_name">Birth
                        Place<span class="ms-2 text-danger">*</span></label></div><select class="form-select"
                    id="place_of_birth" required="" name="place_of_birth">
                    <option value=""></option>
                </select>
            </div>
            <div class="col-12 mb-5"></div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="form-group"><label class="form-label">Qualification<span
                            class="ms-2 text-danger">*</span></label></div><select class="form-select"
                    id="place_of_birth" required="" name="place_of_birth">
                    <option value=""></option>
                    <option value="HND">HND</option>
                    <option value="Degree">Degree</option>
                </select>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="form-group"><label class="form-label">Phone<span class="ms-2 text-danger">*</span></label>
                </div><input class="form-control" type="text" id="phone_1" required="" pattern="^[0][7-9][0-9]{9,9}$"
                    minlength="11" maxlength="11" name="phone_1">
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="form-group"><label class="form-label">Email<span class="ms-2 text-danger">*</span></label>
                </div><input class="form-control" type="text" required="" readonly="">
            </div>
            <div class="col-12 mt-5">
                <div class="form-group"><button class="btn btn-success form-control" type="submit">Save
                        changes &amp; continue</button></div>
            </div>
        </div>
    </form>
</div>
@endsection