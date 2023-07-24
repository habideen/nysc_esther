@extends('layouts.panel')

@section('title') Reg: User Information @endsection


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div id="green_header" class="p-3 mt-5 mt-md-0">
        <span class="h4 text-dark fw-bold">User Information (Stage 3 of 8)</span>
    </div>

    @include('components.alert')

    <form class="mt-4" method="post">
        @csrf
        <div class="row">
            <div class="col-12 mb-3">
                <div class="form-group">
                    <label class="form-label">Birthdate<span class="ms-2 text-danger">*</span></label>
                    <div>
                        <input class="form-control" type="text" id="birthdate" readonly="" name="birthdate"
                            value="{{Auth::user()->birthdate}}" required="">
                    </div>
                    <span class="font-size-12">DD-MM-YYYY</span>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <label class="form-label">Title<span class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="title" required="" name="title">
                        <option value=""></option>
                        <option value="Mr">Mr</option>
                        <option value="Miss">Miss</option>
                        <option value="Mr">Mr</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <label class="form-label">Surname<span class="ms-2 text-danger">*</span></label>
                    <input class="form-control" type="text" id="last_name" name="last_name" pattern="^[a-zA-Z \-]+$"
                        required="" minlength="2" maxlength="30"
                        value="{{old('last_name') ?? Auth::user()->last_name ?? ''}}">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <label class="form-label">First Name<span class="ms-2 text-danger">*</span></label>
                    <input class="form-control" type="text" id="first_name" required="" pattern="^[a-zA-Z \-]+$"
                        minlength="2" maxlength="30" name="first_name"
                        value="{{old('first_name') ?? Auth::user()->first_name ?? ''}}">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <label class="form-label">Middle Name</label>
                    <input class="form-control" type="text" id="middle_name" name="middle_name" minlength="2"
                        maxlength="30" pattern="^[a-zA-Z \-]+$"
                        value="{{old('middle_name') ?? Auth::user()->middle_name ?? ''}}">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="form-group">
                    <label class="form-label" id="first_name" name="first_name">Gender<span
                            class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="gender" required="" name="gender">
                        <option value=""></option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="form-group">
                    <label class="form-label" id="first_name-1" name="first_name">Marital
                        Status<span class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="marital_status" required="" name="marital_status">
                        <option value=""></option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Widowed">Widowed</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="form-group">
                    <label class="form-label" id="first_name-1" name="first_name">Birth Place<span
                            class="ms-2 text-danger">*</span></label>
                    <input class="form-control" type="text" id="place_of_birth" name="place_of_birth" minlength="2"
                        maxlength="30" pattern="^[a-zA-Z \-]+$" required value="{{Auth::user()->place_of_birth ?? ''}}">
                </div>
            </div>
            <div class="col-12 mb-5"></div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="form-group">
                    <label class="form-label">Qualification<span class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="qualification" required="" name="qualification">
                        <option value=""></option>
                        <option value="HND">HND</option>
                        <option value="Degree">Degree</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="form-group">
                    <label class="form-label">Phone<span class="ms-2 text-danger">*</span></label>
                    <input class="form-control" type="text" id="phone_1" required="" pattern="^[0][7-9][0-9]{9,9}$"
                        minlength="11" maxlength="11" name="phone_1"
                        value="{{old('phone_1') ?? Auth::user()->phone_1 ?? ''}}">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="form-group">
                    <label class="form-label">Email<span class="ms-2 text-danger">*</span></label>
                    <input class="form-control" type="text" required="" readonly="" value="{{Auth::user()->email}}">
                </div>
            </div>
            <div class="col-12 mt-5">
                <div class="form-group">
                    <button class="btn btn-success form-control" type="submit">Save changes &amp; continue</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection


@section('script')
<script>
    $('#title').val('{{old('title') ?? Auth::user()->title ?? ''}}')
    $('#gender').val('{{old('gender') ?? Auth::user()->gender ?? ''}}')
    $('#qualification').val('{{old('qualification') ?? Auth::user()->qualification ?? ''}}')
    $('#marital_status').val('{{old('marital_status') ?? Auth::user()->marital_status ?? ''}}')
</script>
@endsection