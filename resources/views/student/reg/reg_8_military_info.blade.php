@extends('layouts.panel')

@section('title') Reg: Military Information @endsection


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div id="green_header" class="p-3 mt-5 mt-md-0">
        <span class="h4 text-dark fw-bold">Military Information (Stage 8 of
            9)</span>
    </div>

    @include('components.alert')

    <form class="mt-4" method="post">
        @csrf
        <div class="row">
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label class="form-label">Have you serve in the Navy before?<span
                            class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="naf_na_navy" required="" name="naf_na_navy">
                        <option value=""></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    @error('naf_na_navy')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label class="form-label">Served as a National Intelligence
                        Agency?<span class="ms-2 text-danger">*</span></label>
                </div>
                <select class="form-select" id="nia" required="" name="nia">
                    <option value=""></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                @error('nia')
                <span class="d-block text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label class="form-label">Served as a Nigerian Police Force?<span
                            class="ms-2 text-danger">*</span></label>
                </div>
                <select class="form-select" id="npf" required="" name="npf">
                    <option value=""></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                @error('npf')
                <span class="d-block text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label class="form-label">National Awards</label>
                    <input class="form-control" type="text" id="national_awardee" name="national_awardee" minlength="2"
                        value="{{old('national_awardee') ?? $millitary->national_awardee ?? ''}}">
                    @error('national_awardee')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label">List of languages you can
                        speak</label><span class="ms-2 text-danger">*</span>
                    <input class="form-control" type="text" id="national_language" name="national_language"
                        minlength="2" required=""
                        value="{{old('national_language') ?? $millitary->national_language ?? ''}}">
                    @error('national_language')
                    <span class="d-block text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label">List of places you have
                        visited</label><span class="ms-2 text-danger">*</span>
                    <input class="form-control" type="text" id="states_visited" name="states_visited" minlength="2"
                        required="" value="{{old('states_visited') ?? $millitary->states_visited ?? ''}}">
                    @error('states_visited')
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
    $('#naf_na_navy').val('{{old('naf_na_navy') ?? $millitary->naf_na_navy ?? ''}}')
    $('#nia').val('{{old('nia') ?? $millitary->nia ?? ''}}')
    $('#npf').val('{{old('npf') ?? $millitary->npf ?? ''}}')
</script>
@endsection