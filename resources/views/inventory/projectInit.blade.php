@extends('layouts.inventory')
@section('content')
    <div class="project-init container mb-5">
        <form>

            {{-- add project infos --}}
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="input-wrapper">
                        <label class="fs-6">Project ID</label>
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

            {{-- add project location --}}
            <div class="row my-4">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-3 flex-column input-wrapper select-container">
                        <label class="fs-6">Division</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Dhaka</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-3 flex-column input-wrapper select-container">
                        <label class="fs-6">Upazila</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Rupganj</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-3 flex-column input-wrapper select-container">
                        <label class="fs-6">Village</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Rupganj</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="d-flex mb-3 flex-column input-wrapper select-container">
                        <label class="fs-6">Division</label>
                        <select name="format" id="format" class="input-selector" data-width="fit">
                            <option value="0">Select</option>
                            <option value="1">Dhaka</option>
                            <option value="2">Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
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

            {{--  add farmer --}}
            <div class="row farmer-group-setup">
                <div class="d-flex align-items-center gap-2">
                    <label class="fs-6">Add Farmer</label>

                    {{-- add btn --}}
                    <div class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                            viewBox="0 0 24 24">
                            <path
                                d="M 12 2 C 6.4889971 2 2 6.4889971 2 12 C 2 17.511003 6.4889971 22 12 22 C 17.511003 22 22 17.511003 22 12 C 22 6.4889971 17.511003 2 12 2 z M 12 4 C 16.430123 4 20 7.5698774 20 12 C 20 16.430123 16.430123 20 12 20 C 7.5698774 20 4 16.430123 4 12 C 4 7.5698774 7.5698774 4 12 4 z M 11 7 L 11 11 L 7 11 L 7 13 L 11 13 L 11 17 L 13 17 L 13 13 L 17 13 L 17 11 L 13 11 L 13 7 L 11 7 z">
                            </path>
                        </svg>
                    </div>
                </div>

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
            </div>
            {{-- project description --}}
            <div class="row">
                <div class="col-12">
                    <div class="input-wrapper">
                        <label class="fs-6">Project Description</label>
                        <input class="form-control project-desc-input" type="text" placeholder="Description" required
                            autofocus>
                    </div>
                </div>
            </div>
            <div class="row multi-img-upload">
                <div class="upload__box">
                    <div class="upload__img-wrap"></div>
                    <div class="upload__btn-box">
                        <label class="upload__btn">
                          <p>Upload images</p>
                          <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
                        </label>
                      </div>
                  </div>
            </div>
            <a class="col-12 btn py-3 btn-primary submit-btn btn-block text-white mt-3"
                style="background-color: #00BD6A; border:none;">
                Submit
            </a>


    </div>

    </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        jQuery(document).ready(function () {
  ImgUpload();
});

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $('.upload__inputfile').each(function () {
    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });

  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}
    </script>
@endsection
