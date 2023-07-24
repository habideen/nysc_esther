@extends('layouts.panel')

@section('title') Reg: Next of Kin @endsection


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div id="green_header" class="p-3 mt-5 mt-md-0"><span class="h4 text-dark fw-bold">Next of Kin (Stage 6 of 9)</span>
    </div>

    @include('components.alert')

    <form class="mt-4" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <h1 class="h5 fw-bold">First next of kin</h1>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label class="form-label">Name<span class="ms-2 text-danger">*</span></label>
                    <input class="form-control" type="text" id="name_1" name="name_1" minlength="2" required=""
                        pattern="^[A-Za-z\- ]{2,90}$" maxlength="90"
                        value="{{old('name_1') ?? $nextOfKin->name_1 ?? ''}}">
                    @error('name_1')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label class="form-label">Relationship<span class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="relationship_1" required="" name="relationship_1">
                        <option value=""></option>
                        <option value="Aunt">Aunt</option>
                        <option value="Child">Child</option>
                        <option value="Cousin">Cousin</option>
                        <option value="Grandparent">Grandparent</option>
                        <option value="Parent">Parent</option>
                        <option value="Sibling">Sibling</option>
                        <option value="Spouse">Spouse</option>
                        <option value="Uncle">Uncle</option>
                    </select>
                    @error('relationship_1')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="form-group">
                    <label class="form-label">Address<span class="ms-2 text-danger">*</span></label>
                    <input class="form-control" type="text" id="address_1" name="address_1" minlength="2" required=""
                        value="{{old('address_1') ?? $nextOfKin->address_1 ?? ''}}">
                    @error('address_1')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group">
                    <label class="form-label">Phone<span class="ms-2 text-danger">*</span></label>
                    <input class="form-control" type="text" id="phone_1" name="phone_1" minlength="11" required=""
                        pattern="^[0][7-9][0-9]{9,9}$" maxlength="11"
                        value="{{old('phone_1') ?? $nextOfKin->phone_1 ?? ''}}">
                    @error('phone_1')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label class="form-label">State<span class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="state_id_1" name="state_id_1" required>
                        <option selected disabled value="">Choose...</option>
                        @foreach ($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>
                    @error('state_id_1')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label class="form-label">LGA<span class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="lga_id_1" name="lga_id_1" required>
                        <option selected disabled value="">Choose...</option>
                        @foreach ($local_governments as $local_government)
                        <option class="lga_id_1 lga_state_id_1{{ $local_government->state_id }}"
                            value="{{ $local_government->id }}">{{ $local_government->name }}</option>
                        @endforeach
                    </select>
                    @error('lga_id_1')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 mb-5"></div>
            <div class="col-12">
                <div class="form-group">
                    <h1 class="h5 fw-bold">Second next of kin</h1>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label class="form-label">Name<span class="ms-2 text-danger">*</span></label>
                    <input class="form-control" type="text" id="name_2" name="name_2" minlength="2" required=""
                        pattern="^[A-Za-z\- ]{2,90}$" maxlength="90"
                        value="{{old('name_2') ?? $nextOfKin->name_2 ?? ''}}">
                    @error('name_2')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label class="form-label">Relationship<span class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="relationship_2" required="" name="relationship_2">
                        <option value=""></option>
                        <option value="Aunt">Aunt</option>
                        <option value="Child">Child</option>
                        <option value="Cousin">Cousin</option>
                        <option value="Grandparent">Grandparent</option>
                        <option value="Parent">Parent</option>
                        <option value="Sibling">Sibling</option>
                        <option value="Spouse">Spouse</option>
                        <option value="Uncle">Uncle</option>
                    </select>
                    @error('relationship_2')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="form-group">
                    <label class="form-label">Address<span class="ms-2 text-danger">*</span></label>
                    <input class="form-control" type="text" id="address_2" name="address_2" minlength="2" required=""
                        value="{{old('address_2') ?? $nextOfKin->address_2 ?? ''}}">
                    @error('address_2')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="form-group">
                    <label class="form-label">Phone<span class="ms-2 text-danger">*</span></label>
                    <input class="form-control" type="text" id="phone_2" name="phone_2" minlength="11" required=""
                        pattern="^[0][7-9][0-9]{9,9}$" maxlength="11"
                        value="{{old('phone_2') ?? $nextOfKin->phone_2 ?? ''}}">
                    @error('phone_2')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label class="form-label">State<span class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="state_id_2" name="state_id_2" required>
                        <option selected disabled value="">Choose...</option>
                        @foreach ($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>
                    @error('state_id_2')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label class="form-label">LGA<span class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="lga_id_2" name="lga_id_2" required>
                        <option selected disabled value="">Choose...</option>
                        @foreach ($local_governments as $local_government)
                        <option class="lga_id_2 lga_state_id_2{{ $local_government->state_id }}"
                            value="{{ $local_government->id }}">{{ $local_government->name }}</option>
                        @endforeach
                    </select>
                    @error('lga_id_2')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
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




@section('script')
<script>
    $("#relationship_2").val('{{ old('relationship_2') ?? $nextOfKin->relationship_2 ?? '' }}')
    $("#relationship_1").val('{{ old('relationship_1') ?? $nextOfKin->relationship_1 ?? '' }}')

    $('.lga_id_1').addClass('d-none')
    $("#state_id_1").val('{{ old('state_id_1') ?? $nextOfKin->state_id_1 ?? '' }}')
    $("#lga_id_1").val('{{ old('lga_id_1') ?? $nextOfKin->lga_id_1 ?? '' }}')

    if ($("#state_id_1").val() != '')
        $('.lga_state_id_1' + $('#state_id_1').val() ).removeClass('d-none')

    
    //
    $('.lga_id_2').addClass('d-none')
    $("#state_id_2").val('{{ old('state_id_2') ?? $nextOfKin->state_id_2 ?? '' }}')
    $("#lga_id_2").val('{{ old('lga_id_2') ?? $nextOfKin->lga_id_2 ?? '' }}')

    if ($("#state_id_2").val() != '')
        $('.lga_state_id_2' + $('#state_id_2').val() ).removeClass('d-none')


    //
    $('#state_id_1').on('change', function() {
        $('.lga_id_1').addClass('d-none')
        $('.lga_state_id_1' + $('#state_id_1').val() ).removeClass('d-none')
        $('#lga_id_1').val('')
    });

    $('#state_id_2').on('change', function() {
        $('.lga_id_2').addClass('d-none')
        $('.lga_state_id_2' + $('#state_id_2').val() ).removeClass('d-none')
        $('#lga_id_2').val('')
    });
</script>
@endsection