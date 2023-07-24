@extends('layouts.panel')

@section('title') Dashboard @endsection


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    @include('components.alert')

    <div class="d-sm-flex font-size-12 mb-2">
        <span class="d-inline-block rounded p-1 bg-success text-white">mariam@gmail.com</span>
        <span class="ms-auto d-block mt-1 mt-sm-0">Today's Date: Monday, June 14, 2023</span>
    </div>
    <div id="green_header" class="p-3 pt-2 pb-2 mt-5 mt-md-0">
        <span class="h6 text-dark fw-bold">Dashboard |
            Basic Details</span>
    </div>
    <div class="mt-3 rounded p-3 light-green">
        <div class="mb-2">
            <span class="d-inline-block dashboard-label text-sm-end"><strong>Names</strong></span><span
                class="d-block d-sm-inline-block ms-0 ms-sm-3">Adeojo Mariam Dolapo</span>
        </div>
        <div class="mb-2">
            <span class="d-inline-block dashboard-label text-sm-end"><strong>Batch</strong></span><span
                class="d-block d-sm-inline-block ms-0 ms-sm-3">B, 2021</span>
        </div>
        <div class="mb-2">
            <span class="d-inline-block dashboard-label text-sm-end"><strong>GSM No |&nbsp;
                    Gender</strong></span>
            <span class="d-block d-sm-inline-block ms-0 ms-sm-3">08106819128 |
                F</span>
        </div>
        <div class="mb-2">
            <span class="d-inline-block dashboard-label text-sm-end"><strong>Email</strong></span><span
                class="d-block d-sm-inline-block ms-0 ms-sm-3">mariamfunke06@gmail.com</span>
        </div>
        <div class="mb-2">
            <span class="d-inline-block dashboard-label text-sm-end"><strong>Callup
                    No</strong></span>
            <span class="d-block d-sm-inline-block ms-0 ms-sm-3">NYSC/LUT/2021/189763</span>
        </div>
        <div class="mb-2"><span
                class="d-inline-block dashboard-label text-sm-end"><strong>Statecode</strong></span><span
                class="d-block d-sm-inline-block ms-0 ms-sm-3">OS/21B/1557</span></div>
        <div class="mb-2">
            <span class="d-inline-block dashboard-label text-sm-end"><strong>NHIS
                    No</strong></span>
            <span class="d-block d-sm-inline-block ms-0 ms-sm-3">7313232</span>
        </div>
        <div class="mb-2">
            <span class="d-inline-block dashboard-label text-sm-end"><strong>HMO</strong></span><span
                class="d-block d-sm-inline-block ms-0 ms-sm-3 font-size-12">AIICO MULTISHIELD NIGERIA
                LIMITED</span>
        </div>
        <p class="text-success mb-2 font-size-14">Also note that your Graduation Date, Date of Birth and
            Course of Study are going to appear on your Certificate of National Service.</p>
        <p class="text-success mb-2 font-size-14">Ensure that the above are correct before documentation in
            CAMP.</p>
        <p class="text-danger mb-2 font-size-14">Ensure you print your green card slip, sign it And bring it
            to camp. It Is compulsory for registration in camp</p>
    </div>
</div>
@endsection