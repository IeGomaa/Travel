<div class="form-group mb-3">
    <label for="name">Name</label>
    <input type="text" id="#name" class="@error('name') is-invalid @enderror form-control" name="name" value="{{ old('name', $user->name ?? '') }}">
</div>

@error('name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group mb-3">
    <label for="email">Email</label>
    <input type="email" id="#email" class="@error('email') is-invalid @enderror form-control" name="email" value="{{ old('email', $user->email ?? '') }}">
</div>

@error('email')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
