@extends('layouts.student')

@section('title') LGA Clearance @endsection


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div class="d-sm-flex font-size-12 mb-2"><span
            class="d-inline-block rounded p-1 bg-success text-white">mariam@gmail.com</span><span
            class="ms-auto d-block mt-1 mt-sm-0">Today's Date: Monday, June 14, 2023</span></div>
    <div id="green_header" class="p-3 pt-2 pb-2 mt-5 mt-md-0"><span class="h6 text-dark fw-bold">Clearance
            Status</span></div>
    <div class="mt-3 rounded p-3 light-green">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Month</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>June/2023</td>
                        <td>Present</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>July/2023<br></td>
                        <td>Auto Clearance</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection