@extends('layouts.myAccount')
@section('content')
    <div class="account-nominee container mb-5">
        <form style="w-100">
            <div class="input-wrapper mb-3 w-sm-25 ">
                <label class="fs-6">Nominee Name</label>
                <input class="form-control" type="text" placeholder="Provide nominee name" required autofocus>
            </div>
            <div class="w-sm-25 d-flex mb-3 flex-column input-wrapper gender-select-container">
                <label class="fs-6">Gender</label>
                <select name="format" id="format" class="gender-select" data-width="fit">
                    <option value="0">Male</option>
                    <option value="1">Female</option>
                    <option value="2">Other</option>
                </select>
            </div>
            <div class="input-wrapper mb-3 w-sm-25 ">
                <label class="fs-6">Relationship</label>
                <input class="form-control" type="text" placeholder="wife / husband / son" required autofocus>
            </div>

            <div class="input-wrapper mb-3 w-sm-25">
                <label class="fs-6">Phone Number</label>
                <input class="form-control" type="number" placeholder="+880 1XXX XXX" required autofocus>
            </div>

            <div class="input-wrapper mb-3 w-sm-25">
                <label class="fs-6">NID No / Passport No</label>
                <input class="form-control" type="number" placeholder="00 XXXXXXXX" required autofocus>
            </div>

            {{-- nominee nid back and front --}}
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
