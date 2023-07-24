@extends('layouts.panel')

@section('title') Reg: Institution that cleared you for service @endsection


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div id="green_header" class="p-3 mt-5 mt-md-0"><span class="h4 text-dark fw-bold">Institution that
            cleared you for service (Stage 2 of 9)</span></div>

    @include('components.alert')

    <form class="mt-4" method="post" accept="{{url('/student/reg/step/2')}}">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group"><label class="form-label">Institution<span
                            class="ms-2 text-danger">*</span></label>
                    <div>
                        <select class="form-select" id="institution_id" name="institution_id" required="">
                            <option value="">Select Institution</option>
                            @foreach ($institutions as $institution)
                            <option value="{{$institution->id}}">{{$institution->institution}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="form-group">
                    <label class="form-label">Matric. Number<span class="ms-2 text-danger">*</span></label>
                    <div>
                        <input class="form-control" type="text" id="matric_no" name="matric_no"
                            value="{{old('matric_no') ?? $userInfo->matric_no ?? ''}}" required="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="form-group">
                    <label class="form-label" id="first_name" name="first_name">UTME
                        No.<span class="ms-2 text-danger">*</span></label>
                    <div>
                        <input class="form-control" type="text" id="jamb_reg_no" name="jamb_reg_no"
                            value="{{old('jamb_reg_no') ?? $userInfo->jamb_reg_no ?? ''}}" required="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="form-group">
                    <label class="form-label" id="first_name" name="first_name">Graduation Year<span
                            class="ms-2 text-danger">*</span></label>
                    <select class="form-select" id="graduation_date" name="graduation_date" required="">
                        <option value=""></option>
                        @php $date = date('Y')-10; @endphp
                        <!-- -->
                        @for($i=0; $i<=10; $i++) <option value="{{$date}}">{{$date++}}</option> @endfor
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group mt-5">
                    <button class="btn btn-danger form-control" id="validate_btn" type="submit"
                        name="validate_btn">Validate Now</button>
                </div>
            </div>

            @if (isset($userInfo))
            <div class="col-12 mt-5">
                @if ($userInfo->user_id)
                <p class="text-success mb-3">Validated</p>
                @else
                <p class="text-danger mb-3">Not Validated</p>
                @endif

                <div>
                    <p class="mb-3">
                        <span class="fw-bold me-3 d-block d-md-inline">Institution:</span>
                        {{$userInfo->institution}}
                    </p>
                    <p class="mb-3">
                        <span class="fw-bold me-3 d-block d-md-inline-block">Matriculation Number:</span>
                        {{$userInfo->matric_no}}
                    </p>
                    <p class="mb-3">
                        <span class="fw-bold me-3 d-block d-md-inline-block">UTME Registration Number:</span>
                        {{$userInfo->jamb_reg_no}}
                    </p>
                    <p class="mb-3">
                        <span class="fw-bold me-3 d-block d-md-inline-block">Course of Study:</span>
                        {{$userInfo->course_of_study}}
                    </p>
                    <p class="mb-3">
                        <span class="fw-bold me-3 d-block d-md-inline-block">Graduation Date:</span>
                        {{date('M d, Y', strtotime($userInfo->graduation_date))}}
                    </p>
                    <p class="mb-3">
                        <span class="fw-bold me-3 d-block d-md-inline-block">Qualification:</span>
                        {{$userInfo->qualification}}
                    </p>
                    <p class="mb-3">
                        <span class="fw-bold me-3 d-block d-md-inline-block">Fullname:</span>
                        {{strtoupper($userInfo->last_name)}} {{$userInfo->first_name}} {{$userInfo->middle_name}}
                    </p>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <button class="btn btn-success form-control" type="submit" name="save_changes">Save
                        changes &amp; continue</button>
                </div>
            </div>
            @endif
        </div>
    </form>
</div>
@endsection



@section('script')
<script>
    $('#institution_id').val('{{old('institution_id') ?? $userInfo->institution_id ?? ''}}')
    $('#graduation_date').val('{{old('graduation_date') ?? getYear($userInfo->graduation_date ?? null) ?? ''}}')
</script>
@endsection