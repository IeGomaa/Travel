<div class="form-group mb-3">
    <label for="title">Title</label>
    <input type="text" id="#title" class="@error('title') is-invalid @enderror form-control" name="title" value="{{ old('title', $slider->title ?? '') }}">
</div>

@error('title')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group mb-3">
    <label for="description">Description</label>
    <input type="text" id="#description" class="@error('description') is-invalid @enderror form-control" name="description" value="{{ old('description', $slider->description ?? '') }}">
</div>

@error('description')
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
