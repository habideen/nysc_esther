@extends('layouts.panel')

@section('title') View and Update Institution @endsection


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div class="d-sm-flex font-size-12 mb-2"><span
            class="d-inline-block rounded p-1 bg-success text-white">admin@gmail.com</span><span
            class="ms-auto d-block mt-1 mt-sm-0">Today's Date: Monday, June 14, 2023</span></div>
    <div id="green_header" class="p-3 pt-2 pb-2 mt-5 mt-md-0"><span class="h6 text-dark fw-bold">Institutions</span>
    </div>
    <div class="mt-3 rounded p-3 light-green">
        @include('components.alert')

        <form class="mb-5" method="post" action="/admin/upload_institution" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label class="form-label">Institution Excel File<span class="ms-2 text-danger">*</span></label>
                        <input class="form-control" type="file" name="file" id="file" accept=".xls, .xlsx" required>
                        <span class="text-muted fs-6">File types: xlsx, xls</span>
                    </div>
                </div>
                <div class="col-12 mt-2">
                    <div class="form-group">
                        <button class="btn btn-success form-control" type="submit">Upload Data</button>
                    </div>
                </div>
            </div>
        </form>

        <div class="table-responsive">
            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                <thead>
                    <tr>
                        <th>Institution ID</th>
                        <th>Email</th>
                        <th>State</th>
                        <th>Institution Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($institutions as $institution)
                    <tr>
                        <td>{{$institution->id}}</td>
                        <td>{{$institution->email}}</td>
                        <td>{{$institution->state}}</td>
                        <td>{{$institution->institution}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection



@section('script')
<!-- Datatable init js -->
<!-- DataTables -->
<link href="/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
    type="text/css" />

<!-- Required datatable js -->
<script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Responsive examples -->
<script src="/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<!--script src="/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script-->

<!-- Datatable init js -->
<script src="/assets/js/pages/datatables.init.js"></script>
@endsection