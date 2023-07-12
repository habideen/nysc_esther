@extends('layouts.panel')

@section('title') Reg: NIN Validation @endsection


@section('content')
<div class="col-12 col-md-8 col-lg-9">
    <div id="green_header" class="p-3 mt-5 mt-md-0"><span class="h4 text-dark fw-bold">NIN Validation (Stage 1 of
            8)</span>
    </div>

    @include('components.alert')

    <form class="mt-4" method="post" accept="{{url('/student/reg/step/1')}}">
        @csrf
        <div class="row">
            <div class="col-12 mb-3">
                <div class="form-group">
                    <label class="form-label">National Identity Number (NIN)<span
                            class="ms-2 text-danger">*</span></label>
                    <div class="input-group">
                        <input class="form-control" type="text" id="national_identity_number"
                            name="national_identity_number" pattern="^[0-9]+$" maxlength="11" minlength="11" required=""
                            value="{{old('national_identity_number') ?? $user->national_identity_number ?? ''}}">
                        <div class="input-group-append">
                            <button class="btn btn-danger" type="button" onclick="validateNIN()">Fetch</button>
                        </div>
                    </div><span class="font-size-12">Enter your NIN number and fetch to validate</span>
                    @error('national_identity_number')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="form-group">
                    <label class="form-label">Birthdate<span class="ms-2 text-danger">*</span></label>
                    <div>
                        <input class="form-control" type="text" id="birthdate" readonly="" name="birthdate" required=""
                            value="{{old('birthdate') ?? $user->birthdate ?? ''}}">
                    </div>
                    <span class="font-size-12">DD-MM-YYYY</span>
                    @error('birthdate')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="form-group">
                    <label class="form-label">Surname<span class="ms-2 text-danger">*</span></label>
                    <div>
                        <input class="form-control" type="text" id="last_name" name="last_name" pattern="^[a-zA-Z \-]+$"
                            required="" minlength="2" maxlength="30"
                            value="{{old('last_name') ?? $user->last_name ?? ''}}">
                    </div>
                    @error('last_name')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="form-group">
                    <label class="form-label" for="first_name">First
                        Name<span class="ms-2 text-danger">*</span></label>
                    <div>
                        <input class="form-control" type="text" required="" pattern="^[a-zA-Z \-]+$" minlength="2"
                            maxlength="30" id="first_name" name="first_name"
                            value="{{old('first_name') ?? $user->first_name ?? ''}}">
                    </div>
                    @error('first_name')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <div class="form-group">
                    <label class="form-label">Middle Name</label>
                    <div>
                        <input class="form-control" type="text" id="middle_name" name="middle_name" minlength="2"
                            maxlength="30" pattern="^[a-zA-Z \-]+$"
                            value="{{old('middle_name') ?? $user->middle_name ?? ''}}">
                    </div>
                    @error('middle_name')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group mt-5"><button class="btn btn-success form-control" type="submit">Save
                        changes &amp; continue</button></div>
            </div>
        </div>
    </form>
</div>
@endsection


@section('script')
<script>
    $(document).ready(function() {
        $(window).keydown(function(event){
            if(event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
       
        $('#national_identity_number').val(Math.floor(100000000 + Math.random() * 90000000000));
        if ('{{$user->national_identity_number}}' != '') {
            $('#national_identity_number').val('{{$user->national_identity_number}}')
        }
    });


    function validateNIN() {
        let nin = $('#national_identity_number').val().trim()
        if (!/^[0-9]{11,11}$/.test(nin)) {
            alert('Please enter a valid nin')
            return
        }
        $.getJSON('{{url('/student/reg/step/check_nin')}}', { name:'Steve'}, function(data, textStatus, jqXHR){
                $('#birthdate').val(data.birthdate)

        })
        .done(function () { console.log('Done'); })
        .fail(function (jqxhr,settings,ex) { alert('An error occured! Please try again.'); });
    }


    $("form").submit(function(){
        if ($('#birthdate').val().trim() == '') {
            event.preventDefault()
            alert('Please validate your NIN first')
        }
    });
</script>
@endsection