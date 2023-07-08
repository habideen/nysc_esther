@extends('layouts.student')

@section('title') Reg: Other Information @endsection


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div id="green_header" class="p-3 mt-5 mt-md-0"><span class="h4 text-dark fw-bold">Other Information (Stage 5 of
            8)</span></div>
    <form class="mt-4" method="post">
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">Present State<span
                            class="ms-2 text-danger">*</span></label><select class="form-select" id="present_state_id"
                        required="" name="present_state_id">
                        <option value=""></option>
                    </select></div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">Present LGA<span
                            class="ms-2 text-danger">*</span></label><select class="form-select" id="present_lga_id"
                        required="" name="present_lga_id">
                        <option value=""></option>
                        <option value="HND">HND</option>
                        <option value="Degree">Degree</option>
                    </select></div>
            </div>
            <div class="col-12">
                <div class="form-group"><label class="form-label">Present Address</label><input class="form-control"
                        type="text" id="present_address" name="present_address" minlength="2" required=""></div>
            </div>
            <div class="col-12 mb-5"></div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">Permanent State<span
                            class="ms-2 text-danger">*</span></label><select class="form-select" id="permanent_state_id"
                        required="" name="permanent_state_id">
                        <option value=""></option>
                    </select></div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">Permanent LGA<span
                            class="ms-2 text-danger">*</span></label><select class="form-select" id="permanent_lga_id"
                        required="" name="permanent_lga_id">
                        <option value=""></option>
                        <option value="HND">HND</option>
                        <option value="Degree">Degree</option>
                    </select></div>
            </div>
            <div class="col-12">
                <div class="form-group"><label class="form-label">Permanent Address</label><input class="form-control"
                        type="text" id="permanent_address" name="permanent_address" minlength="2" required=""></div>
            </div>
            <div class="col-12 mb-5"></div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">State of origin<span
                            class="ms-2 text-danger">*</span></label><select class="form-select" id="origin_state_id"
                        required="" readonly="" name="origin_state_id">
                        <option value=""></option>
                    </select></div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">LGA of origin<span
                            class="ms-2 text-danger">*</span></label><select class="form-select" id="origin_lga_id"
                        required="" readonly="" name="origin_lga_id">
                        <option value=""></option>
                    </select></div>
            </div>
            <div class="col-12 mb-5"></div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">Have Previous Callup Letter<span
                            class="ms-2 text-danger">*</span></label><select class="form-select" id="is_previous_callup"
                        required="">
                        <option value=""></option>
                    </select></div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">Previous Callup Letter Number<span
                            class="ms-2 text-danger">*</span></label><input class="form-control" type="text"
                        id="have_previous_callup_letter" name="have_previous_callup_letter" minlength="2" required="">
                </div>
            </div>
            <div class="col-12 mb-5"></div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">Health Status<span
                            class="ms-2 text-danger">*</span></label><select class="form-select" id="health_status"
                        required="" name="health_status">
                        <option value=""></option>
                    </select></div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">Physical Challenges</label><input class="form-control"
                        type="text" id="physical_challenges" name="physical_challenges"></div>
            </div>
            <div class="col-12 mb-5"></div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">Cloth Kit<span
                            class="ms-2 text-danger">*</span></label><select class="form-select" id="cloth_kit_id"
                        required="" name="cloth_kit_id">
                        <option value=""></option>
                    </select></div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">Shoe Kit<span
                            class="ms-2 text-danger">*</span></label><select class="form-select" id="shoe_kit_id"
                        required="" name="shoe_kit_id">
                        <option value=""></option>
                    </select></div>
            </div>
            <div class="col-12 mt-5">
                <div class="form-group"><button class="btn btn-success form-control" type="submit">Save
                        changes &amp; continue</button></div>
            </div>
        </div>
    </form>
</div>
@endsection