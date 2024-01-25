@extends('layouts.inventory')
@section('content')
    <div class="project-init container mb-5">
        <form style="w-100">
            <div class="input-wrapper mb-3 w-sm-25 ">
                <label class="fs-6">Project ID</label>
                <input class="form-control" type="text" placeholder="ID" required autofocus>
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
                    <div class="d-flex mb-3 flex-column input-wrapper select-container">
                        <a class="btn py-3 btn-primary submit-btn btn-block text-white mt-3"
                            style="background-color: #00BD6A; border:none;">
                            Submit
                        </a>
                    </div>
                </div>
            </div>

            {{--  --}}
            <div class="row farmer-group-setup">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 1</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Belal</option>
                            <option value="2">Dulal</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 2</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Belal</option>
                            <option value="2">Dulal</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 3</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Belal</option>
                            <option value="2">Dulal</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 4</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Belal</option>
                            <option value="2">Dulal</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 5</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Belal</option>
                            <option value="2">Dulal</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 6</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Belal</option>
                            <option value="2">Dulal</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 7</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Belal</option>
                            <option value="2">Dulal</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 8</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Belal</option>
                            <option value="2">Dulal</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 9</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Belal</option>
                            <option value="2">Dulal</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 10</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Belal</option>
                            <option value="2">Dulal</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 11</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Belal</option>
                            <option value="2">Dulal</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 12</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Belal</option>
                            <option value="2">Dulal</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 13</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Belal</option>
                            <option value="2">Dulal</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 14</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Belal</option>
                            <option value="2">Dulal</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 15</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Belal</option>
                            <option value="2">Dulal</option>
                        </select>
                    </div>
                </div>

                <a class="col-12 btn py-3 btn-primary submit-btn btn-block text-white mt-3"
                    style="background-color: #00BD6A; border:none;">
                    Submit
                </a>
            </div>
    </div>

    </form>
    </div>
@endsection
