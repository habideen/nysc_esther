@extends('layouts.panel')

@section('title') Reg: Other Information @endsection


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div id="green_header" class="p-3 mt-5 mt-md-0">
        <span class="h4 text-dark fw-bold">Other Information (Stage 5 of 8)</span>
    </div>

    @include('components.alert')

    <form class="mt-4" method="post">
        @csrf
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label class="form-label">Present State<span class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="present_state_id" name="present_state_id">
                        <option selected disabled value="">Choose...</option>
                        @foreach ($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label class="form-label">Present LGA<span class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="present_lga_id" name="present_lga_id">
                        <option selected disabled value="">Choose...</option>
                        @foreach ($local_governments as $local_government)
                        <option class="present_lga_id lga_present_state_id{{ $local_government->state_id }}"
                            value="{{ $local_government->id }}">{{ $local_government->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label">Present Address<span class="ms-2 text-danger">*</span></label>
                    <input class="form-control" type="text" id="present_address" name="present_address" minlength="2"
                        required="">
                </div>
            </div>
            <div class="col-12 mb-5"></div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label class="form-label">Permanent State<span class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="permanent_state_id" name="permanent_state_id">
                        <option selected disabled value="">Choose...</option>
                        @foreach ($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label class="form-label">Permanent LGA<span class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="permanent_lga_id" name="permanent_lga_id">
                        <option selected disabled value="">Choose...</option>
                        @foreach ($local_governments as $local_government)
                        <option class="permanent_lga_id lga_permanent_state_id{{ $local_government->state_id }}"
                            value="{{ $local_government->id }}">{{ $local_government->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group"><label class="form-label">Permanent Address<span
                            class="ms-2 text-danger">*</span></label>
                    <input class="form-control" type="text" id="permanent_address" name="permanent_address"
                        minlength="2" required="">
                </div>
            </div>
            <div class="col-12 mb-5"></div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label class="form-label">State of origin<span class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="origin_state_id" name="origin_state_id">
                        <option selected disabled value="">Choose...</option>
                        @foreach ($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label class="form-label">LGA of origin<span class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="origin_lga_id" name="origin_lga_id">
                        <option selected disabled value="">Choose...</option>
                        @foreach ($local_governments as $local_government)
                        <option class="origin_lga_id lga_origin_state_id{{ $local_government->state_id }}"
                            value="{{ $local_government->id }}">{{ $local_government->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12 mb-5"></div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label class="form-label">Have Previous Callup Letter<span class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="is_previous_callup" required="">
                        <option value=""></option>
                        <option value="No">No</option>
                        <option value="Yes">Yes</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group"><label class="form-label">Previous Callup Letter Number<span
                            class="ms-2 text-danger">*</span></label><input class="form-control" type="text"
                        id="have_previous_callup_letter" name="have_previous_callup_letter" minlength="2" required="">
                </div>
            </div>
            <div class="col-12 mb-5"></div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label class="form-label">Health Status<span class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="health_status" required="" name="health_status">
                        <option value=""></option>
                        <option value="Excellent">Excellent</option>
                        <option value="Good">Good</option>
                        <option value="Fair">Fair</option>
                        <option value="Poor">Poor</option>
                    </select>
                </div>
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



@section('script')
<script>
    $(function() {
        $('.present_lga_id').addClass('d-none')
        $("#present_state_id").val('{{ old('present_state_id') ?? $otherInfo->present_state_id ?? '' }}')
        $("#present_lga_id").val('{{ old('present_lga_id') ?? $otherInfo->present_lga_id ?? '' }}')

        if ($("#present_state_id").val() != '')
            $('.lga_present_state_id' + $('#present_state_id').val() ).removeClass('d-none')

        //
        $('.permanent_lga_id').addClass('d-none')
        $("#permanent_state_id").val('{{ old('permanent_state_id') ?? $otherInfo->permanent_state_id ?? '' }}')
        $("#permanent_lga_id").val('{{ old('permanent_lga_id') ?? $otherInfo->permanent_lga_id ?? '' }}')

        if ($("#permanent_state_id").val() != '')
            $('.lga_permanent_state_id' + $('#permanent_state_id').val() ).removeClass('d-none')

        //
        $('.origin_lga_id').addClass('d-none')
        $("#origin_state_id").val('{{ old('origin_state_id') ?? $otherInfo->origin_state_id ?? '' }}')
        $("#origin_lga_id").val('{{ old('origin_lga_id') ?? $otherInfo->origin_lga_id ?? '' }}')

        if ($("#origin_state_id").val() != '')
            $('.lga_origin_state_id' + $('#origin_state_id').val() ).removeClass('d-none')
    });

    $('#present_state_id').on('change', function() {
        $('.present_lga_id').addClass('d-none')
        $('.lga_present_state_id' + $('#present_state_id').val() ).removeClass('d-none')
        $('#present_lga_id').val('')
    });

    $('#permanent_state_id').on('change', function() {
        $('.permanent_lga_id').addClass('d-none')
        $('.lga_permanent_state_id' + $('#permanent_state_id').val() ).removeClass('d-none')
        $('#permanent_lga_id').val('')
    });

    $('#origin_state_id').on('change', function() {
        $('.origin_lga_id').addClass('d-none')
        $('.lga_origin_state_id' + $('#origin_state_id').val() ).removeClass('d-none')
        $('#origin_lga_id').val('')
    });
</script>
@endsection