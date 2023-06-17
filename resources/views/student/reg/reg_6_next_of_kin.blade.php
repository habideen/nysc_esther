@extends('layouts.student')


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div id="green_header" class="p-3 mt-5 mt-md-0"><span class="h4 text-dark fw-bold">Next of Kin</span>
    </div>
    <form class="mt-4" method="post">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <h1 class="h5 fw-bold">First next of kin</h1>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">Name<span
                            class="ms-2 text-danger">*</span></label><input class="form-control" type="text" id="name_1"
                        name="name_1" minlength="2" required="" pattern="^[A-Za-z\- ]{2,90}$" maxlength="90"></div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">Relationship<span
                            class="ms-2 text-danger">*</span></label><select class="form-select" id="relationship_1"
                        required="" name="relationship_1">
                        <option value=""></option>
                        <option value="Aunt">Aunt</option>
                        <option value="Child">Child</option>
                        <option value="Cousin">Cousin</option>
                        <option value="Grandparent">Grandparent</option>
                        <option value="Parent">Parent</option>
                        <option value="Sibling">Sibling</option>
                        <option value="Spouse">Spouse</option>
                        <option value="Uncle">Uncle</option>
                    </select></div>
            </div>
            <div class="col-12 col-md-8">
                <div class="form-group"><label class="form-label">Address<span
                            class="ms-2 text-danger">*</span></label><input class="form-control" type="text"
                        id="address_1" name="address_1" minlength="2" required=""></div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group"><label class="form-label">Phone<span
                            class="ms-2 text-danger">*</span></label><input class="form-control" type="text"
                        id="phone_1" name="phone_1" minlength="11" required="" pattern="^[0][7-9][0-9]{9,9}$"
                        maxlength="11"></div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">State<span
                            class="ms-2 text-danger">*</span></label><select class="form-select" id="state_id_1"
                        required="" name="state_id_1">
                        <option value=""></option>
                    </select></div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">LGA<span
                            class="ms-2 text-danger">*</span></label><select class="form-select" id="lga_id_1"
                        required="" name="lga_id_1">
                        <option value=""></option>
                    </select></div>
            </div>
            <div class="col-12 mb-5"></div>
            <div class="col-12">
                <div class="form-group">
                    <h1 class="h5 fw-bold">Second next of kin</h1>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">Name<span
                            class="ms-2 text-danger">*</span></label><input class="form-control" type="text" id="name_2"
                        name="name_2" minlength="2" required="" pattern="^[A-Za-z\- ]{2,90}$" maxlength="90"></div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">Relationship<span
                            class="ms-2 text-danger">*</span></label><select class="form-select" id="relationship_2"
                        required="" name="relationship_2">
                        <option value=""></option>
                        <option value="Aunt">Aunt</option>
                        <option value="Child">Child</option>
                        <option value="Cousin">Cousin</option>
                        <option value="Grandparent">Grandparent</option>
                        <option value="Parent">Parent</option>
                        <option value="Sibling">Sibling</option>
                        <option value="Spouse">Spouse</option>
                        <option value="Uncle">Uncle</option>
                    </select></div>
            </div>
            <div class="col-12 col-md-8">
                <div class="form-group"><label class="form-label">Address<span
                            class="ms-2 text-danger">*</span></label><input class="form-control" type="text"
                        id="address_2" name="address_2" minlength="2" required=""></div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group"><label class="form-label">Phone<span
                            class="ms-2 text-danger">*</span></label><input class="form-control" type="text"
                        id="phone_2" name="phone_2" minlength="11" required="" pattern="^[0][7-9][0-9]{9,9}$"
                        maxlength="11"></div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">State<span
                            class="ms-2 text-danger">*</span></label><select class="form-select" id="state_id_2"
                        required="" name="state_id_2">
                        <option value=""></option>
                    </select></div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">LGA<span
                            class="ms-2 text-danger">*</span></label><select class="form-select" id="lga_id_2"
                        required="" name="lga_id_2">
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