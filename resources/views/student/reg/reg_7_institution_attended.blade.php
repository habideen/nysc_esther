@extends('layouts.panel')

@section('title') Reg: Institution Attended @endsection


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div id="green_header" class="p-3 mt-5 mt-md-0"><span class="h4 text-dark fw-bold">Institution Attended (Stage 7 of
            9)</span></div>

    @include('components.alert')

    <form class="mt-4" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <h1 class="h5 fw-bold">First Primary School</h1>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label">Primary School<span class="ms-2 text-danger">*</span></label>
                    <input class="form-control" type="text" id="primary_institution_1" name="primary_institution_1"
                        minlength="2" required="" pattern="^[A-Za-z0-9\-\,\. ]{2,90}$" maxlength="90"
                        value="{{old('primary_institution_1') ?? $institution->primary_institution_1 ?? ''}}">
                    @error('primary_institution_1')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group">
                    <label class="form-label">From Year<span class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="primary_from_year_1" required="" name="primary_from_year_1">
                        <option value=""></option>
                        @for ($i=1971; $i<=date('Y'); $i++) <!-- -->
                            <option value="{{$i}}">{{$i}}</option> <!-- -->
                            @endfor
                            <!-- -->
                    </select>
                    @error('primary_from_year_1')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group">
                    <label class="form-label">To Year<span class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="primary_to_year_1" required="" name="primary_to_year_1">
                        <option value=""></option>
                        @for ($i=1971; $i<=date('Y'); $i++) <!-- -->
                            <option value="{{$i}}">{{$i}}</option> <!-- -->
                            @endfor
                            <!-- -->
                    </select>
                    @error('primary_to_year_1')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group">
                    <label class="form-label">Award<span class="ms-2 text-danger">*</span></label>
                    <input class="form-control" type="text" id="primary_award_1" name="primary_award_1" minlength="2"
                        required="" pattern="^[A-Za-z0-9\-\' ]{2,90}$" maxlength="90"
                        value="{{old('primary_award_1') ?? $institution->primary_award_1 ?? ''}}">
                    @error('primary_award_1')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 mb-5"></div>
            <div class="col-12">
                <div class="form-group">
                    <h1 class="h5 fw-bold">Second Primary School (optional)</h1>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label">Primary School</label>
                    <input class="form-control" type="text" id="primary_institution_2" name="primary_institution_2"
                        minlength="2" pattern="^[A-Za-z0-9\-\,\. ]{2,90}$" maxlength="90"
                        value="{{old('primary_institution_2') ?? $institution->primary_institution_2 ?? ''}}">
                    @error('primary_institution_2')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group">
                    <label class="form-label">From Year</label>
                    <select class="form-select" id="primary_from_year_2" name="primary_from_year_2">
                        <option value=""></option>
                        @for ($i=1971; $i<=date('Y'); $i++) <!-- -->
                            <option value="{{$i}}">{{$i}}</option> <!-- -->
                            @endfor
                            <!-- -->
                    </select>
                    @error('primary_from_year_2')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group">
                    <label class="form-label">To Year</label>
                    <select class="form-select" id="primary_to_year_2" name="primary_to_year_2">
                        <option value=""></option>
                        @for ($i=1971; $i<=date('Y'); $i++) <!-- -->
                            <option value="{{$i}}">{{$i}}</option> <!-- -->
                            @endfor
                            <!-- -->
                    </select>
                    @error('primary_to_year_2')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group">
                    <label class="form-label">Award</label>
                    <input class="form-control" type="text" id="primary_award_2" name="primary_award_2" minlength="2"
                        pattern="^[A-Za-z0-9\-\' ]{2,90}$" maxlength="90"
                        value="{{old('primary_award_2') ?? $institution->primary_award_2 ?? ''}}">
                    @error('primary_award_2')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 mb-5"></div>
            <div class="col-12">
                <div class="form-group">
                    <h1 class="h5 fw-bold">First Secondary School</h1>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label">Secondary School<span class="ms-2 text-danger">*</span></label>
                    <input class="form-control" type="text" id="secondary_institution_1" name="secondary_institution_1"
                        minlength="2" required="" pattern="^[A-Za-z0-9\-\,\. ]{2,90}$" maxlength="90"
                        value="{{old('secondary_institution_1') ?? $institution->secondary_institution_1 ?? ''}}">
                    @error('secondary_institution_1')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group">
                    <label class="form-label">From Year<span class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="secondary_from_year_1" required="" name="secondary_from_year_1">
                        <option value=""></option>
                        @for ($i=1971; $i<=date('Y'); $i++) <!-- -->
                            <option value="{{$i}}">{{$i}}</option> <!-- -->
                            @endfor
                            <!-- -->
                    </select>
                    @error('secondary_from_year_1')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group">
                    <label class="form-label">To Year<span class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="secondary_to_year_1" required="" name="secondary_to_year_1">
                        <option value=""></option>
                        @for ($i=1971; $i<=date('Y'); $i++) <!-- -->
                            <option value="{{$i}}">{{$i}}</option> <!-- -->
                            @endfor
                            <!-- -->
                    </select>
                    @error('secondary_to_year_1')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group">
                    <label class="form-label">Award<span class="ms-2 text-danger">*</span></label>
                    <input class="form-control" type="text" id="secondary_award_1" name="secondary_award_1"
                        minlength="2" required="" pattern="^[A-Za-z0-9\-\' ]{2,90}$" maxlength="90"
                        value="{{old('secondary_award_1') ?? $institution->secondary_award_1 ?? ''}}">
                    @error('secondary_award_1')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 mb-5"></div>
            <div class="col-12">
                <div class="form-group">
                    <h1 class="h5 fw-bold">Second Secondary School (optional)</h1>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label">Secondary School</label>
                    <input class="form-control" type="text" id="secondary_institution_2" name="secondary_institution_2"
                        minlength="2" pattern="^[A-Za-z0-9\-\,\. ]{2,90}$" maxlength="90"
                        value="{{old('secondary_institution_2') ?? $institution->secondary_institution_2 ?? ''}}">
                    @error('secondary_institution_2')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group">
                    <label class="form-label">From Year</label>
                    <select class="form-select" id="secondary_from_year_2" name="secondary_from_year_2">
                        <option value=""></option>
                        @for ($i=1971; $i<=date('Y'); $i++) <!-- -->
                            <option value="{{$i}}">{{$i}}</option> <!-- -->
                            @endfor
                            <!-- -->
                    </select>
                    @error('secondary_from_year_2')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group">
                    <label class="form-label">To Year</label>
                    <select class="form-select" id="secondary_to_year_2" name="secondary_to_year_2">
                        <option value=""></option>
                        @for ($i=1971; $i<=date('Y'); $i++) <!-- -->
                            <option value="{{$i}}">{{$i}}</option> <!-- -->
                            @endfor
                            <!-- -->
                    </select>
                    @error('secondary_to_year_2')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="form-group">
                    <label class="form-label">Award</label>
                    <input class="form-control" type="text" id="secondary_award_2" name="secondary_award_2"
                        minlength="2" pattern="^[A-Za-z0-9\-\' ]{2,90}$" maxlength="90"
                        value="{{old('secondary_award_2') ?? $institution->secondary_award_2 ?? ''}}">
                    @error('secondary_award_2')
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
    $('#primary_from_year_1').val('{{old('primary_from_year_1') ?? $institution->primary_from_year_1 ?? ''}}')
    $('#primary_to_year_1').val('{{old('primary_to_year_1') ?? $institution->primary_to_year_1 ?? ''}}')
    $('#primary_graduation_year_1').val('{{old('primary_graduation_year_1') ?? $institution->primary_graduation_year_1 ?? ''}}')
    $('#primary_from_year_2').val('{{old('primary_from_year_2') ?? $institution->primary_from_year_2 ?? ''}}')
    $('#primary_to_year_2').val('{{old('primary_to_year_2') ?? $institution->primary_to_year_2 ?? ''}}')
    $('#primary_graduation_year_2').val('{{old('primary_graduation_year_2') ?? $institution->primary_graduation_year_2 ?? ''}}')
    $('#secondary_from_year_1').val('{{old('secondary_from_year_1') ?? $institution->secondary_from_year_1 ?? ''}}')
    $('#secondary_to_year_1').val('{{old('secondary_to_year_1') ?? $institution->secondary_to_year_1 ?? ''}}')
    $('#secondary_graduation_1').val('{{old('secondary_graduation_1') ?? $institution->secondary_graduation_1 ?? ''}}')
    $('#secondary_from_year_2').val('{{old('secondary_from_year_2') ?? $institution->secondary_from_year_2 ?? ''}}')
    $('#secondary_to_year_2').val('{{old('secondary_to_year_2') ?? $institution->secondary_to_year_2 ?? ''}}')
    $('#secondary_graduation_2').val('{{old('secondary_graduation_2') ?? $institution->secondary_graduation_2 ?? ''}}')
</script>
@endsection