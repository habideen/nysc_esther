@extends('layouts.panel')

@section('title') Update Batch @endsection


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div id="green_header" class="p-3 mt-5 mt-md-0"><span class="h4 text-dark fw-bold">Update Batch</span>
    </div>

    @include('components.alert')

    <div class="mb-3 mt-5">
        <h4>Current batch: <b>{{ currentBatch() }}</b></h4>
    </div>
    <form class="mt-4" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                <div class="form-group">
                    <label class="form-label">Year<span class="ms-2 text-danger">*</span></label>
                    <div class="input-group">
                        <select class="form-control" name="year" id="year" required>
                            <option value=""></option>
                            @php
                            $year = date('Y', strtotime('-1 Years'));
                            @endphp
                            @for ($i=0; $i<=2; $i++) <!-- -->
                                <option value="{{$year + $i}}">{{$year + $i}}</option>
                                @endfor
                        </select>
                        @error('year')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                <div class="form-group">
                    <label class="form-label">Batch<span class="ms-2 text-danger">*</span></label>
                    <div class="input-group">
                        <select class="form-control" name="batch" id="batch" required>
                            <option value=""></option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                        @error('batch')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                <div class="form-group">
                    <label class="form-label">Stream<span class="ms-2 text-danger">*</span></label>
                    <div class="input-group">
                        <select class="form-control" name="stream" id="stream" required>
                            <option value=""></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        @error('stream')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group mt-5"><button class="btn btn-success form-control" type="submit">Save
                        changes</button></div>
            </div>
        </div>
    </form>
</div>
@endsection