<div class="form-group">
  <label for="name">Name</label>
  <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $employee->name ?? '' }}">
  @error('name')
    <small class="invalid-feedback">{{ $message }}</small>
  @enderror
</div>
<div class="form-group">
  <label for="dob">Date of birth</label>
  <input type="date" name="dob" id="dob" class="form-control @error('dob') is-invalid @enderror" value="{{ $employee->dob ?? '' }}">
  @error('dob')
    <small class="invalid-feedback">{{ $message }}</small>
  @enderror
</div>
<div class="form-group">
  <label for="phone">Phone</label>
  <input type="tel" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ $employee->phone ?? '' }}">
  @error('phone')
    <small class="invalid-feedback">{{ $message }}</small>
  @enderror
</div>
<div class="form-group">
  <label for="email">Email</label>
  <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ $employee->email ?? '' }}">
  @error('email')
    <small class="invalid-feedback">{{ $message }}</small>
  @enderror
</div>
<div class="form-group">
  <label for="address">Address</label>
  <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" value="{{ $employee->address ?? '' }}">
  @error('address')
    <small class="invalid-feedback">{{ $message }}</small>
  @enderror
</div>
<div class="form-group">
  <label for="company">Work for</label>
  <select name="company_id" id="company" class="custom-select @error('company_id') is-invalid @enderror">
    <option value="">Please choose a company</option>
    @foreach($companies as $company)
      <option value="{{ $company->id }}" @if(isset($employee) && $employee->company->id === $company->id) selected="selected" @endif>{{ $company->name }}</option>
    @endforeach
  </select>
  @error('company_id')
    <small class="invalid-feedback">{{ $message }}</small>
  @enderror
</div>
<div class="form-group">
  <label>Role</label>
  @foreach($roles as $role)
    <div class="custom-control custom-checkbox">
      <input type="checkbox" name="roles[]" id="{{ $role->id }}" @isset($employee->roles) @foreach($employee->roles as $employee_role) @if($employee_role->id === $role->id) checked @endif @endforeach @endisset value="{{ $role->id }}" class="custom-control-input">
      <label for="{{ $role->id }}" class="custom-control-label">{{ $role->name }}</label>
    </div>
  @endforeach
</div>