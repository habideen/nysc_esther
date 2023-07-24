@extends('layouts.panel')

@section('title') Reg: Profile Image @endsection


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div id="green_header" class="p-3 mt-5 mt-md-0"><span class="h4 text-dark fw-bold">Profile Image (Stage 4 of
            8)</span>
    </div>

    @include('components.alert')

    <form class="mt-4" method="post" onsubmit="event.preventDefault()">
        @csrf
        <div class="avatar-md profile-user-wid mb-4">
            <img src="{{ isset(Auth::user()->image) 
                ? asset(Auth::user()->image) : asset('/assets/img/users/avatar.jpg') }}" alt=""
                class="img-thumbnail rounded-circle" style="height:150px;width:auto;">
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label">Profile Picture<span class="ms-2 text-danger">*</span></label>
                    <input class="form-control" type="file" id="image" accept="image/*" required>
                </div>
            </div>
            <div class="col-12 mt-5">
                <div class="form-group"><button class="btn btn-success form-control" type="submit">Save
                        changes &amp; continue</button></div>
            </div>
        </div>
    </form>
</div>


@include('components.croppie')
@endsection



@section('script')
@include('components.croppie-script')
@endsection