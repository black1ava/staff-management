<div class="form-group">
  <label for="name">Name</label>
  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ $company->name ?? '' }}">
  @error('name')
    <small class="invalid-feedback">{{ $message }}</small>
  @enderror
</div>
<div class="form-group">
  <label for="location">Location</label>
  <input type="text" name="location" class="form-control" id="location" value="{{ $company->location ?? '' }}">
</div>
<div class="form-group">
  <label for="email">Email</label>
  <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ $company->email ?? '' }}">   
  @error('email')
    <small class="invalid-feedback">{{ $message }}</small>
  @enderror       
</div>
<div class="form-group">
  <label for="phone">Phone number</label>
  <input type="tel" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ $company->phone ?? '' }}">
  @error('phone')
    <small class="invalid-feedback">{{ $message }}</small>
  @enderror
</div>