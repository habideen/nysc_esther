@extends('layouts.panel')

@section('title') PPA Letter @endsection


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div class="d-sm-flex font-size-12 mb-2">
        <span class="d-inline-block rounded p-1 bg-success text-white">mariam@gmail.com</span>
        <span class="ms-auto d-block mt-1 mt-sm-0">Today's Date: Monday, June 14, 2023</span>
    </div>
    <div id="green_header" class="p-3 pt-2 pb-2 mt-5 mt-md-0">
        <span class="h6 text-dark fw-bold">PPA
            Letter</span>
    </div>
    <div class="mt-3 rounded p-3 light-green">
        <a class="btn btn-light" href="#">Download Letter</a>
    </div>
</div>
@endsection