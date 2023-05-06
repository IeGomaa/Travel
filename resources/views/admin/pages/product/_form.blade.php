<div class="form-group mb-3">
    <label for="name">Name</label>
    <input type="text" id="#name" class="@error('name') is-invalid @enderror form-control" name="name" value="{{ old('name', $product->name ?? '') }}">
</div>

@error('name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group mb-3">
    <label for="price">Price</label>
    <input type="text" id="#price" class="@error('price') is-invalid @enderror form-control" name="price" value="{{ old('price', $product->price ?? '') }}">
</div>

@error('price')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
    <label for="discount">Discount</label>
    <input type="text" id="#discount" class="@error('discount') is-invalid @enderror form-control" name="discount" value="{{ old('discount', $product->discount ?? '') }}">
</div>

@error('discount')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
    <label for="rate">Rate</label>
    <input type="text" id="#rate" class="@error('rate') is-invalid @enderror form-control" name="rate" value="{{ old('rate', $product->rate ?? '') }}">
</div>

@error('rate')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
    <label for="count">Count</label>
    <input type="text" id="#count" class="@error('count') is-invalid @enderror form-control" name="count" value="{{ old('count', $product->count ?? '') }}">
</div>

@error('count')
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
