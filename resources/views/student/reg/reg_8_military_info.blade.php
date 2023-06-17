@extends('layouts.student')


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div id="green_header" class="p-3 mt-5 mt-md-0"><span class="h4 text-dark fw-bold">Military
            Information</span></div>
    <form class="mt-4" method="post">
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">Have you serve in the Navy before?<span
                            class="ms-2 text-danger">*</span></label><select class="form-select" id="naf_na_navy"
                        required="" name="naf_na_navy">
                        <option value=""></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select></div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">Served as a National Intelligence
                        Agency?<span class="ms-2 text-danger">*</span></label></div><select class="form-select" id="nia"
                    required="" name="nia">
                    <option value=""></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">Served as a Nigerian Police Force?<span
                            class="ms-2 text-danger">*</span></label></div><select class="form-select" id="nia"
                    required="" name="nia">
                    <option value=""></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">Present Address</label><input class="form-control"
                        type="text" id="national_awardee" name="national_awardee" minlength="2"></div>
            </div>
            <div class="col-12">
                <div class="form-group"><label class="form-label">List of languages you can
                        speak</label><span class="ms-2 text-danger">*</span><input class="form-control" type="text"
                        id="national_language" name="national_language" minlength="2" required=""></div>
            </div>
            <div class="col-12">
                <div class="form-group"><label class="form-label">List of places you have
                        visited</label><span class="ms-2 text-danger">*</span><input class="form-control" type="text"
                        id="states_visited" name="states_visited" minlength="2" required="">
                </div>
            </div>
            <div class="col-12 mt-5">
                <div class="form-group"><button class="btn btn-success form-control" type="submit">Save
                        changes &amp; continue</button></div>
            </div>
        </div>
    </form>
</div>
@endsection