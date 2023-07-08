@extends('layouts.student')

@section('title') Reg: Institution Attended @endsection


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div id="green_header" class="p-3 mt-5 mt-md-0"><span class="h4 text-dark fw-bold">Institution Attended</span></div>
    <form class="mt-4" method="post">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <h1 class="h5 fw-bold">First Primary School</h1>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group"><label class="form-label">Primary School<span
                            class="ms-2 text-danger">*</span></label><input class="form-control" type="text"
                        id="primary_institution_1" name="primary_institution_1" minlength="2" required=""
                        pattern="^[A-Za-z\- ]{2,90}$" maxlength="90"></div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group"><label class="form-label">From Year<span
                            class="ms-2 text-danger">*</span></label><select class="form-select"
                        id="primary_from_year_1" required="" name="primary_from_year_1">
                        <option value=""></option>
                    </select></div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group"><label class="form-label">To Year<span
                            class="ms-2 text-danger">*</span></label><select class="form-select" id="primary_to_year_1"
                        required="" name="primary_to_year_1">
                        <option value=""></option>
                    </select></div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group"><label class="form-label">Graduation Year<span
                            class="ms-2 text-danger">*</span></label><select class="form-select"
                        id="primary_graduation_year_1" required="" name="primary_graduation_year_1">
                        <option value=""></option>
                    </select></div>
            </div>
            <div class="col-12 mb-5"></div>
            <div class="col-12">
                <div class="form-group">
                    <h1 class="h5 fw-bold">Second Primary School (optional)</h1>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group"><label class="form-label">Primary School</label><input class="form-control"
                        type="text" id="primary_institution_2" name="primary_institution_2" minlength="2"
                        pattern="^[A-Za-z\- ]{2,90}$" maxlength="90"></div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group"><label class="form-label">From Year</label><select class="form-select"
                        id="primary_from_year_2" name="primary_from_year_2">
                        <option value=""></option>
                    </select></div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group"><label class="form-label">To Year</label><select class="form-select"
                        id="primary_to_year_2" name="primary_to_year_2">
                        <option value=""></option>
                    </select></div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group"><label class="form-label">Graduation Year</label><select class="form-select"
                        id="primary_graduation_year_2" name="primary_graduation_year_2">
                        <option value=""></option>
                    </select></div>
            </div>
            <div class="col-12 mb-5"></div>
            <div class="col-12">
                <div class="form-group">
                    <h1 class="h5 fw-bold">First Secondary School</h1>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group"><label class="form-label">Secondary School<span
                            class="ms-2 text-danger">*</span></label><input class="form-control" type="text"
                        id="secondary_institution_1" name="secondary_institution_1" minlength="2" required=""
                        pattern="^[A-Za-z\- ]{2,90}$" maxlength="90"></div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group"><label class="form-label">From Year<span
                            class="ms-2 text-danger">*</span></label><select class="form-select"
                        id="secondary_from_year_1" required="" name="secondary_from_year_1">
                        <option value=""></option>
                    </select></div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group"><label class="form-label">To Year<span
                            class="ms-2 text-danger">*</span></label><select class="form-select"
                        id="secondary_to_year_1" required="" name="secondary_to_year_1">
                        <option value=""></option>
                    </select></div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group"><label class="form-label">Graduation Year<span
                            class="ms-2 text-danger">*</span></label><select class="form-select" id="secondary_award_1"
                        required="" name="secondary_award_1">
                        <option value=""></option>
                    </select></div>
            </div>
            <div class="col-12 mb-5"></div>
            <div class="col-12">
                <div class="form-group">
                    <h1 class="h5 fw-bold">Second Secondary School (optional)</h1>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group"><label class="form-label">Secondary School</label><input class="form-control"
                        type="text" id="secondary_institution_2" name="secondary_institution_1" minlength="2"
                        required="" pattern="^[A-Za-z\- ]{2,90}$" maxlength="90"></div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group"><label class="form-label">From Year</label><select class="form-select"
                        id="secondary_from_year_2" required="" name="secondary_from_year_1">
                        <option value=""></option>
                    </select></div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group"><label class="form-label">To Year</label><select class="form-select"
                        id="secondary_to_year_2" required="" name="secondary_to_year_2">
                        <option value=""></option>
                    </select></div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group"><label class="form-label">Graduation Year</label><select class="form-select"
                        id="secondary_award_2" required="" name="secondary_award_2">
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