<div class="form-group mb-3">
    <label for="name">Name</label>
    <input type="text" id="#name" class="@error('name') is-invalid @enderror form-control" name="name" value="{{ old('name', $country->name ?? '') }}">
</div>

@error('name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group mb-3">
    <label for="iso">Iso</label>
    <input type="text" id="#iso" class="@error('iso') is-invalid @enderror form-control" name="iso" value="{{ old('iso', $country->iso ?? '') }}">
</div>

@error('iso')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
    <label for="code">Country Code</label>
    <input type="text" id="#code" class="@error('code') is-invalid @enderror form-control" name="code" value="{{ old('code', $country->code ?? '') }}">
</div>

@error('code')
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
