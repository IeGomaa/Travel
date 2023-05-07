<div class="input-group mb-4">
    <div class="input-group-prepend">
        <span class="input-group-text">Description</span>
    </div>
    <textarea class="form-control" aria-label="Description" name="description">{{ old('description', $testimonial->description ?? '') }}</textarea>
</div>

@error('description')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
    <label for="rate">Rate</label>
    <input type="text" id="#rate" class="@error('rate') is-invalid @enderror form-control" name="rate" value="{{ old('rate', $testimonial->rate ?? '') }}">
</div>

@error('rate')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div id="basic" class="col-lg-12 layout-spacing pr-0 pl-0 mt-5 mb-1">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Customer</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <select class="selectpicker" name="customer_id">
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

@error('customer_id')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
