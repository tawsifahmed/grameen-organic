@extends('layouts.inventory')
@section('content')
    <div class="inv-community container mb-5">
        <form style="w-100">
            <div class="input-wrapper mb-3 w-sm-25 ">
                <label class="fs-6">Community ID (Auto Generated) </label>
                <input class="form-control" type="text" placeholder="ID" required autofocus>
            </div>
            <div class="row my-4 location-setup w-max-md">
                <div class="col-12 col-md-6">
                    <div class="d-flex mb-3 flex-column input-wrapper select-container">
                        <label class="fs-6">Division</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Dhaka</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                    <div class="d-flex mb-3 flex-column input-wrapper select-container">
                        <label class="fs-6">Upazila</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Rupganj</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                    <div class="d-flex mb-3 flex-column input-wrapper select-container">
                        <label class="fs-6">Village</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Rupganj</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="d-flex mb-3 flex-column input-wrapper select-container">
                        <label class="fs-6">Division</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Dhaka</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                    <div class="d-flex mb-3 flex-column input-wrapper select-container">
                        <label class="fs-6">Upazila</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Rupganj</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                    <div class="d-flex mb-3 flex-column input-wrapper select-container">
                        <a class="btn py-3 btn-primary submit-btn btn-block text-white mt-3" style="background-color: #00BD6A; border:none;">
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
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Belal</option>
                            <option value="2">Dulal</option>
                        </select>
                    </div>
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 2</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Feni</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 3</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Feni</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 4</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Feni</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 5</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Feni</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 1</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Belal</option>
                            <option value="2">Dulal</option>
                        </select>
                    </div>
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 2</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Feni</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 3</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Feni</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 4</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Feni</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                    <div class="d-flex mb-5 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 5</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Feni</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-3 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 1</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Belal</option>
                            <option value="2">Dulal</option>
                        </select>
                    </div>
                    <div class="d-flex mb-3 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 2</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Feni</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                    <div class="d-flex mb-3 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 2</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Feni</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                    <div class="d-flex mb-3 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 2</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Feni</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                    <div class="d-flex mb-3 flex-column input-wrapper select-container">
                        <label class="fs-6">Farmer 2</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Feni</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                </div>
            </div>
            <a class="btn w-sm-25 py-3 btn-primary submit-btn btn-block text-white mt-3" style="background-color: #00BD6A; border:none;">
                Submit
            </a>

        </form>
    </div>

    <script>
        const chooseFiles = document.querySelectorAll(".choose-file");
        const imgPreviews = document.querySelectorAll(".img-preview");

        chooseFiles.forEach((chooseFile) => {
            chooseFile.addEventListener("change", function() {
                const side = this.getAttribute("data-side");
                getImgData(side);
            });
        });

        function getImgData(side) {
            const chooseFile = document.querySelector(`.choose-file[data-side="${side}"]`);
            const imgPreview = document.querySelector(`.img-preview[data-side="${side}"]`);

            const files = chooseFile.files[0];
            if (files) {
                const fileReader = new FileReader();
                fileReader.readAsDataURL(files);
                fileReader.addEventListener("load", function() {
                    imgPreview.style.display = "block";
                    imgPreview.innerHTML = '<img src="' + this.result + '" />';
                });
            }
        }
    </script>
@endsection
