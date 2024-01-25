@extends('layouts.inventory')
@section('content')
    <div class="beneficiary-mng container mb-5">
        <form style="w-100">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="input-wrapper">
                        <label class="fs-6">Community ID (Auto Generated) </label>
                        <input class="form-control" type="text" placeholder="ID" required autofocus>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Project Type</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Short Term</option>
                            <option value="2">Long Term</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Project Status</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="input-wrapper">
                        <label class="fs-6">Project Value</label>
                        <input class="form-control" type="text" placeholder="Taka" required autofocus>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="input-wrapper">
                        <label class="fs-6">Expected Return Value (Min)</label>
                        <input class="form-control" type="text" placeholder="Taka" required autofocus>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="input-wrapper">
                        <label class="fs-6">Expected Return Value (Max)</label>
                        <input class="form-control" type="text" placeholder="Taka" required autofocus>
                    </div>
                </div>
            </div>
            <div class="row my-4 location-setup">
                <div class="col-12 col-md-6">
                    <div class="d-flex mb-3 flex-column input-wrapper select-container">
                        <label class="fs-6">Division</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Dhaka</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                    <div class="d-flex mb-3 flex-column input-wrapper select-container">
                        <label class="fs-6">Upazila</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Rupganj</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                    <div class="d-flex mb-3 flex-column input-wrapper select-container">
                        <label class="fs-6">Village</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Rupganj</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="d-flex mb-3 flex-column input-wrapper select-container">
                        <label class="fs-6">Division</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Dhaka</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                    <div class="d-flex mb-3 flex-column input-wrapper select-container">
                        <label class="fs-6">Upazila</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Rupganj</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                </div>
            </div>

            {{--  --}}
            <label class="fs-6">Add Beneficiary</label>
            <div class="beneficiary-setup">
                <div class="row beneficiary-inputs-wrapper">
                    <div class="col-12 col-md-4 py-2">
                            <div class="input-wrapper">
                                <label class="fs-6">Beneficiary ID </label>
                                <input class="form-control" type="text" placeholder="Beneficiary ID" required autofocus>
                            </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                            <div class="input-wrapper">
                                <label class="fs-6">Beneficiary Invoice No</label>
                                <input class="form-control" type="text" placeholder="Beneficiary Invoice No" required autofocus>
                            </div>
                    </div>
                    <div class="col-12 col-md-2 py-2">
                            <div class="input-wrapper">
                                <label class="fs-6">No of Unit</label>
                                <input class="form-control" type="text" placeholder="No of Unit" required autofocus>
                            </div>
                    </div>
                    <div class="col-12 col-md-2 py-2">
                            <div class="input-wrapper">
                                <label class="fs-6">Total Taka</label>
                                <input class="form-control" type="text" placeholder="Total Taka" required autofocus>
                            </div>
                    </div>
                </div>
                <div class="row beneficiary-inputs-wrapper">
                    <div class="col-12 col-md-4 py-2">
                            <div class="input-wrapper">
                                <label class="fs-6">Beneficiary ID </label>
                                <input class="form-control" type="text" placeholder="Beneficiary ID" required autofocus>
                            </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                            <div class="input-wrapper">
                                <label class="fs-6">Beneficiary Invoice No</label>
                                <input class="form-control" type="text" placeholder="Beneficiary Invoice No" required autofocus>
                            </div>
                    </div>
                    <div class="col-12 col-md-2 py-2">
                            <div class="input-wrapper">
                                <label class="fs-6">No of Unit</label>
                                <input class="form-control" type="text" placeholder="No of Unit" required autofocus>
                            </div>
                    </div>
                    <div class="col-12 col-md-2 py-2">
                            <div class="input-wrapper">
                                <label class="fs-6">Total Taka</label>
                                <input class="form-control" type="text" placeholder="Total Taka" required autofocus>
                            </div>
                    </div>
                </div>
                <div class="row beneficiary-inputs-wrapper">
                    <div class="col-12 col-md-4 py-2">
                            <div class="input-wrapper">
                                <label class="fs-6">Beneficiary ID </label>
                                <input class="form-control" type="text" placeholder="Beneficiary ID" required autofocus>
                            </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                            <div class="input-wrapper">
                                <label class="fs-6">Beneficiary Invoice No</label>
                                <input class="form-control" type="text" placeholder="Beneficiary Invoice No" required autofocus>
                            </div>
                    </div>
                    <div class="col-12 col-md-2 py-2">
                            <div class="input-wrapper">
                                <label class="fs-6">No of Unit</label>
                                <input class="form-control" type="text" placeholder="No of Unit" required autofocus>
                            </div>
                    </div>
                    <div class="col-12 col-md-2 py-2">
                            <div class="input-wrapper">
                                <label class="fs-6">Total Taka</label>
                                <input class="form-control" type="text" placeholder="Total Taka" required autofocus>
                            </div>
                    </div>
                </div>
                <div class="row beneficiary-inputs-wrapper">
                    <div class="col-12 col-md-4 py-2">
                            <div class="input-wrapper">
                                <label class="fs-6">Beneficiary ID </label>
                                <input class="form-control" type="text" placeholder="Beneficiary ID" required autofocus>
                            </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                            <div class="input-wrapper">
                                <label class="fs-6">Beneficiary Invoice No</label>
                                <input class="form-control" type="text" placeholder="Beneficiary Invoice No" required autofocus>
                            </div>
                    </div>
                    <div class="col-12 col-md-2 py-2">
                            <div class="input-wrapper">
                                <label class="fs-6">No of Unit</label>
                                <input class="form-control" type="text" placeholder="No of Unit" required autofocus>
                            </div>
                    </div>
                    <div class="col-12 col-md-2 py-2">
                            <div class="input-wrapper">
                                <label class="fs-6">Total Taka</label>
                                <input class="form-control" type="text" placeholder="Total Taka" required autofocus>
                            </div>
                    </div>
                </div>
                <div class="row beneficiary-inputs-wrapper">
                    <div class="col-12 col-md-4 py-2">
                            <div class="input-wrapper">
                                <label class="fs-6">Beneficiary ID </label>
                                <input class="form-control" type="text" placeholder="Beneficiary ID" required autofocus>
                            </div>
                    </div>
                    <div class="col-12 col-md-4 py-2">
                            <div class="input-wrapper">
                                <label class="fs-6">Beneficiary Invoice No</label>
                                <input class="form-control" type="text" placeholder="Beneficiary Invoice No" required autofocus>
                            </div>
                    </div>
                    <div class="col-12 col-md-2 py-2">
                            <div class="input-wrapper">
                                <label class="fs-6">No of Unit</label>
                                <input class="form-control" type="text" placeholder="No of Unit" required autofocus>
                            </div>
                    </div>
                    <div class="col-12 col-md-2 py-2">
                            <div class="input-wrapper">
                                <label class="fs-6">Total Taka</label>
                                <input class="form-control" type="text" placeholder="Total Taka" required autofocus>
                            </div>
                    </div>
                </div>
                <a class="col-12 btn py-3 btn-primary submit-btn btn-block text-white mt-3"
                    style="background-color: #00BD6A; border:none;">
                    Submit
                </a>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="input-wrapper">
                        <label class="fs-6">Total Invested Amount </label>
                        <input class="form-control" type="text" placeholder="Taka" required autofocus>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="input-wrapper">
                        <label class="fs-6">Due Amount</label>
                        <input class="form-control" type="text" placeholder="Taka" required autofocus>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="input-wrapper">
                        <label class="fs-6">Due Unit(s)</label>
                        <input class="form-control" type="text" placeholder="Unit numbers" required autofocus>
                    </div>
                </div>
            </div>
    </div>

    </form>
    </div>
@endsection
