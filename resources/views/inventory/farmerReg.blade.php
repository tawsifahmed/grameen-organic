@extends('layouts.inventory')
@section('content')
    <div class="farmer-reg container mb-5">
        <form style="w-100">
            <div class="signup-inputs mb-3 w-sm-25 ">
                <label class="fs-6">Full Name</label>
                <input class="form-control" type="text" placeholder="Full Name" required autofocus>
            </div>
            <div class="signup-inputs mb-3 w-sm-25">
                <label class="fs-6">NID No / Passport No</label>
                <input class="form-control" type="number" placeholder="00 XXXXXXXX" required autofocus>
            </div>

            {{-- nid back and front --}}
            <label class="fs-6">NID No / Passport Iamge</label>
            <div class="nid-imgs w-50 my-3 d-flex flex-wrap flex-md-nowrap gap-2 d-flex gap-2 align-items-end">
                <div class="file-container">
                    <div class="img-preview" data-side="front"></div>
                    <input type="file" class="choose-file" id="choose-file-front" name="choose-file" accept="image/*"
                        data-side="front" />
                    <label for="choose-file-front" class="file-label">Front Side</label>
                </div>

                <div class="file-container">
                    <div class="img-preview" data-side="back"></div>
                    <input type="file" class="choose-file" id="choose-file-back" name="choose-file" accept="image/*"
                        data-side="back" />
                    <label for="choose-file-back" class="file-label">Back Side</label>
                </div>
            </div>

            {{--  --}}
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="mb-2 d-flex flex-column signup-inputs dob-select-container">
                        <label class="fs-6">Date of Birth</label>
                        <input type="date" class="form-control" id="exampleInputDOB1" placeholder="Date of Birth">
                    </div>
                    <div class=" d-flex mb-3 flex-column signup-inputs select-container">
                        <label class="fs-6">Gender</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="3">Other</option>
                        </select>
                    </div>
                    <div class="signup-inputs mb-3 ">
                        <label class="fs-6">Phone Number</label>
                        <input class="form-control" type="number" placeholder="+880 1XXX XXX" required autofocus>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-3 flex-column signup-inputs select-container">
                        <label class="fs-6">Division</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Dhaka</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                    <div class="d-flex mb-3 flex-column signup-inputs select-container">
                        <label class="fs-6">Upazila</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Rupganj</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                    <div class="d-flex mb-3 flex-column signup-inputs select-container">
                        <label class="fs-6">Village</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Rupganj</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-3 flex-column signup-inputs select-container">
                        <label class="fs-6">Village</label>
                        <select name="format" id="format" class="gender-select" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Rupganj</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                    <div class="d-flex mb-3 flex-column signup-inputs select-container">
                        <label class="fs-6">District</label>
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
