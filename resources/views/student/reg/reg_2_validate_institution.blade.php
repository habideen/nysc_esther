@extends('layouts.student')

@section('title') Reg: Institution that cleared you for service @endsection


@section('content')
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
                    <div><input class="form-control" type="text" id="matric_no" name="matric_no" required=""></div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="form-group"><label class="form-label" id="first_name" name="first_name">UTME
                        No.<span class="ms-2 text-danger">*</span></label>
                    <div><input class="form-control" type="text" id="jamb_reg_no" name="jamb_reg_no" required=""></div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="form-group"><label class="form-label" id="first_name" name="first_name">Graduation Year<span
                            class="ms-2 text-danger">*</span></label><select class="form-select" id="graduation_date"
                        name="graduation_date" required="">
                        <option value="undefined"></option>
                    </select></div>
            </div>
            <div class="col-12">
                <div class="form-group mt-5"><button class="btn btn-danger form-control" id="validate_btn" type="submit"
                        name="validate_btn">Validate Now</button></div>
            </div>
            <div class="col-12 mt-5">
                <p class="text-danger mb-3">Not Validated</p>
                <p class="text-success mb-3">Validated</p>
                <div>
                    <p class="mb-3"><span class="fw-bold me-3 d-block d-md-inline">Institution:</span>Obafemi Awolowo
                        University</p>
                    <p class="mb-3"><span class="fw-bold me-3 d-block d-md-inline-block">Matriculation
                            Number:</span>CSC/2017/174</p>
                    <p class="mb-3"><span class="fw-bold me-3 d-block d-md-inline-block">UTME Registration
                            Number:</span>77689810JC</p>
                    <p class="mb-3"><span class="fw-bold me-3 d-block d-md-inline-block">Course of
                            Study:</span>Computer Science and Engineering</p>
                    <p class="mb-3"><span class="fw-bold me-3 d-block d-md-inline-block">Graduation
                            Date:</span>4 July, 2023</p>
                    <p class="mb-3"><span class="fw-bold me-3 d-block d-md-inline-block">Qualification:</span>BSc</p>
                    <p class="mb-3"><span class="fw-bold me-3 d-block d-md-inline-block">Fullname:</span>ADEOJO Esther
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
@endsection