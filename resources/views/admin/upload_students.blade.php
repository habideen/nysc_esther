@extends('layouts.panel')

@section('title') Upload Students @endsection


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div id="green_header" class="p-3 mt-5 mt-md-0"><span class="h4 text-dark fw-bold">Upload Students</span>
    </div>

    @include('components.alert')

    <form class="mt-4" method="post" action="/admin/upload_new_students" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label">Students Excel File<span class="ms-2 text-danger">*</span></label>
                    <input class="form-control" type="file" name="file" id="file" accept=".xls, .xlsx">
                    <span class="text-muted fs-6">File types: xlsx, xls</span>
                </div>
            </div>
            <div class="col-12 mt-5">
                <div class="form-group">
                    <button class="btn btn-success form-control" type="submit">Upload Data</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection