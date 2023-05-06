<div class="form-group mb-3">
    <label for="name">Name</label>
    <input type="text" id="#name" class="@error('name') is-invalid @enderror form-control" name="name" value="{{ old('name', $employee->name ?? '') }}">
</div>

@error('name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group mb-3">
    <label for="email">Email</label>
    <input type="text" id="#email" class="@error('email') is-invalid @enderror form-control" name="email" value="{{ old('email', $employee->email ?? '') }}">
</div>

@error('email')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" id="#phone" class="@error('phone') is-invalid @enderror form-control" name="phone" value="{{ old('phone', $employee->phone ?? '') }}">
</div>

@error('phone')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
    <label for="password">Password</label>
    <input type="password" id="#password" class="@error('password') is-invalid @enderror form-control" name="password" value="{{ old('password', '') }}">
</div>

@error('password')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
    <label for="password_confirmation">Password Confirmation</label>
    <input type="password" id="#password_confirmation" class="@error('password_confirmation') is-invalid @enderror form-control" name="password_confirmation" value="{{ old('password_confirmation', '') }}">
</div>

@error('password_confirmation')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
    <label for="location">Location</label>
    <input type="text" id="#location" class="@error('location') is-invalid @enderror form-control" name="location" value="{{ old('location', $employee->location ?? '') }}">
</div>

@error('location')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div id="basic" class="col-lg-12 layout-spacing pr-0 pl-0 mt-5 mb-1">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Position</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <select class="selectpicker" name="position">
                <option value="developer">Developer</option>
                <option value="designer">Designer</option>
                <option value="hr">Hr</option>
                <option value="worker">Worker</option>
                <option value="manager">Manager</option>
                <option value="driver">Driver</option>
            </select>
        </div>
    </div>
</div>

@error('position')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="input-group mb-4">
    <div class="input-group-prepend">
        <span class="input-group-text">Biography</span>
    </div>
    <textarea class="form-control" aria-label="Biography" name="biography">{{ old('biography', $employee->biography ?? '') }}</textarea>
</div>

@error('biography')
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
