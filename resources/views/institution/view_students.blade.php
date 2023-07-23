@extends('layouts.panel')

@section('title') View and Update Institution @endsection


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div class="d-sm-flex font-size-12 mb-2">
        <span class="d-inline-block rounded p-1 bg-success text-white">{{Auth::user()->email}}</span>
        <span class="ms-auto d-block mt-1 mt-sm-0">Today's Date: {{date('l, M d, Y')}}</span>
    </div>
    <div id="green_header" class="p-3 pt-2 pb-2 mt-5 mt-md-0"><span class="h6 text-dark fw-bold">Institutions</span>
    </div>
    <div class="mt-3 rounded p-3 light-green">
        @include('components.alert')


        <form class="mb-5" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="form-group">
                        <label class="form-label">Fetch Year<span class="ms-2 text-danger">*</span></label>
                        <div class="input-group">
                            <select class="form-control" name="year" id="year" required>
                                <option value=""></option>
                                @php
                                $year = date('Y');
                                @endphp
                                @for ($i=2019; $i<=$year; $i++) <!-- -->
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                            @error('year')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12"></div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                    <div class="form-group"><button class="btn btn-success form-control" type="submit">Save
                            changes</button></div>
                </div>
            </div>
        </form>

        <div class="table-responsive">
            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                <thead>
                    <tr>
                        <th>UTME No.</th>
                        <th>Matric</th>
                        <th>Grad. Date</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{$student->jamb_reg_no}}</td>
                        <td>{{$student->matric_no}}</td>
                        <td>{{date('d M, Y', strtotime($student->graduation_date))}}</td>
                        <td>{{strtoupper($student->last_name) . ' ' . $student->first_name . ' ' .
                            $student->middle_name}}</td>
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