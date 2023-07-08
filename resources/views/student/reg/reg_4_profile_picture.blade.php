@extends('layouts.student')

@section('title') Reg: Profile Image @endsection


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div id="green_header" class="p-3 mt-5 mt-md-0"><span class="h4 text-dark fw-bold">Profile Image (Stage 4 of
            8)</span>
    </div>
    <form class="mt-4" method="post">
        <div class="row">
            <div class="col-12">
                <div class="form-group"><label class="form-label">Profile Picture<span
                            class="ms-2 text-danger">*</span></label><input class="form-control" type="file"
                        accept="image/*"></div>
            </div>
            <div class="col-12 mt-5">
                <div class="form-group"><button class="btn btn-success form-control" type="submit">Save
                        changes &amp; continue</button></div>
            </div>
        </div>
    </form>
</div>
@endsection