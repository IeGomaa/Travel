<div id="basic" class="col-lg-12 layout-spacing pr-0 pl-0 mt-5 mb-1">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Country</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <select class="selectpicker" name="country_id">
                @foreach($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

@error('country_id')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div id="fuSingleFile" class="col-lg-12 layout-spacing pr-0 pl-0 mt-5 mb-1">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Image</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <div class="custom-file-container" data-upload-id="myFirstImage">
                <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                <label class="custom-file-container__custom-file" >
                    <input type="file" name="image" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                </label>
                <div class="custom-file-container__image-preview"></div>
            </div>
        </div>
    </div>
</div>

@error('image')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
