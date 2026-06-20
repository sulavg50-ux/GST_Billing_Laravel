@extends('layout.app')

@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title font-weight-bold text-uppercase">Add Clients</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    {{-- Success Message --}}
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- Validation Errors --}}
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <strong>Validation Error! Please fill all required details.</strong>

                            <ul class="mb-0 mt-2">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <h4 class="header-title text-uppercase">Basic Info</h4>
                    <hr>

                    <form class="needs-validation" method="POST" action="{{ route('create-party') }}">
                        @csrf

                        <div class="row">

                            <!-- TYPE -->
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label>Type</label>
                                    <select name="party_type" class="form-control border-bottom" required>
                                        <option value="">Select Type</option>
                                        <option value="client">Client</option>
                                        <option value="vendor">Vendor</option>
                                        <option value="employee">Employee</option>
                                    </select>
                                </div>
                            </div>

                            <!-- FULL NAME -->
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label>Full Name</label>
                                    <input type="text"
                                           name="full_name"
                                           class="form-control border-bottom"
                                           placeholder="Enter client's full name"
                                           value="{{ old('full_name') }}"
                                           required>
                                </div>
                            </div>

                            <!-- PHONE -->
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label>Phone/Mobile</label>
                                    <input type="text"
                                           name="phone_no"
                                           class="form-control border-bottom"
                                           placeholder="Enter phone number"
                                           value="{{ old('phone_no') }}"
                                           required>
                                </div>
                            </div>

                        </div>

                        <!-- ADDRESS -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label>Address</label>
                                    <input type="text"
                                           name="address"
                                           class="form-control border-bottom"
                                           placeholder="Enter Address"
                                           value="{{ old('address') }}"
                                           required>
                                </div>
                            </div>
                        </div>

                        <h4 class="header-title text-uppercase mt-4">Bank Details</h4>
                        <hr>

                        <div class="row">

                            <div class="col-md-4">
                                <label>Account Holder Name</label>
                                <input type="text"
                                       name="account_holder_name"
                                       class="form-control border-bottom"
                                       value="{{ old('account_holder_name') }}"
                                       required>
                            </div>

                            <div class="col-md-4">
                                <label>Account Number</label>
                                <input type="text"
                                       name="account_no"
                                       class="form-control border-bottom"
                                       value="{{ old('account_no') }}"
                                       required>
                            </div>

                            <div class="col-md-4">
                                <label>Bank Name</label>
                                <input type="text"
                                       name="bank_name"
                                       class="form-control border-bottom"
                                       value="{{ old('bank_name') }}"
                                       required>
                            </div>

                        </div>

                        <div class="row mt-3">

                            <div class="col-md-4">
                                <label>IFSC Code</label>
                                <input type="text"
                                       name="ifsc_code"
                                       class="form-control border-bottom"
                                       value="{{ old('ifsc_code') }}"
                                       required>
                            </div>

                            <div class="col-md-4">
                                <label>ZIP Code</label>
                                <input type="text"
                                       name="zip_code"
                                       class="form-control border-bottom"
                                       value="{{ old('zip_code') }}"
                                       required>
                            </div>

                            <div class="col-md-4">
                                <label>State</label>
                                <input type="text"
                                       name="state"
                                       class="form-control border-bottom"
                                       value="{{ old('state') }}"
                                       required>
                            </div>

                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label>Branch Address</label>
                                <input type="text"
                                       name="branch_address"
                                       class="form-control border-bottom"
                                       value="{{ old('branch_address') }}"
                                       required>
                            </div>
                        </div>

                        <br>

                        <button class="btn btn-primary" type="submit">
                            Submit
                        </button>

                        <button class="btn btn-secondary" type="reset">
                            Reset
                        </button>

                    </form>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection