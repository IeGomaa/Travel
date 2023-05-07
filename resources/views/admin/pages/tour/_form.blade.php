<div class="form-group mb-3">
    <label for="name">Name</label>
    <input type="text" id="#name" class="@error('name') is-invalid @enderror form-control" name="name" value="{{ old('name', $tour->name ?? '') }}">
</div>

@error('name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group mb-3">
    <label for="number_of_days">Number Of Days</label>
    <input type="text" id="#number_of_days" class="@error('number_of_days') is-invalid @enderror form-control" name="number_of_days" value="{{ old('number_of_days', $tour->number_of_days ?? '') }}">
</div>

@error('number_of_days')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
    <label for="rate">Rate</label>
    <input type="text" id="#rate" class="@error('rate') is-invalid @enderror form-control" name="rate" value="{{ old('rate', $tour->rate ?? '') }}">
</div>

@error('rate')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="input-group mb-4">
    <div class="input-group-prepend">
        <span class="input-group-text">Description</span>
    </div>
    <textarea class="form-control" aria-label="Description" name="description">{{ old('description', $tour->description ?? '') }}</textarea>
</div>

@error('description')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
    <label for="location">Location</label>
    <input type="text" id="#location" class="@error('location') is-invalid @enderror form-control" name="location" value="{{ old('location', $tour->location ?? '') }}">
</div>

@error('location')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
    <label for="price">Price</label>
    <input type="text" id="#price" class="@error('price') is-invalid @enderror form-control" name="price" value="{{ old('price', $tour->price ?? '') }}">
</div>

@error('price')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
    <label for="discount">Discount</label>
    <input type="text" id="#discount" class="@error('discount') is-invalid @enderror form-control" name="discount" value="{{ old('discount', $tour->discount ?? '') }}">
</div>

@error('discount')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
    <label for="date">Date</label>
    <input type="date" id="#date" class="@error('date') is-invalid @enderror form-control" name="date" value="{{ old('date', $tour->date ?? '') }}">
</div>

@error('date')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

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

<div id="basic" class="col-lg-12 layout-spacing pr-0 pl-0 mt-5 mb-1">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Travel Type</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <select class="selectpicker" name="travel_type_id">
                @foreach($travelTypes as $travelType)
                    <option value="{{ $travelType->id }}">{{ $travelType->type }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

@error('travel_type_id')
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

<div id="fuSingleFile" class="col-lg-12 layout-spacing pr-0 pl-0 mt-5 mb-1">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Icon</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <div class="custom-file-container" data-upload-id="mySecondImage">
                <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                <label class="custom-file-container__custom-file" >
                    <input type="file" name="icon" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                </label>
                <div class="custom-file-container__image-preview"></div>
            </div>
        </div>
    </div>
</div>

@error('icon')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
