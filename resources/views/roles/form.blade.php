<div class="form-group">
  <label for="name">Role name</label>
  <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $role->name ?? '' }}">
  @error('name')
    <small class="text-danger">{{ $message }}</small>
  @enderror
</div>