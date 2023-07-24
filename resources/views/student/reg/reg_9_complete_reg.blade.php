@extends('layouts.panel')

@section('title') Reg: Complete Registration @endsection


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div id="green_header" class="p-3 mt-5 mt-md-0">
        <span class="h4 text-dark fw-bold">Complete Registration (Stage 9 of
            9)</span>
    </div>

    @include('components.alert')

    <form class="mt-4" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="completeRegistration"
                            name="completeRegistration" required>
                        <label class="form-check-label" for="completeRegistration">
                            I am sure that my registration is complete and valid to the best of my ability. I'm aware
                            that I cannot go back to edit my registration.
                        </label>
                        @error('completeRegistration')
                        <span class="d-block text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5">
                <div class="form-group"><button class="btn btn-success form-control" type="submit">Complete My
                        Registration</button></div>
            </div>
        </div>
    </form>
</div>
@endsection



@section('script')
@endsection