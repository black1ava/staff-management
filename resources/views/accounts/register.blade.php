@extends('layout.index')
@section('content')
  <div class="card">
    <div class="card-body">
      <div class="card-header">
        <h2>Register</h2>
      </div>
      <form action="{{ route('account.register') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control">
          @error('name')
            {{ $message }}
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control">
          @error('email')
            {{ $message }}
          @enderror
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control">
          @error('password')
            {{ $message }}
          @enderror
        </div>
        <div class="form-group">
          <label for="password_confirmation">Confirm password</label>
          <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
        </div>
        <button class="btn btn-primary">Register</button>
      </form>
    </div>
  </div>
@endsection